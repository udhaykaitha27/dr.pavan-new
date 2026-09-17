<?php
/**
 * Lead Form Submission Handler API
 */

require_once '../includes/config.php';
require_once '../includes/functions.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die("Method Not Allowed");
}

// 1. CSRF Verification
$csrf_token = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';
if (!validateCSRFToken($csrf_token)) {
    http_response_code(403);
    die("Security verification failed. Invalid CSRF token.");
}

// 2. Extract and Sanitize Inputs
$form_type = isset($_POST['form_type']) ? sanitizeInput($_POST['form_type']) : 'contact';
$name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
$phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : null;
$message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : null;
$preferred_date = isset($_POST['preferred_date']) ? sanitizeInput($_POST['preferred_date']) : null;
$preferred_time = isset($_POST['preferred_time']) ? sanitizeInput($_POST['preferred_time']) : null;

// Empty strings to null conversion
if (empty($email)) $email = null;
if (empty($message)) $message = null;
if (empty($preferred_date)) $preferred_date = null;
if (empty($preferred_time)) $preferred_time = null;

// 3. Form Validation
if (empty($name) || empty($phone)) {
    http_response_code(400);
    die("Validation failed. Name and phone number are required.");
}

// Validate Phone (exactly 10 digits as specified in pattern)
if (!preg_match('/^[0-9]{10}$/', $phone)) {
    http_response_code(400);
    die("Validation failed. Phone number must be a valid 10-digit number.");
}

// Validate Email if provided
if ($email !== null && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    die("Validation failed. Email address format is invalid.");
}

// 4. Rate Limiting Protection (Prevent Spam)
$client_ip = getClientIP();
if (!checkRateLimit($client_ip, $form_type)) {
    http_response_code(429);
    die("Too many requests. Please wait a few minutes before submitting again.");
}

// 5. Gather UTM & Ad Parameters
$utm_source = isset($_POST['utm_source']) ? sanitizeInput($_POST['utm_source']) : null;
$utm_medium = isset($_POST['utm_medium']) ? sanitizeInput($_POST['utm_medium']) : null;
$utm_campaign = isset($_POST['utm_campaign']) ? sanitizeInput($_POST['utm_campaign']) : null;
$utm_term = isset($_POST['utm_term']) ? sanitizeInput($_POST['utm_term']) : null;
$utm_content = isset($_POST['utm_content']) ? sanitizeInput($_POST['utm_content']) : null;
$gclid = isset($_POST['gclid']) ? sanitizeInput($_POST['gclid']) : null;
$fbclid = isset($_POST['fbclid']) ? sanitizeInput($_POST['fbclid']) : null;
$landing_url = isset($_POST['landing_url']) ? sanitizeInput($_POST['landing_url']) : null;
$referrer_url = isset($_POST['referrer_url']) ? sanitizeInput($_POST['referrer_url']) : null;
$source_page = isset($_POST['source_page']) ? sanitizeInput($_POST['source_page']) : null;
$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;

// 6. DB Prepared Insertion
$db = getDBConnection();
try {
    $sql = "INSERT INTO leads (
                form_type, name, phone, email, message, 
                preferred_date, preferred_time, source_page,
                utm_source, utm_medium, utm_campaign, utm_term, utm_content, 
                gclid, fbclid, landing_url, referrer_url, 
                ip_address, user_agent
            ) VALUES (
                :form_type, :name, :phone, :email, :message, 
                :preferred_date, :preferred_time, :source_page,
                :utm_source, :utm_medium, :utm_campaign, :utm_term, :utm_content, 
                :gclid, :fbclid, :landing_url, :referrer_url, 
                :ip_address, :user_agent
            )";
            
    $stmt = $db->prepare($sql);
    
    $stmt->execute([
        'form_type' => $form_type,
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'message' => $message,
        'preferred_date' => $preferred_date,
        'preferred_time' => $preferred_time,
        'source_page' => $source_page,
        'utm_source' => $utm_source,
        'utm_medium' => $utm_medium,
        'utm_campaign' => $utm_campaign,
        'utm_term' => $utm_term,
        'utm_content' => $utm_content,
        'gclid' => $gclid,
        'fbclid' => $fbclid,
        'landing_url' => $landing_url,
        'referrer_url' => $referrer_url,
        'ip_address' => $client_ip,
        'user_agent' => $user_agent
    ]);
    
    // Clear CSRF token to prevent replay
    unset($_SESSION['csrf_token']);
    
    // Redirect to Thank You Page
    header("Location: ../thank-you.php");
    exit();
    
} catch (PDOException $e) {
    error_log("Database insertion failed: " . $e->getMessage());
    http_response_code(500);
    die("An unexpected error occurred during submission. Please try again later.");
}
