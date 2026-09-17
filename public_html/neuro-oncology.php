<?php
/**
 * Service Page - Neuro Oncology
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Neuro Oncology & Brain Tumor Surgery | Dr. Pavan Kumar Ediga";
$meta_description = "Specialized surgical removal of benign and malignant brain tumors, gliomas, meningiomas, and pituitary adenomas in Hyderabad.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Neuro Oncology</h2>
        <p class="text-muted mb-0 small">
            Advanced Surgical Care for Brain & Spinal Cord Tumors
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="row align-items-center g-5">
            <!-- Left Side Details -->
            <div class="col-lg-7 order-2 order-lg-1">
                <span class="badge bg-primary-subtle text-primary fw-semibold mb-3">Oncology Care</span>
                <h3 class="fw-bold text-dark font-serif mb-4">Precision Brain & Spinal Tumor Surgery</h3>
                <p class="text-muted mb-4">
                    Neuro-oncology focus involves the comprehensive diagnosis and surgical resection of tumors of the brain and spinal cord. We employ high-precision micro-neurosurgical techniques, intraoperative navigation systems, and nerve monitoring equipment to maximize tumor removal while protecting critical surrounding brain and spinal structures.
                </p>
                <h5 class="fw-bold text-dark font-serif mb-3">Specialized Resection Procedures:</h5>
                <ul class="list-unstyled mb-4" style="padding-left: 0;">
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Gliomas & Astrocytomas (Malignant Brain Tumors)</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Meningiomas (Dural-based Benign Tumors)</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Pituitary Adenomas (Endonasal Transsphenoidal Resection)</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Acoustic Neuromas & Cerebellopontine Angle Lesions</span>
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
                    <img src="assets/images/services/NeuroOncology.jpg" alt="Neuro Oncology Brain Tumor Resection Setup" class="w-100 h-auto rounded-3">
                    <div class="p-3 text-center">
                        <h6 class="fw-bold mb-1 font-serif text-dark">Micro-Neurosurgical Suite</h6>
                        <p class="small text-muted mb-0">High-magnification surgical tumor extraction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
