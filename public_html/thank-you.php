<?php
/**
 * Thank You Landing Page - Dr. Pavan Kumar Ediga Rebuild
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Thank You | Dr. Pavan Kumar Ediga";
$meta_description = "Thank you for booking a consultation. Our clinical coordinator will call you back shortly.";

// Include Header
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Thank You Message -->
<section class="section-padding flex-grow-1 bg-light d-flex align-items-center">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Success Checkmark Icon -->
                <div class="d-inline-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle mb-4 animate-heartbeat" style="width: 80px; height: 80px;">
                    <i data-lucide="check" style="width: 40px; height: 40px;"></i>
                </div>
                
                <h1 class="fw-bold font-serif mb-3" style="font-size: 2.5rem;">Request Submitted!</h1>
                <p class="lead text-muted mb-4 fw-medium">Thank you for scheduling a consultation with Dr. Pavan Kumar Ediga.</p>
                
                <div class="bg-white p-4 rounded-4 border shadow-sm text-start mb-5">
                    <h6 class="fw-bold text-dark mb-2">What happens next?</h6>
                    <ul class="small text-muted ps-3 mb-0">
                        <li class="mb-2">Our clinical coordinator will review your submitted details.</li>
                        <li class="mb-2">We will contact you via phone or WhatsApp to verify and block your time slot.</li>
                        <li>For urgent trauma support, please contact us directly on <strong><?php echo CLINIC_PHONE_1; ?></strong>.</li>
                    </ul>
                </div>

                <div class="d-flex justify-content-center gap-3">
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-primary rounded-pill px-4 py-2.5 fw-semibold text-white">
                        Return to Homepage
                    </a>
                    <a href="<?php echo escape(CLINIC_WHATSAPP_LINK); ?>" target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2.5 fw-semibold">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Ads Conversion Tracking (Triggered on successful load of Thank You page) -->
<?php renderAdsConversionScript(); ?>

<?php
// Include Footer
include 'includes/footer.php';
?>
