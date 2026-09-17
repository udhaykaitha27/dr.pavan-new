<?php
/**
 * Navigation Bar Component
 */
require_once __DIR__ . '/config.php';
?>
<!-- Top Utility Bar (Epione inspired) -->
<div class="bg-dark text-white py-1 px-3 d-none d-md-block" style="font-size: 0.75rem;">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <span class="me-3"><i class="align-middle me-1" data-lucide="phone" style="width: 12px; height: 12px;"></i> Emergency Support: <strong><?php echo escape(CLINIC_PHONE_1); ?></strong></span>
            <span><i class="align-middle me-1" data-lucide="clock" style="width: 12px; height: 12px;"></i> 24/7 Available on WhatsApp</span>
        </div>
        <div>
            <a href="<?php echo escape(CLINIC_WHATSAPP_LINK); ?>" class="text-white text-decoration-none me-3" target="_blank">
                <i class="align-middle me-1" data-lucide="message-circle" style="width: 12px; height: 12px;"></i> WhatsApp Consultation
            </a>
            <span class="text-secondary">|</span>
            <span class="ms-3"><i class="align-middle me-1" data-lucide="map-pin" style="width: 12px; height: 12px;"></i> Hyderabad, India</span>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top py-3" id="navbar">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo BASE_URL; ?>">
            <img src="<?php echo BASE_URL; ?>assets/images/LOGO.png" alt="Dr. Pavan Kumar Ediga Logo" class="d-inline-block align-text-top" style="height: 48px; width: auto; object-fit: contain;">
            <div class="lh-sm">
                <span class="fw-bold text-dark d-block fs-5 font-serif" style="letter-spacing: -0.5px;">Dr. Pavan Kumar Ediga</span>
                <span class="text-uppercase text-muted fw-semibold" style="font-size: 0.65rem; letter-spacing: 1px;">MCh Neurosurgery</span>
            </div>
        </a>

        <!-- Hamburger Toggler for Mobile -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-2">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>#about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>#services" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services <i data-lucide="chevron-down" class="d-inline-block align-middle ms-1" style="width: 14px; height: 14px;"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow rounded-3 py-2 animate fade-in" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>spine-surgery">Spine Surgery</a></li>
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>neuro-oncology">Neuro Oncology</a></li>
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>neuro-trauma">Neuro Trauma</a></li>
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>back-pain">Back Pain</a></li>
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>headache">Headache</a></li>
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>facial-nerve">Facial Nerve</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>#certificates">Credentials</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>#patient-videos" id="mediaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Media <i data-lucide="chevron-down" class="d-inline-block align-middle ms-1" style="width: 14px; height: 14px;"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow rounded-3 py-2 animate fade-in" aria-labelledby="mediaDropdown">
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>photos">Photos</a></li>
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>videos">Videos</a></li>
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo BASE_URL; ?>blogs">Blogs</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>#location">Clinics</a>
                </li>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a href="<?php echo BASE_URL; ?>#booking-form" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold text-white shadow-sm hover-up">
                        Book Appointment
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
