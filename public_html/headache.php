<?php
/**
 * Service Page - Headache Management
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Headache & Migraine Management | Dr. Pavan Kumar Ediga";
$meta_description = "Specialized clinical diagnosis and therapy plans for chronic migraines, cluster headaches, and trigeminal neuralgias in Hyderabad.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Headache</h2>
        <p class="text-muted mb-0 small">
            Clinical Diagnosis & Relief for Chronic Cranial & Migraine Pains
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="row align-items-center g-5">
            <!-- Left Side Details -->
            <div class="col-lg-7 order-2 order-lg-1">
                <span class="badge bg-warning-subtle text-warning fw-semibold mb-3">Neurological Relief</span>
                <h3 class="fw-bold text-dark font-serif mb-4">Headache & Migraine Management</h3>
                <p class="text-muted mb-4">
                    Severe, chronic headaches and migraines can be debilitating. Dr. Pavan Kumar Ediga offers dedicated neurological consultations to distinguish primary headache syndromes from secondary pathological causes (such as vascular malformations or cranial tumors). We design targeted treatment plans combining lifestyle modifications, medical prophylaxis, and specialized nerve blocks for patients with chronic intractable pain.
                </p>
                <h5 class="fw-bold text-dark font-serif mb-3">Treatment Strategies Available:</h5>
                <ul class="list-unstyled mb-4" style="padding-left: 0;">
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Occipital Nerve Blocks for Migraines</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Trigeminal Nerve Block for Severe Facial Neuralgia</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Botox Injections for Chronic Migraine Prophylaxis</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Rule-Out Secondary Pathologies (High-Resolution MRI/CT Review)</span>
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
                    <img src="assets/images/services/Headache.jpg" alt="Headache Diagnostics Consultation Clinic Room" class="w-100 h-auto rounded-3">
                    <div class="p-3 text-center">
                        <h6 class="fw-bold mb-1 font-serif text-dark">Consultation & Assessment</h6>
                        <p class="small text-muted mb-0">Thorough outpatient diagnostics and MRI reviews.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
