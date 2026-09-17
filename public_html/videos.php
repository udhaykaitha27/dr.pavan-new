<?php
/**
 * Videos Page - Dr. Pavan Kumar Ediga Rebuild
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Videos | Dr. Pavan Kumar Ediga - Consultant Neurosurgeon";
$meta_description = "Clinical insights, spine surgeries, brain health advice, and patient testimonials from Dr. Pavan Kumar Ediga in Hyderabad.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Video Library</h2>
        <p class="text-muted mb-0 small">
            Watch procedural details, diagnostics, and patient success stories directly from Dr. Pavan.
        </p>
    </div>
</section>

<!-- Content Area -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="row g-4">
            <!-- Main Video Player -->
            <div class="col-lg-8">
                <div class="video-player-container bg-black ratio ratio-16x9 rounded-4 overflow-hidden shadow">
                    <iframe id="mainYoutubePlayer" src="https://www.youtube.com/embed/c9nBqZbZcB0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="p-4 bg-light border border-top-0 rounded-bottom-4 shadow-sm d-flex gap-3 mt-3">
                    <div class="card-icon mb-0 flex-shrink-0"><i data-lucide="play-circle" class="text-primary"></i></div>
                    <div>
                        <h4 id="videoTitle" class="fw-bold mb-1 font-serif text-dark">Patient Success Story</h4>
                        <p id="videoDesc" class="text-muted small mb-0">Detailed walkthrough of a successful neurosurgical intervention and patient recovery.</p>
                    </div>
                </div>
            </div>

            <!-- Video Playlist Sidebar -->
            <div class="col-lg-4">
                <div class="playlist-sidebar p-3 border rounded-4 bg-light shadow-sm">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 small" style="letter-spacing: 1px;">Clinical Playlist</h6>
                    
                    <div class="d-flex flex-column gap-2">
                        <button class="playlist-btn active" id="btn-c9nBqZbZcB0" onclick="changeVideo('c9nBqZbZcB0', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.')">
                            <div class="playlist-thumb">
                                <img src="https://img.youtube.com/vi/c9nBqZbZcB0/mqdefault.jpg" alt="Video Thumbnail">
                                <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                            </div>
                            <div class="overflow-hidden text-start">
                                <h6 class="fw-bold text-dark small mb-1 text-truncate">Patient Success Story</h6>
                                <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Testimonial</span>
                            </div>
                        </button>
                        
                        <button class="playlist-btn" id="btn-KG8zTpbvna4" onclick="changeVideo('KG8zTpbvna4', 'Neurological Health Insights', 'Dr. Pavan Kumar provides educational insights into brain health and neurological conditions.')">
                            <div class="playlist-thumb">
                                <img src="https://img.youtube.com/vi/KG8zTpbvna4/mqdefault.jpg" alt="Video Thumbnail">
                                <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                            </div>
                            <div class="overflow-hidden text-start">
                                <h6 class="fw-bold text-dark small mb-1 text-truncate">Neurological Care Overview</h6>
                                <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Education</span>
                            </div>
                        </button>

                        <button class="playlist-btn" id="btn-HqXLdkCNq20" onclick="changeVideo('HqXLdkCNq20', 'Endoscopic Spine Techniques', 'Understanding the benefits and procedure of minimally invasive keyhole spine surgery.')">
                            <div class="playlist-thumb">
                                <img src="https://img.youtube.com/vi/HqXLdkCNq20/mqdefault.jpg" alt="Video Thumbnail">
                                <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                            </div>
                            <div class="overflow-hidden text-start">
                                <h6 class="fw-bold text-dark small mb-1 text-truncate">Spine Surgery Insights</h6>
                                <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Procedure</span>
                            </div>
                        </button>

                        <button class="playlist-btn" id="btn-ShH2xESwcoI" onclick="changeVideo('ShH2xESwcoI', 'Complex Tumor Management', 'Case review of neuro-oncology and surgical removal of brain lesions.')">
                            <div class="playlist-thumb">
                                <img src="https://img.youtube.com/vi/ShH2xESwcoI/mqdefault.jpg" alt="Video Thumbnail">
                                <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                            </div>
                            <div class="overflow-hidden text-start">
                                <h6 class="fw-bold text-dark small mb-1 text-truncate">Tumor Resection Case</h6>
                                <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Case Study</span>
                            </div>
                        </button>

                        <button class="playlist-btn" id="btn-YjI1RfRjbyw" onclick="changeVideo('YjI1RfRjbyw', 'Trauma & Emergency Response', 'Rapid intervention protocols for traumatic head and spine injuries.')">
                            <div class="playlist-thumb">
                                <img src="https://img.youtube.com/vi/YjI1RfRjbyw/mqdefault.jpg" alt="Video Thumbnail">
                                <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                            </div>
                            <div class="overflow-hidden text-start">
                                <h6 class="fw-bold text-dark small mb-1 text-truncate">Emergency Intervention</h6>
                                <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Neuro Trauma</span>
                            </div>
                        </button>

                        <button class="playlist-btn" id="btn-Z5u4UNP7X5c" onclick="changeVideo('Z5u4UNP7X5c', 'Rehabilitation & Post-Op Care', 'The importance of follow-up care and rehabilitation in neurosurgical recovery.')">
                            <div class="playlist-thumb">
                                <img src="https://img.youtube.com/vi/Z5u4UNP7X5c/mqdefault.jpg" alt="Video Thumbnail">
                                <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                            </div>
                            <div class="overflow-hidden text-start">
                                <h6 class="fw-bold text-dark small mb-1 text-truncate">Recovery Journey</h6>
                                <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Rehab</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
