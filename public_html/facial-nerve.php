<?php
/**
 * Service Page - Facial Nerve Preservation
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Facial Nerve Preservation & CP Angle Surgery | Dr. Pavan Kumar Ediga";
$meta_description = "Acoustic neuroma extractions and high-precision cerebellopontine (CP) angle tumor resections with cranial nerve preservation in Hyderabad.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Facial Nerve</h2>
        <p class="text-muted mb-0 small">
            Facial Nerve Preservation & Cerebellopontine Angle (CP) Tumors
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="row align-items-center g-5">
            <!-- Left Side Details -->
            <div class="col-lg-7 order-2 order-lg-1">
                <span class="badge bg-info-subtle text-info fw-semibold mb-3">Nerve Preservation</span>
                <h3 class="fw-bold text-dark font-serif mb-4">Facial Nerve Preservation & Skull Base Surgery</h3>
                <p class="text-muted mb-4">
                    Surgical interventions targeting the cerebellopontine (CP) angle, such as acoustic neuroma (vestibular schwannoma) or meningioma removals, present high surgical complexity due to their proximity to critical cranial nerves. Dr. Pavan Kumar Ediga specializes in micro-dissection techniques using advanced intraoperative facial nerve monitoring systems. This ensures the maximum possible tumor resection while strictly prioritizing the preservation of facial movements, hearing, and balance functions.
                </p>
                <h5 class="fw-bold text-dark font-serif mb-3">Clinical Care Priorities:</h5>
                <ul class="list-unstyled mb-4" style="padding-left: 0;">
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Intraoperative Facial Nerve Electromyography (EMG) Monitoring</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Microscopic Dissection of Acoustic Neuromas</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Facial Nerve Decompression for Bells Palsy / Hemifacial Spasm</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Post-Surgical Neuromuscular Facial Rehabilitation Protocols</span>
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
                    <img src="assets/images/services/FacialNerve.jpg" alt="Facial Nerve Surgical Fellowship Training" class="w-100 h-auto rounded-3">
                    <div class="p-3 text-center">
                        <h6 class="fw-bold mb-1 font-serif text-dark">International Training Setup</h6>
                        <p class="small text-muted mb-0">High-precision dissection practices under micro-guidance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
