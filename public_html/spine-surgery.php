<?php
/**
 * Service Page - Spine Surgery
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Minimally Invasive Spine Surgery | Dr. Pavan Kumar Ediga";
$meta_description = "Advanced endoscopic and keyhole spine surgery for disc herniations, sciatica, and spinal stenosis in Hyderabad.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Spine Surgery</h2>
        <p class="text-muted mb-0 small">
            Minimally Invasive & Endoscopic Keyhole Spine Solutions
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="row align-items-center g-5">
            <!-- Left Side Details -->
            <div class="col-lg-7 order-2 order-lg-1">
                <span class="badge bg-primary-subtle text-primary fw-semibold mb-3">Specialty Care</span>
                <h3 class="fw-bold text-dark font-serif mb-4">Endoscopic & Keyhole Spine Surgery</h3>
                <p class="text-muted mb-4">
                    Minimally Invasive Spine Surgery (MISS) is a modern surgical approach designed to treat various spinal conditions using smaller incisions. This technique minimizes trauma to surrounding muscles and tissues, leading to faster recovery times, less postoperative pain, and reduced hospital stays compared to traditional open surgery.
                </p>
                <h5 class="fw-bold text-dark font-serif mb-3">Conditions Treated Under Spine Care:</h5>
                <ul class="list-unstyled mb-4" style="padding-left: 0;">
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Herniated and Slipped Discs</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Sciatica (Radiating Nerve Pain)</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Spinal Stenosis (Narrowing of Canal)</span>
                    </li>
                    <li class="mb-0 d-flex align-items-center gap-2">
                        <i data-lucide="check-circle" class="text-success" style="width: 16px; height: 16px;"></i>
                        <span class="small text-muted">Spondylolisthesis & Spinal Instability</span>
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
                    <img src="assets/images/services/SpineSurgery.jpg" alt="Spine Surgery Microscope Assisted Decompression" class="w-100 h-auto rounded-3">
                    <div class="p-3 text-center">
                        <h6 class="fw-bold mb-1 font-serif text-dark">Advanced Spinal Decompression</h6>
                        <p class="small text-muted mb-0">Microscopic & transforaminal keyhole setups.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
