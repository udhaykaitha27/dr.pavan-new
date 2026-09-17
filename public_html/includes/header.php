<?php
/**
 * Global Header Component
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/tracking.php';

// Set default SEO parameters if not set in pages
if (!isset($page_title)) {
    $page_title = "Dr. Pavan Kumar Ediga | Consultant Neurosurgeon in Hyderabad";
}
if (!isset($meta_description)) {
    $meta_description = "Dr. Pavan Kumar Ediga is a leading Consultant Neurosurgeon in Hyderabad, specializing in Neuro Trauma, Neuro Oncology, and Minimally Invasive Endoscopic Spine Surgery.";
}
$canonical_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary Meta Tags -->
    <title><?php echo escape($page_title); ?></title>
    <meta name="title" content="<?php echo escape($page_title); ?>">
    <meta name="description" content="<?php echo escape($meta_description); ?>">
    <link rel="canonical" href="<?php echo escape($canonical_url); ?>">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/doctor.webp">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo escape($canonical_url); ?>">
    <meta property="og:title" content="<?php echo escape($page_title); ?>">
    <meta property="og:description" content="<?php echo escape($meta_description); ?>">
    <meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/pavan-kumar.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo escape($canonical_url); ?>">
    <meta property="twitter:title" content="<?php echo escape($page_title); ?>">
    <meta property="twitter:description" content="<?php echo escape($meta_description); ?>">
    <meta property="twitter:image" content="<?php echo BASE_URL; ?>assets/images/pavan-kumar.jpg">

    <!-- Preconnect / Preload for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://unpkg.com">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="crossorigin">
    
    <!-- Custom Style Sheet -->
    <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet">

    <!-- Global Marketing Tracking (Head Section) -->
    <?php renderTrackingHead(); ?>
</head>
<body class="d-flex flex-column h-100">
    <!-- Global Marketing Tracking (Body Section) -->
    <?php renderTrackingBody(); ?>
