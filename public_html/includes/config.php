<?php
/**
 * Configuration Settings for Dr. Pavan Kumar Ediga Website
 */

// Start session if not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set timezone
date_default_timezone_set('Asia/Kolkata');

// Derive the public URL path from this project's location under the web root.
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://';
$project_root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..');
$document_root = isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : false;
$base_path = '/';

if ($project_root !== false && $document_root !== false) {
    $document_root = rtrim($document_root, '\\/');
    $root_prefix = $document_root . DIRECTORY_SEPARATOR;

    if (stripos($project_root, $root_prefix) === 0) {
        $relative_path = substr($project_root, strlen($root_prefix));
        $base_path = '/' . str_replace(DIRECTORY_SEPARATOR, '/', $relative_path) . '/';
    } elseif (strcasecmp($project_root, $document_root) === 0) {
        $base_path = '/';
    }
}
define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . $base_path);

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'u653458429_drvinayausekar');
define('DB_PASS', 'Ausekar@123');
define('DB_NAME', 'u653458429_drvinayausekar');

// Tracking Code Identifiers (Replace with active marketing IDs)
define('TRACKING_GTM', 'GTM-TG2JNHJ3'); // Google Tag Manager
define('TRACKING_GA4', 'G-XXXXXXXXXX'); // Google Analytics 4
define('TRACKING_META_PIXEL', 'XXXXXXXXXXXXXXX'); // Meta Pixel ID
define('TRACKING_GOOGLE_ADS_CONVERSION', 'AW-16505212384'); // Google Ads Account ID
define('TRACKING_CLARITY_ID', 'XXXXXXXXXX'); // Microsoft Clarity ID
define('TRACKING_GSC_VERIFICATION', 'google-site-verification-id'); // GSC Verification Tag

// Clinic Details
define('CLINIC_PHONE_1', '+91 70930 85231');
define('CLINIC_PHONE_2', '+91 91608 50650');
define('CLINIC_EMAIL', 'dr.pavankumarediga@gmail.com');
define('CLINIC_WHATSAPP_LINK', 'https://wa.me/917093085231?text=Hello%2C%20I%20would%20like%20to%20schedule%20an%20appointment%20with%20Dr.%20Pavan%20Kumar%20Ediga.');
define('CLINIC_NAME_1', 'Medicover Hospitals');
define('CLINIC_ADDRESS_1', '322, Myscape Rd, Financial District, Nanakramguda, Hyderabad, Telangana 500032');
define('CLINIC_MAP_1', 'https://maps.app.goo.gl/6nWMAYGyRxUr9qJz7');
define('CLINIC_HOURS_1', 'Mon - Sat: 09:00 AM - 05:00 PM');

define('CLINIC_NAME_2', 'Pavan Brain & Spine Clinic');
define('CLINIC_ADDRESS_2', 'Secretariat Employees Colony, Manikonda, Hyderabad, Telangana 500089');
define('CLINIC_MAP_2', 'https://maps.app.goo.gl/ULakSdFB7i8djmX1A');
define('CLINIC_HOURS_2', 'Mon - Sat: 05:30 PM - 09:30 PM');
