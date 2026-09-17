<?php
/**
 * Service Page - Neuro Trauma
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Emergency Neuro Trauma Care | Dr. Pavan Kumar Ediga";
$meta_description = "24/7 emergency neurosurgical interventions, traumatic brain injury care, craniotomies, and spinal cord stabilizations in Hyderabad.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Neuro Trauma</h2>
        <p class="text-muted mb-0 small">
            24/7 Critical Emergency Neurosurgery & Head Injury Support
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="row align-items-center g-5">
            <!-- Left Side Details -->
            <div class="col-lg-7 order-2 order-lg-1">
                <span class="badge bg-danger-subtle text-danger fw-semibold mb-3">Emergency Care</span>
                <h3 class="fw-bold text-dark font-serif mb-4">Critical Neuro-Trauma Services</h3>
                <p class="text-muted mb-4">
                    Neuro-trauma emergencies require instant, highly coordinated clinical responses. Dr. Pavan provides immediate surgical intervention for acute head injuries, traumatic brain injuries (TBI), skull fractures, and spinal fractures. Timely craniotomies to relieve intracranial pressure can mean the difference between lasting damage and full rehabilitation.
                </p>
                <h5 class="fw-bold text-dark font-serif mb-3">Trauma Interventions Provided:</h5>
                <ul class="list-unstyled mb-4" style="padding-left: 0;">
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Emergency Craniotomy (Subdural / Epidural Hematoma Extraction)</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Decompressive Craniectomy for Severe Brain Swelling</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Skull Fracture Reconstruction & Elevation</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Acute Spinal Cord Decompression & Stabilization</span>
                    </li>
                </ul>
                <div class="d-flex gap-3">
                    <a href="<?php echo BASE_URL; ?>#booking-form" class="btn btn-primary rounded-pill px-4 py-2.5 fw-semibold text-white">
                        Book Appointment
                    </a>
                </div>
            </div>
            
            <!-- Right Side Image Card -->
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="border rounded-4 overflow-hidden shadow-sm bg-light p-2">
                    <img src="assets/images/services/NeuroTrauma.jpg" alt="Emergency Neuro Trauma Response Suite" class="w-100 h-auto rounded-3">
                    <div class="p-3 text-center">
                        <h6 class="fw-bold mb-1 font-serif text-dark">Trauma Surgery Suite</h6>
                        <p class="small text-muted mb-0">Prepared 24/7 for urgent surgical decompression.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
