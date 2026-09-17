<?php
/**
 * Core Helper Functions for Dr. Pavan Kumar Ediga Website
 */

require_once __DIR__ . '/config.php';

/**
 * Get a connection to the database
 */
function getDBConnection() {
    static $conn = null;
    if ($conn === null) {
        try {
            $conn = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        } catch (PDOException $e) {
            // Log error internally in production instead of showing it
            error_log("Database Connection Failure: " . $e->getMessage());
            die("Connection failed. Please try again later.");
        }
    }
    return $conn;
}

/**
 * Sanitize input values
 */
function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Escape output to prevent XSS
 */
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Generate CSRF Token and store in session
 */
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Validate CSRF Token
 */
function validateCSRFToken($token) {
    if (!isset($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Rate Limiting to prevent Form Spam (IP-based)
 * Max 3 submissions per IP per 5 minutes
 */
function checkRateLimit($ip, $formType) {
    $db = getDBConnection();
    try {
        $stmt = $db->prepare("
            SELECT COUNT(*) as count 
            FROM leads 
            WHERE ip_address = :ip 
              AND form_type = :form_type 
              AND submission_time > DATE_SUB(NOW(), INTERVAL 5 MINUTE)
        ");
        $stmt->execute(['ip' => $ip, 'form_type' => $formType]);
        $result = $stmt->fetch();
        return ($result['count'] < 3); // Return true if under the rate limit
    } catch (PDOException $e) {
        error_log("Rate limiting query error: " . $e->getMessage());
        return true; // Fail open in case of query failure, but log it
    }
}

/**
 * Helper to get the Client IP Address
 */
function getClientIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Handle multiple proxies if present
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ips[0]);
    }
    return $_SERVER['REMOTE_ADDR'];
}
