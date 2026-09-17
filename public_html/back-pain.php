<?php
/**
 * Service Page - Back Pain & Sciatica
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Back Pain & Sciatica Treatment | Dr. Pavan Kumar Ediga";
$meta_description = "Comprehensive clinical evaluation and surgical/non-surgical blocks for chronic back pain, neck pain, and sciatica in Hyderabad.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Back Pain</h2>
        <p class="text-muted mb-0 small">
            Evaluation & Management of Sciatica & Chronic Back Pains
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="row align-items-center g-5">
            <!-- Left Side Details -->
            <div class="col-lg-7 order-2 order-lg-1">
                <span class="badge bg-success-subtle text-success fw-semibold mb-3">Pain Management</span>
                <h3 class="fw-bold text-dark font-serif mb-4">Back Pain & Sciatica Management</h3>
                <p class="text-muted mb-4">
                    Persistent back pain and radiating sciatica can severely restrict mobility and quality of life. Dr. Pavan Kumar Ediga conducts thorough diagnostic evaluations to identify root causes like disc degeneration or nerve compression. We offer multi-stage treatments, focusing heavily on conservative non-surgical methods like selective root blocks or epidural injections before outlining corrective surgical decompressive techniques.
                </p>
                <h5 class="fw-bold text-dark font-serif mb-3">Therapies & Treatments Offered:</h5>
                <ul class="list-unstyled mb-4" style="padding-left: 0;">
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Selective Nerve Root Block (SNRB) Injections</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Epidural Steroid Injections (ESI) under C-Arm Guidance</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Endoscopic Lumbar Discectomy for Sciatica</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Spine Rehab, Posture Correction & Conservative Management</span>
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
                    <img src="assets/images/services/BackPain.jpg" alt="Back Pain Spine Diagnostics Diagram" class="w-100 h-auto rounded-3">
                    <div class="p-3 text-center">
                        <h6 class="fw-bold mb-1 font-serif text-dark">Diagnostic Spine Analysis</h6>
                        <p class="small text-muted mb-0">Mapping spinal columns and neurological roots.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
