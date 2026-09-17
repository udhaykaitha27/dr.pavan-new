<?php
/**
 * Privacy Policy Page - Dr. Pavan Kumar Ediga Rebuild
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Privacy Policy | Dr. Pavan Kumar Ediga";
$meta_description = "Privacy policy governing data collection, form submissions, and analytical tracking on the website.";

// Include Header
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Privacy Policy</h2>
        <p class="text-muted mb-0 small">Last Updated: July 11, 2026</p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white p-4 p-md-5 rounded-4 border shadow-sm">
                    <p>At Dr. Pavan Kumar Ediga's Clinic, accessible from <?php echo escape(BASE_URL); ?>, one of our main priorities is the privacy of our patients. This Privacy Policy document contains types of information that is collected and recorded by this site and how we use it.</p>

                    <h4 class="fw-bold font-serif mt-5 text-dark">1. Consent</h4>
                    <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

                    <h4 class="fw-bold font-serif mt-4 text-dark">2. Information We Collect</h4>
                    <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
                    <p>If you contact us directly or request an appointment, we collect:
                        <ul class="text-muted small">
                            <li>Full Name</li>
                            <li>Phone Number</li>
                            <li>Email Address</li>
                            <li>Preferred date and time slots</li>
                            <li>Nature of symptoms or message</li>
                        </ul>
                    </p>

                    <h4 class="fw-bold font-serif mt-4 text-dark">3. Advertising & Analytics Tracking</h4>
                    <p>We use third-party analytics and tracking scripts, including Google Analytics 4, Meta Pixel, and Microsoft Clarity. These services utilize cookies to record anonymous traffic behaviors, landing URL parameters (UTM parameters), click sources (such as Google Ads GCLID or Meta FBCLID), and browser user agents. This data helps us improve user interface experiences and optimize patient outreach campaigns.</p>

                    <h4 class="fw-bold font-serif mt-4 text-dark">4. How We Use Your Information</h4>
                    <p>We use the collected details to:
                        <ul class="text-muted small">
                            <li>Review and schedule clinic consultations.</li>
                            <li>Validate rate-limiting rules to prevent submission spam.</li>
                            <li>Improve, personalize, and expand our website properties.</li>
                            <li>Respond to patient inquiries or emergency WhatsApp contacts.</li>
                        </ul>
                    </p>

                    <h4 class="fw-bold font-serif mt-4 text-dark">5. Contact Us</h4>
                    <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us at <strong><?php echo CLINIC_EMAIL; ?></strong>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include Footer
include 'includes/footer.php';
?>
