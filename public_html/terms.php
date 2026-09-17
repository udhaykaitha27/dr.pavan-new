<?php
/**
 * Terms of Service Page - Dr. Pavan Kumar Ediga Rebuild
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Terms of Service | Dr. Pavan Kumar Ediga";
$meta_description = "Terms and conditions of website use and online clinical consultation booking guidelines.";

// Include Header
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Terms of Service</h2>
        <p class="text-muted mb-0 small">Last Updated: July 11, 2026</p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white p-4 p-md-5 rounded-4 border shadow-sm">
                    <p>Welcome to the official website of Dr. Pavan Kumar Ediga. These Terms of Service outline the rules and regulations for the use of this website.</p>

                    <h4 class="fw-bold font-serif mt-5 text-dark">1. Clinical Information Disclaimer</h4>
                    <p class="small text-muted">All contents on this website (including videos, medical FAQ answers, surgical case gallery reviews, and statistics) are published exclusively for educational references and credential verification. It does NOT constitute formal medical advice, diagnosis, or treatment plans. You should always consult with a qualified specialist in person regarding any health condition.</p>

                    <h4 class="fw-bold font-serif mt-4 text-dark">2. Consultation Request Policy</h4>
                    <p>Submitting an appointment or callback request form through this site does NOT establish an active doctor-patient relationship or guarantee an immediate slot. All bookings are subject to manual confirmation by our clinical coordinators depending on available hospital timings.</p>

                    <h4 class="fw-bold font-serif mt-4 text-dark">3. Emergency Care Warning</h4>
                    <p class="text-danger fw-semibold">If you or a family member are experiencing a life-threatening medical emergency (such as severe head trauma, acute loss of consciousness, or signs of an active stroke), do NOT wait for an online form callback. Please proceed immediately to the nearest hospital emergency room or contact regional emergency assistance services.</p>

                    <h4 class="fw-bold font-serif mt-4 text-dark">4. Limitations of Liability</h4>
                    <p>Under no circumstance shall Dr. Pavan Kumar Ediga, his clinic staff, or hospital affiliates be liable for any direct or indirect consequences arising from the use of, or inability to use, information contained on this website.</p>

                    <h4 class="fw-bold font-serif mt-4 text-dark">5. Governing Law</h4>
                    <p>These terms and conditions are governed by and construed in accordance with the laws of Telangana, India, and you submit to the exclusive jurisdiction of the courts located in Hyderabad for the resolution of any disputes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include Footer
include 'includes/footer.php';
?>
