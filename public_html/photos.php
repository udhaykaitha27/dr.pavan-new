<?php
/**
 * Photos Page - Dr. Pavan Kumar Ediga Rebuild
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Photos | Dr. Pavan Kumar Ediga - Consultant Neurosurgeon";
$meta_description = "Clinical photos, international training milestones, certifications, and surgical gallery of Dr. Pavan Kumar Ediga.";

include 'includes/header.php';
include 'includes/navbar.php';

// Define the gallery images list
$gallery_images = [
    [
        'src' => 'assets/images/pavan-kumar.jpg',
        'title' => 'Dr. Pavan Kumar Ediga',
        'category' => 'Clinical'
    ],
    [
        'src' => 'assets/images/mentors.jpg',
        'title' => 'International Mentors - South Korea',
        'category' => 'Training'
    ],
    [
        'src' => 'assets/images/donpark.jpg',
        'title' => 'Fellowship Training under Dr. Don Park',
        'category' => 'Training'
    ],
    [
        'src' => 'assets/images/certificate1.png',
        'title' => 'Minimally Invasive Spine Surgery Certificate',
        'category' => 'Credentials'
    ],
    [
        'src' => 'assets/images/certificate2.jpg',
        'title' => 'Fellowship in Spine Surgery Diploma',
        'category' => 'Credentials'
    ],
    [
        'src' => 'assets/images/WhatsApp Image 2026-02-06 at 10.22.36 PM.jpg',
        'title' => 'Medicover Hospital Clinic Consultation Room',
        'category' => 'Clinics'
    ],
    [
        'src' => 'assets/images/WhatsApp Image 2026-02-06 at 10.22.37 PM.jpg',
        'title' => 'Outpatient Desk & Surgical Registration Clinic',
        'category' => 'Clinics'
    ],
    [
        'src' => 'assets/images/WhatsApp Image 2026-02-06 at 10.22.37 PM (1).jpg',
        'title' => 'Clinical Team at Medicover Hospitals',
        'category' => 'Clinics'
    ],
    [
        'src' => 'assets/images/17.jpg',
        'title' => 'Minimally Invasive Endoscopic Keyhole Access',
        'category' => 'Surgical Case'
    ],
    [
        'src' => 'assets/images/18.jpg',
        'title' => 'Brain Tumor (Neuro Oncology) Resection Setup',
        'category' => 'Surgical Case'
    ],
    [
        'src' => 'assets/images/19.jpg',
        'title' => 'Microscope-assisted Spinal Cord Decompression',
        'category' => 'Surgical Case'
    ],
    [
        'src' => 'assets/images/20.jpg',
        'title' => 'Emergency Neuro Trauma Response Suite',
        'category' => 'Surgical Case'
    ]
];
?>

<!-- Page Header Sub-Banner -->
<section class="py-3 bg-light border-bottom" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container text-center py-2">
        <h2 class="fw-bold text-dark font-serif mb-1">Photo Gallery</h2>
        <p class="text-muted mb-0 small">
            Explore photos of international training milestones, surgical setups, and our clinics.
        </p>
    </div>
</section>

<!-- Gallery Filter & Grid Section -->
<section class="py-5 bg-white">
    <div class="container py-2">
        <!-- Filter Tabs -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-5">
            <button class="btn btn-outline-primary rounded-pill px-4 active filter-btn" data-filter="all">All Photos</button>
            <button class="btn btn-outline-primary rounded-pill px-4 filter-btn" data-filter="Clinical">Clinical</button>
            <button class="btn btn-outline-primary rounded-pill px-4 filter-btn" data-filter="Training">Training</button>
            <button class="btn btn-outline-primary rounded-pill px-4 filter-btn" data-filter="Credentials">Credentials</button>
            <button class="btn btn-outline-primary rounded-pill px-4 filter-btn" data-filter="Clinics">Clinics</button>
            <button class="btn btn-outline-primary rounded-pill px-4 filter-btn" data-filter="Surgical Case">Surgical Cases</button>
        </div>

        <!-- Photos Grid -->
        <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4" id="galleryGrid">
            <?php foreach ($gallery_images as $index => $img): ?>
                <div class="col gallery-col-item" data-category="<?php echo htmlspecialchars($img['category']); ?>">
                    <div class="gallery-item-card border rounded-4 overflow-hidden shadow-sm h-100 position-relative bg-light" style="cursor: pointer;" onclick="openLightbox(<?php echo $index; ?>)">
                        <div class="ratio ratio-4x3 overflow-hidden">
                            <img src="<?php echo htmlspecialchars($img['src']); ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.4s ease;">
                        </div>
                        <div class="p-3 bg-white border-top">
                            <span class="badge bg-secondary-subtle text-secondary fw-semibold mb-2" style="font-size: 0.75rem;"><?php echo htmlspecialchars($img['category']); ?></span>
                            <h6 class="fw-bold text-dark font-serif mb-0 text-truncate"><?php echo htmlspecialchars($img['title']); ?></h6>
                        </div>
                    </div>
                </div>
            <?php foreach_end: // closing bracket below ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Custom Premium Lightbox Modal -->
<div id="lightboxOverlay" class="lightbox-overlay" style="display: none;">
    <!-- Close Button -->
    <button class="lightbox-close-btn" onclick="closeLightbox()">&times;</button>
    
    <!-- Previous Button -->
    <button class="lightbox-nav-btn prev" onclick="prevImage()">&#10094;</button>
    
    <!-- Next Button -->
    <button class="lightbox-nav-btn next" onclick="nextImage()">&#10095;</button>
    
    <!-- Lightbox Main Image & Details -->
    <div class="lightbox-content-container">
        <div class="lightbox-image-wrap">
            <img id="lightboxImage" src="" alt="Lightbox View">
        </div>
        <div class="lightbox-caption bg-dark bg-opacity-75 text-white p-3 rounded-4 mt-3 text-center">
            <span id="lightboxCategory" class="badge bg-primary mb-2">Category</span>
            <h5 id="lightboxTitle" class="fw-bold font-serif mb-1">Title of Image</h5>
            <div id="lightboxCounter" class="small text-white-50 mt-1">1 of 12</div>
        </div>
    </div>
</div>

<!-- Lightbox Styles -->
<style>
.gallery-item-card:hover img {
    transform: scale(1.06);
}

/* Lightbox Overlay */
.lightbox-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(15, 23, 42, 0.95);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    user-select: none;
}

/* Content Area */
.lightbox-content-container {
    max-width: 85%;
    max-height: 85%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.lightbox-image-wrap {
    max-height: 70vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.lightbox-image-wrap img {
    max-width: 100%;
    max-height: 70vh;
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    object-fit: contain;
    animation: zoomIn 0.3s ease;
}

/* Buttons */
.lightbox-close-btn {
    position: absolute;
    top: 20px;
    right: 30px;
    background: none;
    border: none;
    color: #ffffff;
    font-size: 40px;
    cursor: pointer;
    z-index: 10000;
    transition: color 0.2s;
}

.lightbox-close-btn:hover {
    color: #ef4444;
}

.lightbox-nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.1);
    border: none;
    color: #ffffff;
    font-size: 32px;
    padding: 15px 22px;
    cursor: pointer;
    border-radius: 50%;
    z-index: 10000;
    transition: background-color 0.2s, transform 0.2s;
}

.lightbox-nav-btn:hover {
    background: rgba(255, 255, 255, 0.25);
}

.lightbox-nav-btn.prev {
    left: 30px;
}

.lightbox-nav-btn.next {
    right: 30px;
}

@media (max-width: 768px) {
    .lightbox-nav-btn {
        padding: 10px 16px;
        font-size: 24px;
    }
    .lightbox-nav-btn.prev { left: 10px; }
    .lightbox-nav-btn.next { right: 10px; }
}

@keyframes zoomIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}
</style>

<!-- Lightbox Script -->
<script>
// Load images list in JS
const images = <?php echo json_encode($gallery_images); ?>;
let currentIndex = 0;

function openLightbox(index) {
    currentIndex = index;
    updateLightbox();
    document.getElementById('lightboxOverlay').style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Stop scrolling background
}

function closeLightbox() {
    document.getElementById('lightboxOverlay').style.display = 'none';
    document.body.style.overflow = ''; // Restore scroll
}

function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    updateLightbox();
}

function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateLightbox();
}

function updateLightbox() {
    const imgData = images[currentIndex];
    document.getElementById('lightboxImage').src = imgData.src;
    document.getElementById('lightboxImage').alt = imgData.title;
    document.getElementById('lightboxTitle').textContent = imgData.title;
    document.getElementById('lightboxCategory').textContent = imgData.category;
    document.getElementById('lightboxCounter').textContent = `${currentIndex + 1} of ${images.length}`;
}

// Close lightbox on click outside the image
document.getElementById('lightboxOverlay').addEventListener('click', function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});

// Keyboard controls
document.addEventListener('keydown', function(e) {
    const overlay = document.getElementById('lightboxOverlay');
    if (overlay.style.display === 'flex') {
        if (e.key === 'ArrowRight') {
            nextImage();
        } else if (e.key === 'ArrowLeft') {
            prevImage();
        } else if (e.key === 'Escape') {
            closeLightbox();
        }
    }
});

// Category filtering script
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        // Toggle active button
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        
        const filterValue = this.getAttribute('data-filter');
        document.querySelectorAll('.gallery-col-item').forEach(item => {
            const cat = item.getAttribute('data-category');
            if (filterValue === 'all' || cat === filterValue) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
