<?php
/**
 * Blogs Page - Dr. Pavan Kumar Ediga Rebuild
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Blogs | Dr. Pavan Kumar Ediga - Consultant Neurosurgeon";
$meta_description = "Neurosurgical articles, spine health tips, and clinic updates from Dr. Pavan Kumar Ediga in Hyderabad.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Blogs & Insights</h2>
        <p class="text-muted mb-0 small">
            Neurosurgical updates, spine health tips, and educational articles.
        </p>
    </div>
</section>

<!-- Content Area -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="p-5 border rounded-4 shadow-sm bg-light">
                    <div class="text-primary mb-4">
                        <i data-lucide="book-open" style="width: 64px; height: 64px; stroke-width: 1.5;"></i>
                    </div>
                    <h3 class="fw-bold font-serif text-dark mb-3">No Blogs Available Yet</h3>
                    <p class="text-muted mb-4">
                        Dr. Pavan Kumar Ediga will be sharing neurosurgical guides, spine health guidelines, and clinical case insights soon. Stay tuned!
                    </p>
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-primary rounded-pill px-4 py-2.5 fw-semibold text-white">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
