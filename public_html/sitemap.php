<?php
/**
 * Human Readable Sitemap Page - Dr. Pavan Kumar Ediga Rebuild
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Sitemap | Dr. Pavan Kumar Ediga";
$meta_description = "Sitemap of Dr. Pavan Kumar Ediga website. Access links to all sections, expertise, locations, and legal documents.";

// Include Header
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Sitemap</h2>
        <p class="text-muted mb-0 small">A visual index of all pages and sections on our website.</p>
    </div>
</section>

<!-- Visual Sitemap Links -->
<section class="section-padding bg-white">
    <div class="container" style="max-width: 800px;">
        <div class="bg-light p-4 p-md-5 rounded-4 border shadow-sm">
            <div class="row g-4">
                <!-- Main Pages Section -->
                <div class="col-md-6 mb-4">
                    <h5 class="fw-bold font-serif text-primary border-bottom pb-2 mb-3">Main Navigation</h5>
                    <ul class="list-unstyled mb-0" style="padding-left: 0;">
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>#home" class="text-dark text-decoration-none hover-link">&bull; Home</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>#about" class="text-dark text-decoration-none hover-link">&bull; About</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>#services" class="text-dark text-decoration-none hover-link">&bull; Expertise</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>#certificates" class="text-dark text-decoration-none hover-link">&bull; Credentials & Certificates</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>photos" class="text-dark text-decoration-none hover-link">&bull; Photo Gallery</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>videos" class="text-dark text-decoration-none hover-link">&bull; Clinical Videos</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>blogs" class="text-dark text-decoration-none hover-link">&bull; Insights & Blogs</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>#location" class="text-dark text-decoration-none hover-link">&bull; Clinic Locations</a></li>
                        <li class="mb-0"><a href="<?php echo BASE_URL; ?>#booking-form" class="text-dark text-decoration-none hover-link">&bull; Book Consultation</a></li>
                    </ul>
                </div>

                 <!-- Treatments / Specialty Areas -->
                <div class="col-md-6 mb-4">
                    <h5 class="fw-bold font-serif text-primary border-bottom pb-2 mb-3">Clinical Specialties</h5>
                    <ul class="list-unstyled mb-0" style="padding-left: 0;">
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>spine-surgery" class="text-dark text-decoration-none hover-link">&bull; Minimally Invasive Spine Surgery</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>neuro-oncology" class="text-dark text-decoration-none hover-link">&bull; Neuro Oncology (Brain & Spinal Tumors)</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>neuro-trauma" class="text-dark text-decoration-none hover-link">&bull; Neuro Trauma Emergency Care</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>back-pain" class="text-dark text-decoration-none hover-link">&bull; Chronic Back Pain & Sciatica Decompression</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>headache" class="text-dark text-decoration-none hover-link">&bull; Migraine & Chronic Headache Management</a></li>
                        <li class="mb-0"><a href="<?php echo BASE_URL; ?>facial-nerve" class="text-dark text-decoration-none hover-link">&bull; CP Angle Tumor Facial Nerve Preservation</a></li>
                    </ul>
                </div>

                <!-- Policies and Legals -->
                <div class="col-md-6">
                    <h5 class="fw-bold font-serif text-primary border-bottom pb-2 mb-3">Legals & Info</h5>
                    <ul class="list-unstyled mb-0" style="padding-left: 0;">
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>privacy-policy" class="text-dark text-decoration-none hover-link">&bull; Privacy Policy</a></li>
                        <li class="mb-2"><a href="<?php echo BASE_URL; ?>terms" class="text-dark text-decoration-none hover-link">&bull; Terms of Service</a></li>
                        <li class="mb-0"><a href="<?php echo BASE_URL; ?>sitemap.xml" target="_blank" class="text-dark text-decoration-none hover-link">&bull; XML Search Engine Sitemap</a></li>
                    </ul>
                </div>
                
                <!-- Quick Contacts -->
                <div class="col-md-6">
                    <h5 class="fw-bold font-serif text-primary border-bottom pb-2 mb-3">Direct Support</h5>
                    <ul class="list-unstyled mb-0 small text-muted" style="padding-left: 0;">
                        <li class="mb-2">&bull; Helpline: <?php echo CLINIC_PHONE_1; ?></li>
                        <li class="mb-2">&bull; Email: <?php echo CLINIC_EMAIL; ?></li>
                        <li class="mb-0">&bull; WhatsApp: 24/7 Support Available</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include Footer
include 'includes/footer.php';
?>
