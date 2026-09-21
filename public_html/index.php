<?php
/**
 * Homepage - Dr. Pavan Kumar Ediga Rebuild
 */
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "Dr. Pavan Kumar Ediga | Consultant Neurosurgeon in Hyderabad";
$meta_description = "Dr. Pavan Kumar Ediga is a top Neurosurgeon in Hyderabad. Specialist in Minimally Invasive (Endoscopic) Spine Surgery, Neuro Oncology (Brain Tumors), and Neuro Trauma. Check clinic timings, phone, and book an appointment.";

// Include Header
include 'includes/header.php';
include 'includes/navbar.php';

// Generate CSRF token for forms
$csrf_token = generateCSRFToken();
?>

<!-- Structured Schema.org Data (SEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "@id": "<?php echo BASE_URL; ?>#clinic",
      "name": "Dr. Pavan Kumar Ediga - Brain & Spine Clinic",
      "url": "<?php echo BASE_URL; ?>",
      "logo": "<?php echo BASE_URL; ?>assets/images/LOGO.png",
      "image": "<?php echo BASE_URL; ?>assets/images/pavan-kumar.jpg",
      "description": "Premium neurosurgical care clinic in Hyderabad. Under the guidance of Consultant Neurosurgeon Dr. Pavan Kumar Ediga.",
      "telephone": "<?php echo CLINIC_PHONE_1; ?>",
      "email": "<?php echo CLINIC_EMAIL; ?>",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Neknampur Road, Alkapoor Twp Main Rd, Manikonda",
        "addressLocality": "Hyderabad",
        "addressRegion": "Telangana",
        "postalCode": "500089",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "17.387192",
        "longitude": "78.375628"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "17:30",
          "closes": "21:30"
        }
      ]
    },
    {
      "@type": "Physician",
      "@id": "<?php echo BASE_URL; ?>#doctor",
      "name": "Dr. Pavan Kumar Ediga",
      "image": "<?php echo BASE_URL; ?>assets/images/pavan-kumar.jpg",
      "medicalSpecialty": "Neurosurgery",
      "description": "Distinguished Consultant Neurosurgeon specializing in Endoscopic Spine Surgery, Neuro Oncology, and Neuro Trauma in Hyderabad.",
      "telephone": "<?php echo CLINIC_PHONE_1; ?>",
      "knowsAbout": ["Minimally Invasive Spine Surgery", "Brain Tumor Resection", "Traumatic Brain Injuries", "Back Pain Treatment"],
      "hospitalAffiliation": {
        "@type": "Hospital",
        "name": "Medicover Hospitals Financial District",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "322, Myscape Rd, Financial District, Nanakramguda",
          "addressLocality": "Hyderabad",
          "addressRegion": "Telangana",
          "postalCode": "500032",
          "addressCountry": "IN"
        }
      }
    }
  ]
}
</script>

<!-- Hero Carousel Section -->
<section id="home" class="hero-carousel-section">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
        <!-- Indicators/Dots -->
        <div class="carousel-indicators" style="bottom: 20px; z-index: 10;">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 12px; height: 12px; border-radius: 50%; margin: 0 6px;"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2" style="width: 12px; height: 12px; border-radius: 50%; margin: 0 6px;"></button>
        </div>
        
        <div class="carousel-inner">
            <!-- Slide 1 (Dark Theme Background) -->
            <div class="carousel-item active" style="background-image: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.85) 45%, rgba(15, 23, 42, 1) 70%), url('assets/images/ebanner.jpeg'); background-size: cover; background-position: center; padding: 3.5rem 0 2rem 0;">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-7 text-center text-lg-start order-2 order-lg-1">
                            <div class="d-inline-flex align-items-center bg-white bg-opacity-10 border border-white border-opacity-25 rounded-pill px-3 py-1 mb-4 shadow-sm">
                                <span class="bg-success rounded-circle me-2 d-inline-block" style="width: 8px; height: 8px;"></span>
                                <span class="small fw-semibold text-white">Accepting New Patients</span>
                            </div>
                            <h1 class="display-4 fw-bold text-white mb-4 font-serif">
                                Advanced Neurosurgical Care in <span class="text-success">Hyderabad</span>
                            </h1>
                            <p class="lead text-white-50 mb-5 fw-medium" style="font-size: 1.1rem; max-width: 600px;">
                                Dr. Pavan Kumar Ediga is a distinguished Consultant Neurosurgeon specializing in Minimally Invasive (Endoscopic) Spine Surgery, Neuro Oncology (Brain Tumors), and Emergency Neuro Trauma care.
                            </p>
                            <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3">
                                <a href="#booking-form" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-semibold text-white shadow-lg border-0 animate-heartbeat">
                                    Book Consultation
                                </a>
                                <a href="#location" class="btn btn-outline-light btn-lg rounded-pill px-4 py-3 fw-semibold">
                                    View Clinic Location
                                </a>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-4 mt-5 text-white-50 small fw-medium">
                                <div class="d-flex align-items-center gap-2">
                                    <i data-lucide="check-circle" class="text-success" style="width: 18px; height: 18px;"></i>
                                    <span>7+ Years Experience</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i data-lucide="award" class="text-success" style="width: 18px; height: 18px;"></i>
                                    <span>Fellowship Trained (Seoul)</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i data-lucide="star" class="text-warning fill-warning" style="width: 18px; height: 18px;"></i>
                                    <span>4.9/5 Patient Rating</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2">
                            <div class="hero-image-container mx-auto" style="max-width: 400px; border: 4px solid rgba(255, 255, 255, 0.2);">
                                <img src="assets/images/pavan-kumar.jpg" alt="Dr. Pavan Kumar Ediga - Consultant Neurosurgeon" class="w-100 h-auto">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white" style="background: linear-gradient(to top, rgba(15, 23, 42, 0.8), transparent);">
                                    <h5 class="mb-0 font-serif text-white">Dr. Pavan Kumar Ediga</h5>
                                    <p class="small text-white-50 mb-0">MBBS, MS, MCh (Neurosurgery)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 (Light Theme Background) -->
            <div class="carousel-item" style="background-image: linear-gradient(to right, rgba(248, 250, 252, 0.98) 0%, rgba(248, 250, 252, 0.85) 40%, rgba(248, 250, 252, 1) 65%), url('assets/images/slider-21.jpg'); background-size: cover; background-position: center; padding: 3.5rem 0 2rem 0;">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-7 text-center text-lg-start order-2 order-lg-1">
                            <div class="d-inline-flex align-items-center bg-white border border-info border-opacity-25 rounded-pill px-3 py-1 mb-4 shadow-sm">
                                <span class="bg-success rounded-circle me-2 d-inline-block" style="width: 8px; height: 8px;"></span>
                                <span class="small fw-semibold text-primary">Global Surgical Expertise</span>
                            </div>
                            <h1 class="display-4 fw-bold text-dark mb-4 font-serif">
                                Fellowship Trained in <span class="text-primary">South Korea</span>
                            </h1>
                            <p class="lead text-muted mb-5 fw-medium" style="font-size: 1.1rem; max-width: 600px;">
                                Trained under world-renowned neurospine experts Dr. Don Park and Dr. Heung Sung Kim. Specialized in endoscopic keyhole techniques to ensure rapid, painless patient recovery.
                            </p>
                            <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3">
                                <a href="#booking-form" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-semibold text-white shadow-lg border-0 animate-heartbeat">
                                    Book Consultation
                                </a>
                                <a href="#location" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-semibold">
                                    View Clinic Location
                                </a>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-4 mt-5 text-muted small fw-medium">
                                <div class="d-flex align-items-center gap-2">
                                    <i data-lucide="check-circle" class="text-success" style="width: 18px; height: 18px;"></i>
                                    <span>Advanced Minimally Invasive Spine</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i data-lucide="award" class="text-success" style="width: 18px; height: 18px;"></i>
                                    <span>TNSCON Award Winner</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2">
                            <div class="hero-image-container mx-auto" style="max-width: 400px; border: 4px solid #ffffff;">
                                <img src="assets/images/mentors.jpg" alt="Dr. Pavan Kumar Ediga with Mentors" class="w-100 h-auto">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white" style="background: linear-gradient(to top, rgba(15, 23, 42, 0.8), transparent);">
                                    <h5 class="mb-0 font-serif text-white">International Mentorship</h5>
                                    <p class="small text-white-50 mb-0">Harrison Spinaratus Hospital, South Korea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" style="width: 5%; z-index: 11;">
            <span class="carousel-control-prev-icon bg-dark p-3 rounded-circle" aria-hidden="true" style="background-size: 50%;"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" style="width: 5%; z-index: 11;">
            <span class="carousel-control-next-icon bg-dark p-3 rounded-circle" aria-hidden="true" style="background-size: 50%;"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Statistics Section (Epione layout) -->
<section id="stats-section" class="bg-white border-bottom border-light">
    <div class="container py-5">
        <div class="row g-4 text-center">
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="text-primary mb-3"><i data-lucide="user-check" style="width: 32px; height: 32px;"></i></div>
                    <h3 class="fw-bold mb-1 stat-count" data-target="7" data-suffix="+">1</h3>
                    <p class="small text-uppercase text-muted fw-bold mb-0">Years Experience</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="text-primary mb-3"><i data-lucide="activity" style="width: 32px; height: 32px;"></i></div>
                    <h3 class="fw-bold mb-1 stat-count" data-target="1200" data-suffix="+">1</h3>
                    <p class="small text-uppercase text-muted fw-bold mb-0">Successful Surgeries</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="text-primary mb-3"><i data-lucide="target" style="width: 32px; height: 32px;"></i></div>
                    <h3 class="fw-bold mb-1 stat-count" data-target="200" data-suffix="+">1</h3>
                    <p class="small text-uppercase text-muted fw-bold mb-0">Minimally Invasive Spine Procedures</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="text-primary mb-3"><i data-lucide="heart" style="width: 32px; height: 32px;"></i></div>
                    <h3 class="fw-bold mb-1 stat-count" data-target="99" data-suffix="%">1</h3>
                    <p class="small text-uppercase text-muted fw-bold mb-0">Surgical Success Rate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-padding bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="section-subtitle">Biography</span>
                <h2 class="section-title mb-4 font-serif">Meet Dr. Pavan Kumar</h2>
                <div class="bg-primary rounded-pill mb-4" style="height: 3px; width: 60px;"></div>
                <p class="text-muted leading-relaxed mb-4">
                    Dr. E. Pavan Kumar is a highly specialized Consultant Neurosurgeon in Hyderabad. Known for his technical precision and patient-centric approach, he merges global surgical practices with customized recovery programs.
                </p>
                <p class="text-muted leading-relaxed mb-4">
                    After securing top credentials in general surgery, Dr. Pavan pursued superspecialty training (MCh) in Neurosurgery from the prestigious <strong>Nizam's Institute of Medical Sciences (NIMS)</strong>, Hyderabad. He has completed an international masterclass fellowship in Seoul, South Korea, to refine advanced keyhole surgical skills.
                </p>
                <div class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3 bg-white p-3 rounded-3 border">
                            <i data-lucide="graduation-cap" class="text-primary fs-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">MCh (Neurosurgery)</h6>
                                <p class="small text-muted mb-0">NIMS, Hyderabad (2022)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3 bg-white p-3 rounded-3 border">
                            <i data-lucide="globe" class="text-primary fs-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Endoscopic Fellowship</h6>
                                <p class="small text-muted mb-0">Seoul, South Korea</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 bg-white rounded-4 border shadow-sm">
                    <h4 class="mb-4 font-serif text-dark d-flex align-items-center gap-2">
                        <i data-lucide="award" class="text-primary"></i> Fellowships & Accreditations
                    </h4>
                    <div class="timeline">
                        <div class="mb-4 pb-2 border-bottom">
                            <h6 class="fw-bold text-dark mb-1">Endoscopic Spine Surgery Fellowship</h6>
                            <p class="small text-primary fw-semibold mb-2">Harrison Spineartus Hospital, Seoul, South Korea</p>
                            <p class="small text-muted">Advanced training in full-endoscopic spine treatments and transforaminal decompression techniques.</p>
                        </div>
                        <div class="mb-4 pb-2 border-bottom">
                            <h6 class="fw-bold text-dark mb-1">Consultant Neurosurgeon</h6>
                            <p class="small text-primary fw-semibold mb-2">Continental Hospitals, Gachibowli, Hyderabad</p>
                            <p class="small text-muted">Leading cranial, skull base tumor, and spine reconstruction surgeries.</p>
                        </div>
                        <div class="mb-0">
                            <h6 class="fw-bold text-dark mb-1">Former Assistant Professor</h6>
                            <p class="small text-primary fw-semibold mb-2">NIMS Hospital, Hyderabad</p>
                            <p class="small text-muted">Educating clinical postgraduates and contributing to neurosurgical research programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Section (Conditions Treated - Epione inspired grid) -->
<section id="services" class="section-padding bg-white">
    <div class="container">
        <div class="section-title-wrap text-center mb-5">
            <h2 class="section-title font-serif text-primary" style="font-size: 2.5rem; font-weight: 700; color: #0284c7 !important;">Pain Conditions we Treat...</h2>
            <p class="text-muted fs-5">Live a pain free life. Consult us now</p>
        </div>
        
        <div class="row g-4">
            <!-- Condition 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="condition-card" style="background-image: url('<?php echo BASE_URL; ?>assets/images/services/SpineSurgery.jpg');">
                    <div class="condition-card-content">
                        <h4 class="condition-card-title">Spine Surgery</h4>
                        <p class="condition-card-text">Advanced keyhole surgeries, endoscopic treatments, and spine reconstruction...</p>
                        <a href="<?php echo BASE_URL; ?>spine-surgery" class="condition-card-link">Know More >></a>
                    </div>
                </div>
            </div>
            <!-- Condition 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="condition-card" style="background-image: url('<?php echo BASE_URL; ?>assets/images/services/NeuroOncology.jpg');">
                    <div class="condition-card-content">
                        <h4 class="condition-card-title">Neuro Oncology</h4>
                        <p class="condition-card-text">Precise surgical excision of benign and malignant brain tumors...</p>
                        <a href="<?php echo BASE_URL; ?>neuro-oncology" class="condition-card-link">Know More >></a>
                    </div>
                </div>
            </div>
            <!-- Condition 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="condition-card" style="background-image: url('<?php echo BASE_URL; ?>assets/images/services/NeuroTrauma.jpg');">
                    <div class="condition-card-content">
                        <h4 class="condition-card-title">Neuro Trauma</h4>
                        <p class="condition-card-text">Emergency craniotomies and spine stabilizations for traumatic injuries...</p>
                        <a href="<?php echo BASE_URL; ?>neuro-trauma" class="condition-card-link">Know More >></a>
                    </div>
                </div>
            </div>
            <!-- Condition 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="condition-card" style="background-image: url('<?php echo BASE_URL; ?>assets/images/services/BackPain.jpg');">
                    <div class="condition-card-content">
                        <h4 class="condition-card-title">Back Pain</h4>
                        <p class="condition-card-text">Low back pain can be caused due to various structures involved...</p>
                        <a href="<?php echo BASE_URL; ?>back-pain" class="condition-card-link">Know More >></a>
                    </div>
                </div>
            </div>
            <!-- Condition 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="condition-card" style="background-image: url('<?php echo BASE_URL; ?>assets/images/services/Headache.jpg');">
                    <div class="condition-card-content">
                        <h4 class="condition-card-title">Headache</h4>
                        <p class="condition-card-text">Clinical protocols and nerve blocks for chronic migraines and tension headaches...</p>
                        <a href="<?php echo BASE_URL; ?>headache" class="condition-card-link">Know More >></a>
                    </div>
                </div>
            </div>
            <!-- Condition 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="condition-card" style="background-image: url('<?php echo BASE_URL; ?>assets/images/services/FacialNerve.jpg');">
                    <div class="condition-card-content">
                        <h4 class="condition-card-title">Facial Nerve</h4>
                        <p class="condition-card-text">Microvascular decompression and preservation for complex facial conditions...</p>
                        <a href="<?php echo BASE_URL; ?>facial-nerve" class="condition-card-link">Know More >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Credentials Section (Certificates & Gallery) -->
<section id="certificates" class="section-padding bg-light">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-subtitle">Academic Credentials</span>
            <h2 class="section-title font-serif">Certificates & Moments of Excellence</h2>
            <p class="text-muted">International recognition and training credentials representing the highest standards of neurosurgical competence.</p>
            <div class="divider"></div>
        </div>

        <div class="row g-4 mb-5">
            <!-- Cert 1 -->
            <div class="col-md-6">
                <div class="cert-card">
                    <div class="cert-img-wrapper">
                        <img src="assets/images/certificate1.png" alt="Spine Surgery Masterclass 2023 Certificate" loading="lazy">
                    </div>
                    <div class="p-4 border-top">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold mb-0 font-serif">Spine Surgery Masterclass 2023</h5>
                            <i data-lucide="medal" class="text-primary" style="width: 24px; height: 24px;"></i>
                        </div>
                        <p class="small text-muted mb-3">Recognized Guest Speaker in Bandung, Indonesia. Training global neurosurgeons on safe techniques.</p>
                        <p class="small text-secondary fw-semibold mb-0"><i data-lucide="calendar" class="align-middle me-1" style="width: 14px; height: 14px;"></i> May 13-16, 2023</p>
                    </div>
                </div>
            </div>
            <!-- Cert 2 -->
            <div class="col-md-6">
                <div class="cert-card">
                    <div class="cert-img-wrapper">
                        <img src="assets/images/certificate2.jpg" alt="5th Annual Scientific Meeting (INSS) Certificate" loading="lazy">
                    </div>
                    <div class="p-4 border-top">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold mb-0 font-serif">5th Annual Scientific Meeting (INSS)</h5>
                            <i data-lucide="award" class="text-primary" style="width: 24px; height: 24px;"></i>
                        </div>
                        <p class="small text-muted mb-3">Accredited Expert Speaker for the Indonesian Neurospine Society on endoscopic advancement.</p>
                        <p class="small text-secondary fw-semibold mb-0"><i data-lucide="calendar" class="align-middle me-1" style="width: 14px; height: 14px;"></i> Dec 16-17, 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <!-- Mentorship Moments -->
            <div class="col-lg-6">
                <div class="p-4 bg-white border rounded-4 shadow-sm h-100">
                    <h4 class="mb-4 font-serif text-dark d-flex align-items-center gap-2">
                        <i data-lucide="users" class="text-primary"></i> International Mentors
                    </h4>
                    <p class="small text-muted mb-4">Dr. Pavan Kumar Ediga during specialized clinical training alongside some of the world's most notable spine surgeons in South Korea.</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="rounded-3 overflow-hidden border">
                                <img src="assets/images/mentors.jpg" alt="Receiving Certificate from Dr. Heung Sung Kim" class="w-100 h-auto" loading="lazy">
                                <p class="small bg-light p-2 mb-0 text-center fw-medium" style="font-size: 0.7rem;">With Dr. Heung Sung Kim</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="rounded-3 overflow-hidden border">
                                <img src="assets/images/donpark.jpg" alt="Training with Dr. Don Park" class="w-100 h-auto" loading="lazy">
                                <p class="small bg-light p-2 mb-0 text-center fw-medium" style="font-size: 0.7rem;">With Dr. Don Park</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Surgical Review Case Gallery -->
            <div class="col-lg-6">
                <div class="p-4 bg-white border rounded-4 shadow-sm h-100">
                    <h4 class="mb-4 font-serif text-dark d-flex align-items-center gap-2">
                        <i data-lucide="image" class="text-primary"></i> Surgical Case Gallery
                    </h4>
                    <p class="small text-muted mb-4">Comparative clinical views and radiology reviews showing complex reconstructions and tumor resections.</p>
                    <div class="row g-2">
                        <div class="col-3">
                            <div class="gallery-hover-item">
                                <img src="assets/images/17.jpg" alt="Case Review 1" loading="lazy">
                                <div class="gallery-hover-overlay"><span class="small font-monospace">Case 1</span></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="gallery-hover-item">
                                <img src="assets/images/18.jpg" alt="Case Review 2" loading="lazy">
                                <div class="gallery-hover-overlay"><span class="small font-monospace">Case 2</span></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="gallery-hover-item">
                                <img src="assets/images/19.jpg" alt="Case Review 3" loading="lazy">
                                <div class="gallery-hover-overlay"><span class="small font-monospace">Case 3</span></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="gallery-hover-item">
                                <img src="assets/images/20.jpg" alt="Case Review 4" loading="lazy">
                                <div class="gallery-hover-overlay"><span class="small font-monospace">Case 4</span></div>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-0 mt-3" style="font-size: 0.65rem; font-style: italic;">* Clinical radiology views published for medical verification and educational reference.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Doctor Talks Section (Carousel) -->
    <section class="dr-talks-simple-bg section-padding" id="doctor-talks">
        <div class="container position-relative">

            <!-- Minimal Header -->
            <div class="text-center mb-5 mb-lg-5">
                <h2 class="section-title mb-0">
                    Doctor <span class="text-primary">Talks</span>
                </h2>
                <div class="dr-talks-divider"></div>
            </div>

            <!-- Carousel Navigation Buttons (Hidden on mobile, visible on desktop) -->
            <button id="drTalksPrev"
                class="dr-talks-nav dr-talks-nav-prev d-none d-md-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                </svg>
            </button>

            <button id="drTalksNext"
                class="dr-talks-nav dr-talks-nav-next d-none d-md-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </button>

            <!-- Video Slider Container -->
            <!-- "snap-x" forces the scrolling to lock onto the videos perfectly -->
            <div id="drTalksSlider"
                class="dr-talks-slider d-flex overflow-auto hide-scrollbar gap-4 pb-4">

                <!-- Video 1 -->
                <!-- Mobile: Shows 1 video (85% width so the next one peeks in), Tablet: 2 videos, Desktop: 3 videos -->
                <div class="dr-talks-slide">
                    <div class="dr-talks-video-box">
                        <div class="dr-talks-aspect">
                            <video class="dr-talks-vid" controls playsinline preload="metadata">
                                <source src="./assets/images/doc1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="dr-talks-slide">
                    <div class="dr-talks-video-box">
                        <div class="dr-talks-aspect">
                            <video class="dr-talks-vid" controls playsinline preload="metadata">
                                <source src="./assets/images/doc2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="dr-talks-slide">
                    <div class="dr-talks-video-box">
                        <div class="dr-talks-aspect">
                            <video class="dr-talks-vid" controls playsinline preload="metadata">
                                <source src="./assets/images/doc3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

              

            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- VIDEO SHOWCASE SECTION (NEW)                                  -->
    <!-- ============================================================ -->
    <section id="patient-videos" class="patient-videos-section section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5 mb-lg-5">
                <span class="section-subtitle">Video Library</span>
                <h2 class="section-title mt-2 mb-3">Clinical Insights & Patient Success
                </h2>
                <p class="text-muted patient-videos-intro mx-auto">Watch patient testimonials, procedural overviews, and
                    educational content from Dr. Pavan Kumar Ediga.</p>
                <div class="dr-talks-divider patient-videos-divider"></div>
            </div>

            <div class="row g-4 align-items-start">
                <!-- Main Player -->
                <div class="col-lg-8">
                    <!-- Changed to aspect-[9/16] for Reels and max-w-md to keep it looking like a phone -->
                    <div
                        class="patient-video-player bg-black rounded-4 overflow-hidden shadow-lg mx-auto position-relative border border-white">
                        <video id="mainVideoPlayer" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" controls
                            playsinline>
                            <source src="./assets/images/patient2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <div class="mt-4 p-4 bg-white rounded-3 shadow-sm border patient-video-caption mx-auto">
                        <div class="d-flex align-items-start gap-3">
                            <div
                                class="patient-video-icon bg-primary-subtle rounded-2 d-flex align-items-center justify-content-center flex-shrink-0 mt-1">
                                <i data-lucide="play-circle" class="text-primary"></i>
                            </div>
                            <div>
                                <h3 id="patientVideoTitle" class="h5 fw-bold text-dark mb-0">Patient Success Story</h3>
                                <p id="patientVideoDesc" class="text-muted small mt-2 mb-0 lh-base">Detailed
                                    walkthrough of a successful neurosurgical intervention and patient recovery.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Playlist Sidebar -->
                <div class="col-lg-4 patient-playlist-sidebar">
                    <p class="small fw-bold text-muted text-uppercase px-1 mb-3" style="letter-spacing: 0.12em;">Up Next</p>

                    <!-- Video 1 -->
                    <button
                        onclick="changeVideonew('./assets/images/patient2.mp4', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.', 'btn-1')"
                        class="video-playlist-btn video-btn-active"
                        id="btn-1">
                        <!-- Changed thumbnail to vertical (w-16 h-28) -->
                        <div class="video-playlist-thumb">
                            <img src="./assets/images/thumb2.png" alt="Thumbnail">
                            <div class="video-playlist-overlay">
                                <i data-lucide="play" class="text-white"></i>
                            </div>
                        </div>
                        <div class="video-playlist-copy">
                            <h4 class="fw-bold text-dark small lh-sm mb-0">Patient Success
                                Story</h4>
                            <span class="text-primary fw-bold text-uppercase mt-2 d-block video-playlist-label">Testimonial</span>
                        </div>
                    </button>

                    <!-- Video 2 -->
                    <button
                        onclick="changeVideonew('./assets/images/patient1.mp4', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.', 'btn-2')"
                        class="video-playlist-btn"
                        id="btn-2">
                        <div class="video-playlist-thumb">
                            <img src="./assets/images/thumb1.png" alt="Thumbnail">
                            <div class="video-playlist-overlay">
                                <i data-lucide="play" class="text-white"></i>
                            </div>
                        </div>
                        <div class="video-playlist-copy">
                            <h4 class="fw-bold text-dark small lh-sm mb-0">Patient Success
                                Overview</h4>
                            <span class="text-success fw-bold text-uppercase mt-2 d-block video-playlist-label">Testimonial</span>
                        </div>
                    </button>

                    <!-- Video 3 -->
                    <button
                        onclick="changeVideonew('./assets/images/patient3.mp4', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.', 'btn-3')"
                        class="video-playlist-btn"
                        id="btn-3">
                        <div class="video-playlist-thumb">
                            <img src="./assets/images/thumb3.png" alt="Thumbnail">
                            <div class="video-playlist-overlay">
                                <i data-lucide="play" class="text-white"></i>
                            </div>
                        </div>
                        <div class="video-playlist-copy">
                            <h4 class="fw-bold text-dark small lh-sm mb-0">Patient Success
                                Story</h4>
                            <span class="text-info fw-bold text-uppercase mt-2 d-block video-playlist-label">Testimonial</span>
                        </div>
                    </button>

                    <!-- Video 4 -->
                    <button
                        onclick="changeVideonew('./assets/images/patient4.mp4', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.', 'btn-4')"
                        class="video-playlist-btn"
                        id="btn-4">
                        <!-- Changed thumbnail to vertical (w-16 h-28) -->
                        <div class="video-playlist-thumb">
                            <img src="./assets/images/thumb4.png" alt="Thumbnail">
                            <div class="video-playlist-overlay">
                                <i data-lucide="play" class="text-white"></i>
                            </div>
                        </div>
                        <div class="video-playlist-copy">
                            <h4 class="fw-bold text-dark small lh-sm mb-0">Patient Success
                                Story</h4>
                            <span class="text-primary fw-bold text-uppercase mt-2 d-block video-playlist-label">Testimonial</span>
                        </div>
                    </button>

                    <!-- Video 5 -->
                    <button
                        onclick="changeVideonew('./assets/images/patient5.mp4', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.', 'btn-5')"
                        class="video-playlist-btn"
                        id="btn-5">
                        <div class="video-playlist-thumb">
                            <img src="./assets/images/thumb5.png" alt="Thumbnail">
                            <div class="video-playlist-overlay">
                                <i data-lucide="play" class="text-white"></i>
                            </div>
                        </div>
                        <div class="video-playlist-copy">
                            <h4 class="fw-bold text-dark small lh-sm mb-0">Patient Success
                                Story</h4>
                            <span class="text-success fw-bold text-uppercase mt-2 d-block video-playlist-label">Testimonial</span>
                        </div>
                    </button>

                    <!-- Video 6 -->
                    <button
                        onclick="changeVideonew('./assets/images/patient6.mp4', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.', 'btn-6')"
                        class="video-playlist-btn"
                        id="btn-6">
                        <div class="video-playlist-thumb">
                            <img src="./assets/images/thumb6.png" alt="Thumbnail">
                            <div class="video-playlist-overlay">
                                <i data-lucide="play" class="text-white"></i>
                            </div>
                        </div>
                        <div class="video-playlist-copy">
                            <h4 class="fw-bold text-dark small lh-sm mb-0">Patient Success
                                Story</h4>
                            <span class="text-info fw-bold text-uppercase mt-2 d-block video-playlist-label">Testimonial</span>
                        </div>
                    </button>

                    <!-- Video 7 -->
                    <button
                        onclick="changeVideonew('./assets/images/patient7.mp4', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.', 'btn-7')"
                        class="video-playlist-btn"
                        id="btn-7">
                        <div class="video-playlist-thumb">
                            <img src="./assets/images/thumb7.png" alt="Thumbnail">
                            <div class="video-playlist-overlay">
                                <i data-lucide="play" class="text-white"></i>
                            </div>
                        </div>
                        <div class="video-playlist-copy">
                            <h4 class="fw-bold text-dark small lh-sm mb-0">Patient Success
                                Story</h4>
                            <span class="text-info fw-bold text-uppercase mt-2 d-block video-playlist-label">Testimonial</span>
                        </div>
                    </button>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================ -->
    <!-- END VIDEO SECTION                                             -->
    <!-- ============================================================ -->

<!-- Video Library Section (Epione layout with playlists) -->
<section id="youtube-videos" class="section-padding bg-white">
    <div class="container">
        <div class="section-title-wrap">
            <span class="section-subtitle">Video Library</span>
            <h2 class="section-title font-serif">Clinical Insights & Testimonials</h2>
            <p class="text-muted">Watch procedural details, diagnostic guidelines, and success stories directly from Dr. Pavan.</p>
            <div class="divider"></div>
        </div>

        <div class="row g-4">
            <!-- Main Video Player -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 d-flex flex-column" style="border: 1px solid var(--border-color) !important;">
                    <div class="ratio ratio-16x9 bg-black">
                        <iframe id="mainYoutubePlayer" src="https://www.youtube.com/embed/c9nBqZbZcB0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="p-4 bg-light d-flex gap-3 flex-grow-1 align-items-center border-top">
                        <div class="card-icon mb-0 flex-shrink-0"><i data-lucide="play-circle"></i></div>
                        <div>
                            <h4 id="videoTitle" class="fw-bold mb-1 font-serif text-dark">Patient Success Story</h4>
                            <p id="videoDesc" class="text-muted small mb-0">Detailed walkthrough of a successful neurosurgical intervention and patient recovery.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Playlist Sidebar -->
            <div class="col-lg-4">
                <div class="playlist-sidebar">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 small" style="letter-spacing: 1px;">Clinical Playlist</h6>
                    
                    <button class="playlist-btn active" id="btn-c9nBqZbZcB0" onclick="changeVideo('c9nBqZbZcB0', 'Patient Success Story', 'Detailed walkthrough of a successful neurosurgical intervention and patient recovery.')">
                        <div class="playlist-thumb">
                            <img src="https://img.youtube.com/vi/c9nBqZbZcB0/mqdefault.jpg" alt="Video Thumbnail">
                            <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-bold text-dark small mb-1 text-truncate">Patient Success Story</h6>
                            <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Testimonial</span>
                        </div>
                    </button>
                    
                    <button class="playlist-btn" id="btn-KG8zTpbvna4" onclick="changeVideo('KG8zTpbvna4', 'Neurological Health Insights', 'Dr. Pavan Kumar provides educational insights into brain health and neurological conditions.')">
                        <div class="playlist-thumb">
                            <img src="https://img.youtube.com/vi/KG8zTpbvna4/mqdefault.jpg" alt="Video Thumbnail">
                            <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-bold text-dark small mb-1 text-truncate">Neurological Care Overview</h6>
                            <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Education</span>
                        </div>
                    </button>

                    <button class="playlist-btn" id="btn-HqXLdkCNq20" onclick="changeVideo('HqXLdkCNq20', 'Endoscopic Spine Techniques', 'Understanding the benefits and procedure of minimally invasive keyhole spine surgery.')">
                        <div class="playlist-thumb">
                            <img src="https://img.youtube.com/vi/HqXLdkCNq20/mqdefault.jpg" alt="Video Thumbnail">
                            <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-bold text-dark small mb-1 text-truncate">Spine Surgery Insights</h6>
                            <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Procedure</span>
                        </div>
                    </button>

                    <button class="playlist-btn" id="btn-ShH2xESwcoI" onclick="changeVideo('ShH2xESwcoI', 'Complex Tumor Management', 'Case review of neuro-oncology and surgical removal of brain lesions.')">
                        <div class="playlist-thumb">
                            <img src="https://img.youtube.com/vi/ShH2xESwcoI/mqdefault.jpg" alt="Video Thumbnail">
                            <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-bold text-dark small mb-1 text-truncate">Tumor Resection Case</h6>
                            <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Case Study</span>
                        </div>
                    </button>

                    <button class="playlist-btn" id="btn-YjI1RfRjbyw" onclick="changeVideo('YjI1RfRjbyw', 'Trauma & Emergency Response', 'Rapid intervention protocols for traumatic head and spine injuries.')">
                        <div class="playlist-thumb">
                            <img src="https://img.youtube.com/vi/YjI1RfRjbyw/mqdefault.jpg" alt="Video Thumbnail">
                            <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-bold text-dark small mb-1 text-truncate">Emergency Intervention</h6>
                            <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Neuro Trauma</span>
                        </div>
                    </button>

                    <button class="playlist-btn" id="btn-Z5u4UNP7X5c" onclick="changeVideo('Z5u4UNP7X5c', 'Rehabilitation & Post-Op Care', 'The importance of follow-up care and rehabilitation in neurosurgical recovery.')">
                        <div class="playlist-thumb">
                            <img src="https://img.youtube.com/vi/Z5u4UNP7X5c/mqdefault.jpg" alt="Video Thumbnail">
                            <div class="play-overlay"><i data-lucide="play" style="width: 16px; height: 16px;"></i></div>
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-bold text-dark small mb-1 text-truncate">Recovery Journey</h6>
                            <span class="text-primary text-uppercase fw-bold" style="font-size: 0.6rem;">Rehab</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-padding bg-light reviews-banner-section">
    <div class="container">
        <div class="section-title-wrap text-center mb-5">
            <span class="section-subtitle">Testimonials</span>
            <h2 class="section-title font-serif">Patient Success Stories</h2>
            <p class="text-muted">Hear from patients who recovered from critical neurological conditions under Dr. Pavan's care.</p>
            <div class="divider"></div>
        </div>

        <div id="reviewsCarousel" class="carousel slide reviews-carousel" data-bs-ride="carousel" data-bs-interval="6000">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="reviews-banner">
                        <div class="row align-items-center g-4">
                            <!-- Left quote & content + Middle star rating (wrapped in link) -->
                            <div class="col-lg-9 review-content-col">
                                <a href="https://share.google/nwIuimuyXE6vU9MxJ" target="_blank" rel="noopener noreferrer" class="row align-items-center text-decoration-none h-100 py-2">
                                    <div class="col-lg-8 d-flex align-items-start gap-3 text-start">
                                        <span class="review-quote-icon font-serif">“</span>
                                        <div>
                                            <p class="text-white mb-0 leading-relaxed font-monospace" style="font-size: 0.95rem; font-style: italic;">
                                                Very first Thanks to you Sir Dr. Pavan Kumar. Thanks for the Team Continental Hospital. It's a place where you can confidently leave your worries. I'm thankful to the Dr. Pavan Kumar Sir who did my surgery successfully and never let me feel any kind of stress during my stay. Really Great. Highly Confident and well knowledge. Thank you so much for your support and care Sir.
                                            </p>
                                        </div>
                                        <span class="review-quote-icon align-self-end font-serif">”</span>
                                    </div>
                                    
                                    <div class="col-lg-4 text-center">
                                        <div class="text-warning mb-2">
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                        </div>
                                        <h5 class="fw-bold text-white mb-1">Subhash Mishra</h5>
                                        <span class="text-white-50 small d-block mb-2">Continental Hospital Patient</span>
                                        <div class="google-reviews-badge">
                                            <span class="google-brand-text"><span style="color: #4285F4;">G</span><span style="color: #EA4335;">o</span><span style="color: #FBBC05;">o</span><span style="color: #4285F4;">g</span><span style="color: #34A853;">l</span><span style="color: #EA4335;">e</span></span>
                                            <span class="text-muted google-stars">Reviews <span class="text-warning">★★★★★</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Right Call to Action -->
                            <div class="col-lg-3 text-center d-flex flex-column align-items-center justify-content-center">
                                <div class="text-white mb-2"><i data-lucide="phone-call" style="width: 32px; height: 32px;"></i></div>
                                <a href="tel:<?php echo preg_replace('/\s+/', '', CLINIC_PHONE_1); ?>" class="text-white fw-bold fs-4 text-decoration-none hover-underline"><?php echo escape(CLINIC_PHONE_1); ?></a>
                                <span class="text-white-50 small text-uppercase fw-semibold mt-1" style="letter-spacing: 0.5px;">Book Appointment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="carousel-item">
                    <div class="reviews-banner">
                        <div class="row align-items-center g-4">
                            <!-- Left quote & content + Middle star rating (wrapped in link) -->
                            <div class="col-lg-9 review-content-col">
                                <a href="https://share.google/9mRQurzY6aXDX8sNz" target="_blank" rel="noopener noreferrer" class="row align-items-center text-decoration-none h-100 py-2">
                                    <div class="col-lg-8 d-flex align-items-start gap-3 text-start">
                                        <span class="review-quote-icon font-serif">“</span>
                                        <div>
                                            <p class="text-white mb-0 leading-relaxed font-monospace" style="font-size: 0.95rem; font-style: italic;">
                                                I would like to express my sincere gratitude to Dr. Pavan Kumar Ediga for the excellent treatment and care he provided to my father during his recovery from a brain stroke. His medical expertise, timely intervention, and patient-focused approach made a huge difference in my father's health. What stood out the most was not only his treatment but also his consistent follow-up and guidance, which gave us confidence throughout the recovery journey. Dr. Pavan Kumar Ediga is approachable, compassionate, and highly professional. We are truly thankful for his support and would strongly recommend him to anyone in need of neurological care.
                                            </p>
                                        </div>
                                        <span class="review-quote-icon align-self-end font-serif">”</span>
                                    </div>
                                    
                                    <div class="col-lg-4 text-center">
                                        <div class="text-warning mb-2">
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                        </div>
                                        <h5 class="fw-bold text-white mb-1">Ram Reddy Yerrabotu</h5>
                                        <span class="text-white-50 small d-block mb-2">Stroke Recovery Case</span>
                                        <div class="google-reviews-badge">
                                            <span class="google-brand-text"><span style="color: #4285F4;">G</span><span style="color: #EA4335;">o</span><span style="color: #FBBC05;">o</span><span style="color: #4285F4;">g</span><span style="color: #34A853;">l</span><span style="color: #EA4335;">e</span></span>
                                            <span class="text-muted google-stars">Reviews <span class="text-warning">★★★★★</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Right Call to Action -->
                            <div class="col-lg-3 text-center d-flex flex-column align-items-center justify-content-center">
                                <div class="text-white mb-2"><i data-lucide="phone-call" style="width: 32px; height: 32px;"></i></div>
                                <a href="tel:<?php echo preg_replace('/\s+/', '', CLINIC_PHONE_1); ?>" class="text-white fw-bold fs-4 text-decoration-none hover-underline"><?php echo escape(CLINIC_PHONE_1); ?></a>
                                <span class="text-white-50 small text-uppercase fw-semibold mt-1" style="letter-spacing: 0.5px;">Book Appointment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="carousel-item">
                    <div class="reviews-banner">
                        <div class="row align-items-center g-4">
                            <!-- Left quote & content + Middle star rating (wrapped in link) -->
                            <div class="col-lg-9 review-content-col">
                                <a href="https://share.google/DzHVjOZPqMAUQ3VcM" target="_blank" rel="noopener noreferrer" class="row align-items-center text-decoration-none h-100 py-2">
                                    <div class="col-lg-8 d-flex align-items-start gap-3 text-start">
                                        <span class="review-quote-icon font-serif">“</span>
                                        <div>
                                            <p class="text-white mb-0 leading-relaxed font-monospace" style="font-size: 0.95rem; font-style: italic;">
                                                had a great experience with Dr. Pavankumar E. From the moment I arrived, I felt well taken care of. Dr. Pavankumar was very thorough in explaining condition and the treatment options, which helped me feel more informed and confident. They listened attentively to my concerns and answered all of my questions in a way that was easy to understand. The appointment was timely, and I didn't feel rushed at all. I appreciate the compassionate and professional approach for treatment. I would highly recommend Dr.pavankumar to anyone seeking a neurosurgeon.
                                            </p>
                                        </div>
                                        <span class="review-quote-icon align-self-end font-serif">”</span>
                                    </div>
                                    
                                    <div class="col-lg-4 text-center">
                                        <div class="text-warning mb-2">
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                            <i data-lucide="star" class="fill-warning" style="width: 18px; height: 18px;"></i>
                                        </div>
                                        <h5 class="fw-bold text-white mb-1">Madhuri a.n.a</h5>
                                        <span class="text-white-50 small d-block mb-2">Neurosurgical Consultation</span>
                                        <div class="google-reviews-badge">
                                            <span class="google-brand-text"><span style="color: #4285F4;">G</span><span style="color: #EA4335;">o</span><span style="color: #FBBC05;">o</span><span style="color: #4285F4;">g</span><span style="color: #34A853;">l</span><span style="color: #EA4335;">e</span></span>
                                            <span class="text-muted google-stars">Reviews <span class="text-warning">★★★★★</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Right Call to Action -->
                            <div class="col-lg-3 text-center d-flex flex-column align-items-center justify-content-center">
                                <div class="text-white mb-2"><i data-lucide="phone-call" style="width: 32px; height: 32px;"></i></div>
                                <a href="tel:<?php echo preg_replace('/\s+/', '', CLINIC_PHONE_1); ?>" class="text-white fw-bold fs-4 text-decoration-none hover-underline"><?php echo escape(CLINIC_PHONE_1); ?></a>
                                <span class="text-white-50 small text-uppercase fw-semibold mt-1" style="letter-spacing: 0.5px;">Book Appointment</span>
                            </div>
                        </div>
                    </div>
            </div>
            
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Digital Business Card -->
<section class="section-padding bg-white d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="section-title-wrap mb-5">
            <span class="section-subtitle">V-Card</span>
            <h2 class="section-title font-serif">Digital Business Card</h2>
            <div class="divider"></div>
        </div>

        <div class="business-card-wrap mx-auto" style="max-width: 580px;">
            <div class="business-card p-4 p-md-5">
                <!-- Glare overlay -->
                <div class="business-card-glare position-absolute top-0 start-0 w-100 h-100" style="pointer-events: none; opacity: 0; transition: opacity 0.2s;"></div>
                
                <div class="row align-items-center g-4">
                    <div class="col-md-5 text-center border-end-md pb-4 pb-md-0">
                        <img src="assets/images/medicover1.png" alt="Continental Hospitals Logo" class="img-fluid mb-3" style="max-height: 80px; width: auto;">
                    </div>
                    <div class="col-md-7 text-center text-md-end">
                        <h4 class="fw-bold text-success mb-1 font-serif">Dr E Pavan Kumar</h4>
                        <p class="text-uppercase text-muted font-monospace mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">MBBS, MS, MCh (Neuro Surgery)</p>
                        
                        <div class="lh-sm mb-2 text-muted small">
                            <span class="fw-bold text-dark d-block">Consultant</span>
                            <span>Dept. of Neuro surgery</span><br>
                            <span>Brain & Spine surgeron</span>
                        </div>
                        
                        <div class="text-muted small border-top pt-3 mt-3">
                            <p class="mb-1"><i data-lucide="phone" class="align-middle me-1 text-success" style="width: 14px; height: 14px;"></i> +91 70930 85231</p>
                            <p class="mb-1"><i data-lucide="phone" class="align-middle me-1 text-success" style="width: 14px; height: 14px;"></i> +91 9160850650</p>
                            <p class="mb-1"><i data-lucide="mail" class="align-middle me-1 text-success" style="width: 14px; height: 14px;"></i> dr.pavankumar7759@gmail.com</p>
                            <p class="mb-0 text-md-end text-center d-flex justify-content-center justify-content-md-end gap-1"><i data-lucide="map-pin" class="align-middle me-1 text-success mt-1" style="width: 14px; height: 14px; flex-shrink: 0;"></i> <span style="max-width: 260px;">322, Myscape Rd, Financial District, Nanakramguda, Hyderabad, Telangana 500032</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center text-muted small mt-3">Move your cursor over the card to interact in 3D</p>
        </div>
    </div>
</section>

<!-- Emergency WhatsApp Support Banner -->
<section class="py-5 bg-light border-top">
    <div class="container text-center">
        <a href="<?php echo escape(CLINIC_WHATSAPP_LINK); ?>" target="_blank" class="emergency-whatsapp-banner-link text-decoration-none">
            <div class="emergency-whatsapp-banner d-flex align-items-center justify-content-center gap-3 p-4 mx-auto">
                <div class="emergency-icon-wrapper d-flex align-items-center justify-content-center">
                    <i data-lucide="message-circle" class="emergency-icon"></i>
                </div>
                <div class="emergency-text-wrapper text-start">
                    <span class="emergency-subtitle d-block text-uppercase fw-bold">EMERGENCY SUPPORT</span>
                    <span class="emergency-title d-block font-serif italic fw-bold">Available 24/7 on WhatsApp</span>
                </div>
            </div>
        </a>
    </div>
</section>

<!-- Appointment Booking & Locations Section -->
<section id="appointment-section" class="section-padding bg-light border-top">
    <div class="container">
        <div class="row g-5">
            <!-- Locations Column -->
            <div class="col-lg-6 d-flex flex-column" id="location">
                <span class="section-subtitle">Where to find us</span>
                <h2 class="font-serif mb-3">Clinic Locations & Timing</h2>
                <p class="text-muted mb-4">Dr. Pavan is available for consultations at two prime locations in Hyderabad. Select your nearest clinic below.</p>
                
                <div class="d-flex flex-column gap-4 flex-grow-1">
                    <!-- Location 1 -->
                    <div class="bg-white p-4 rounded-4 border shadow-sm flex-grow-1 d-flex flex-column">
                        <h5 class="fw-bold text-primary mb-3 font-serif d-flex align-items-center gap-2">
                            <i data-lucide="building"></i> <?php echo CLINIC_NAME_1; ?>
                        </h5>
                        <p class="small text-muted mb-3"><i data-lucide="map-pin" class="align-middle me-1 text-primary" style="width: 14px; height: 14px;"></i> <?php echo CLINIC_ADDRESS_1; ?></p>
                        <p class="small text-muted mb-4"><i data-lucide="clock" class="align-middle me-1 text-primary" style="width: 14px; height: 14px;"></i> <?php echo CLINIC_HOURS_1; ?></p>
                        <div class="mt-auto">
                            <a href="<?php echo CLINIC_MAP_1; ?>" target="_blank" class="btn btn-outline-primary btn-sm px-4 rounded-pill">Get Directions</a>
                        </div>
                    </div>
                    <!-- Location 2 -->
                    <div class="bg-white p-4 rounded-4 border shadow-sm flex-grow-1 d-flex flex-column">
                        <h5 class="fw-bold text-primary mb-3 font-serif d-flex align-items-center gap-2">
                            <i data-lucide="building-2"></i> <?php echo CLINIC_NAME_2; ?>
                        </h5>
                        <p class="small text-muted mb-3"><i data-lucide="map-pin" class="align-middle me-1 text-primary" style="width: 14px; height: 14px;"></i> <?php echo CLINIC_ADDRESS_2; ?></p>
                        <p class="small text-muted mb-4"><i data-lucide="clock" class="align-middle me-1 text-primary" style="width: 14px; height: 14px;"></i> <?php echo CLINIC_HOURS_2; ?></p>
                        <div class="mt-auto">
                            <a href="<?php echo CLINIC_MAP_2; ?>" target="_blank" class="btn btn-outline-primary btn-sm px-4 rounded-pill">Get Directions</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Form Column -->
            <div class="col-lg-6" id="booking-form">
                <div class="bg-white p-4 p-md-5 rounded-4 border shadow-sm position-relative overflow-hidden" style="border-top: 5px solid var(--primary-color) !important;">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="bg-primary-subtle p-2 rounded-3 text-primary d-flex align-items-center justify-content-center" style="width: 42px; height: 42px; flex-shrink: 0;">
                            <i data-lucide="calendar-days" style="width: 22px; height: 22px;"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold font-serif text-dark mb-0 fs-4">Book Appointment</h3>
                            <span class="text-uppercase text-primary fw-semibold" style="font-size: 0.65rem; letter-spacing: 1px;">Direct Clinic Scheduling</span>
                        </div>
                    </div>
                    <p class="text-muted small mb-4">Complete the fields below and our clinical coordinator will reach back to confirm your appointment slot.</p>
                    
                    <form action="api/submit-lead.php" method="POST" class="needs-validation space-y-3" novalidate id="appointmentForm">
                        <!-- CSRF Token -->
                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                        <input type="hidden" name="form_type" value="appointment">
                        
                        <div class="mb-3">
                            <label for="appt_name" class="form-label small fw-bold">Full Name</label>
                            <input type="text" class="form-control" id="appt_name" name="name" placeholder="Enter your full name" required>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="appt_phone" class="form-label small fw-bold">Phone Number</label>
                                <input type="tel" class="form-control" id="appt_phone" name="phone" placeholder="10-digit mobile number" required pattern="[0-9]{10}">
                                <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="appt_email" class="form-label small fw-bold">Email Address</label>
                                <input type="email" class="form-control" id="appt_email" name="email" placeholder="name@example.com">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="appt_date" class="form-label small fw-bold">Preferred Date</label>
                                <input type="date" class="form-control" id="appt_date" name="preferred_date" required min="<?php echo date('Y-m-d'); ?>">
                                <div class="invalid-feedback">Please select a future date.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="appt_time" class="form-label small fw-bold">Preferred Time Slot</label>
                                <select class="form-select" id="appt_time" name="preferred_time" required>
                                    <option value="" disabled selected>Choose a slot</option>
                                    <option value="09:00:00">09:00 AM</option>
                                    <option value="09:45:00">09:45 AM</option>
                                    <option value="10:30:00">10:30 AM</option>
                                    <option value="11:15:00">11:15 AM</option>
                                    <option value="12:00:00">12:00 PM</option>
                                    <option value="12:45:00">12:45 PM</option>
                                    <option value="14:00:00">02:00 PM</option>
                                    <option value="14:45:00">02:45 PM</option>
                                    <option value="15:30:00">03:30 PM</option>
                                    <option value="16:15:00">04:15 PM</option>
                                    <option value="17:00:00">05:00 PM</option>
                                    <option value="17:45:00">05:45 PM</option>
                                    <option value="18:30:00">06:30 PM</option>
                                </select>
                                <div class="invalid-feedback">Please select a time slot.</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="appt_message" class="form-label small fw-bold">Describe Your Condition</label>
                            <textarea class="form-control" id="appt_message" name="message" rows="3" placeholder="Briefly describe your symptoms (e.g., lower back pain, headaches)"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold rounded-pill shadow-sm d-flex align-items-center justify-content-center gap-2 hover-up">
                            <i data-lucide="check-circle" style="width: 18px; height: 18px;"></i>
                            Confirm Appointment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section with FAQ Schema -->
<section class="section-padding bg-white">
    <div class="container" style="max-width: 800px;">
        <div class="section-title-wrap">
            <span class="section-subtitle">FAQ</span>
            <h2 class="section-title font-serif">Frequently Asked Questions</h2>
            <div class="divider"></div>
        </div>

        <div class="accordion faq-accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h3 class="accordion-header" id="faq-h-1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-c-1" aria-expanded="true" aria-controls="faq-c-1">
                        What is Minimally Invasive (Endoscopic) Spine Surgery?
                    </button>
                </h3>
                <div id="faq-c-1" class="accordion-collapse collapse show" aria-labelledby="faq-h-1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small">
                        Minimally invasive spine surgery utilizes keyhole incisions, custom endoscopes, and specialized microscopes. This allows decompression of nerves with negligible muscle trauma, less post-operative pain, and extremely rapid recovery compared to traditional open surgery.
                    </div>
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h3 class="accordion-header" id="faq-h-2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-c-2" aria-expanded="false" aria-controls="faq-c-2">
                        How is facial nerve function protected during CP angle tumor surgery?
                    </button>
                </h3>
                <div id="faq-c-2" class="accordion-collapse collapse" aria-labelledby="faq-h-2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small">
                        During complex Cerebellopontine (CP) Angle Tumor resections, Dr. Pavan utilizes Intraoperative Neuromonitoring (IONM). This system tracks facial nerve response triggers in real-time, helping the surgeon map and preserve critical nerve tissue during resection.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h3 class="accordion-header" id="faq-h-3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-c-3" aria-expanded="false" aria-controls="faq-c-3">
                        How do I schedule an emergency consultation for Neuro Trauma?
                    </button>
                </h3>
                <div id="faq-c-3" class="accordion-collapse collapse" aria-labelledby="faq-h-3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small">
                        For acute brain injuries, spine fractures, or stroke emergencies, you can contact our 24/7 coordinator helpline on WhatsApp at <strong>+91 70930 85231</strong> or proceed directly to the Medicover Hospital emergency desk in Nanakramguda, Financial District.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Schema JSON-LD for Google -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is Minimally Invasive (Endoscopic) Spine Surgery?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Minimally invasive spine surgery utilizes keyhole incisions, custom endoscopes, and specialized microscopes. This allows decompression of nerves with negligible muscle trauma, less post-operative pain, and extremely rapid recovery compared to traditional open surgery."
      }
    },
    {
      "@type": "Question",
      "name": "How is facial nerve function protected during CP angle tumor surgery?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "During complex Cerebellopontine (CP) Angle Tumor resections, Dr. Pavan utilizes Intraoperative Neuromonitoring (IONM). This system tracks facial nerve response triggers in real-time, helping the surgeon map and preserve critical nerve tissue during resection."
      }
    },
    {
      "@type": "Question",
      "name": "How do I schedule an emergency consultation for Neuro Trauma?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For acute brain injuries, spine fractures, or stroke emergencies, you can contact our 24/7 coordinator helpline on WhatsApp at +91 70930 85231 or proceed directly to the Medicover Hospital emergency desk in Nanakramguda, Financial District."
      }
    }
  ]
}
</script>

 



<?php
// Include Footer
include 'includes/footer.php';
?>
