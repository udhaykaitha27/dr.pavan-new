<?php
/**
 * Global Footer Component
 */
require_once __DIR__ . '/config.php';
?>
<!-- Footer Section -->
<footer class="bg-dark text-secondary py-5 mt-auto border-top border-secondary border-opacity-10">
    <div class="container">
        <div class="row g-4 justify-content-between">
            <!-- Brand Column -->
            <div class="col-lg-5">
                <h4 class="text-white mb-3 font-serif">Dr. Pavan Kumar Ediga</h4>
                <p class="small text-secondary mb-4" style="max-width: 400px;">
                    Dedicated to delivering advanced, compassionate neurosurgical care with a specialty in minimally invasive spine surgery, neuro-oncology, and neuro trauma.
                </p>
                <div class="d-flex gap-3">
                    <a href="https://wa.me/917093085231" target="_blank" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <i data-lucide="message-circle" style="width: 16px; height: 16px;"></i>
                    </a>
                    <a href="mailto:dr.pavankumarediga@gmail.com" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <i data-lucide="mail" style="width: 16px; height: 16px;"></i>
                    </a>
                    <a href="tel:+917093085231" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <i data-lucide="phone" style="width: 16px; height: 16px;"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-6 col-md-3 col-lg-2">
                <h6 class="text-white mb-3 text-uppercase small font-monospace" style="letter-spacing: 1px;">Quick Links</h6>
                <ul class="list-unstyled mb-0 small">
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>#home" class="text-secondary text-decoration-none hover-link">Home</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>#about" class="text-secondary text-decoration-none hover-link">About Doctor</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>#services" class="text-secondary text-decoration-none hover-link">Expertise</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>#certificates" class="text-secondary text-decoration-none hover-link">Credentials</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>#patient-videos" class="text-secondary text-decoration-none hover-link">Videos</a></li>
                </ul>
            </div>

            <!-- Legal Documents -->
            <div class="col-6 col-md-3 col-lg-2">
                <h6 class="text-white mb-3 text-uppercase small font-monospace" style="letter-spacing: 1px;">Legal & Info</h6>
                <ul class="list-unstyled mb-0 small">
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>privacy-policy" class="text-secondary text-decoration-none hover-link">Privacy Policy</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>terms" class="text-secondary text-decoration-none hover-link">Terms of Service</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>sitemap" class="text-secondary text-decoration-none hover-link">Sitemap</a></li>
                </ul>
            </div>
            
            <!-- Consultation Hours -->
            <div class="col-md-6 col-lg-3">
                <h6 class="text-white mb-3 text-uppercase small font-monospace" style="letter-spacing: 1px;">Locations</h6>
                <p class="small text-secondary mb-2">
                    <strong>Medicover Hospitals:</strong><br>
                    Nanakramguda, Financial District<br>
                    Mon - Sat: 09:00 AM - 05:00 PM
                </p>
                <p class="small text-secondary mb-0">
                    <strong>Pavan Brain & Spine Clinic:</strong><br>
                    Secretariat Colony, Manikonda<br>
                    Mon - Sat: 05:30 PM - 09:30 PM
                </p>
            </div>
        </div>

        <hr class="border-secondary border-opacity-10 my-4">

        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 text-center text-md-start">
                <p class="small text-secondary mb-0">&copy; <?php echo date("Y"); ?> Dr. Pavan Kumar Ediga. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                <p class="small text-secondary mb-0">Care with surgical precision.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Action Contact Menu -->
<div class="floating-action-menu">
    <!-- Main Toggle Trigger Button -->
    <button class="floating-menu-trigger" id="floatingMenuTrigger" aria-label="Open contact options">
        <i data-lucide="message-square" class="icon-open" style="width: 28px; height: 28px;"></i>
        <i data-lucide="x" class="icon-close d-none" style="width: 28px; height: 28px;"></i>
    </button>
    <!-- Sub-options wrapper -->
    <div class="floating-menu-options" id="floatingMenuOptions">
        <!-- WhatsApp Option -->
        <a href="<?php echo escape(CLINIC_WHATSAPP_LINK); ?>" target="_blank" class="floating-menu-item whatsapp-btn" aria-label="Chat on WhatsApp">
            <i data-lucide="message-circle" style="width: 22px; height: 22px;"></i>
        </a>
        <!-- Call Option -->
        <a href="tel:<?php echo preg_replace('/\s+/', '', CLINIC_PHONE_1); ?>" class="floating-menu-item call-btn" aria-label="Call clinic">
            <i data-lucide="phone" style="width: 22px; height: 22px;"></i>
        </a>
    </div>
</div>

<!-- Floating Scroll to Top -->
<button class="back-to-top" aria-label="Back to top">
    <i data-lucide="chevron-up" style="width: 20px; height: 20px;"></i>
</button>

<!-- Sticky Mobile CTA Bar (Epione inspired) -->
<div class="mobile-sticky-cta d-md-none">
    <a href="tel:<?php echo preg_replace('/\s+/', '', CLINIC_PHONE_1); ?>" class="btn btn-primary d-flex align-items-center justify-content-center gap-2 flex-grow-1 py-2 text-white">
        <i data-lucide="phone" style="width: 18px; height: 18px;"></i> Call Clinic
    </a>
    <a href="<?php echo escape(CLINIC_WHATSAPP_LINK); ?>" target="_blank" class="btn btn-success d-flex align-items-center justify-content-center gap-2 flex-grow-1 py-2 text-white" style="background-color: #25d366; border-color: #25d366;">
        <i data-lucide="message-circle" style="width: 18px; height: 18px;"></i> WhatsApp
    </a>
</div>

<!-- Lucide Icons Library -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Bootstrap Bundle JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="crossorigin"></script>

<!-- UTM tracking utility script (must run before app.js) -->
<script src="<?php echo BASE_URL; ?>assets/js/utm.js"></script>

<!-- Main Theme Application script -->
<script src="<?php echo BASE_URL; ?>assets/js/app.js"></script>

<!-- Init Lucide Icons & Floating Menu Toggle -->
<script>
    lucide.createIcons();
    
    document.addEventListener('DOMContentLoaded', function() {
        const trigger = document.getElementById('floatingMenuTrigger');
        const options = document.getElementById('floatingMenuOptions');
        if (trigger && options) {
            trigger.addEventListener('click', function() {
                options.classList.toggle('show');
                const iconOpen = trigger.querySelector('.icon-open');
                const iconClose = trigger.querySelector('.icon-close');
                if (options.classList.contains('show')) {
                    iconOpen.classList.add('d-none');
                    iconClose.classList.remove('d-none');
                    trigger.style.backgroundColor = '#9333ea'; // Darker purple when active
                } else {
                    iconOpen.classList.remove('d-none');
                    iconClose.classList.add('d-none');
                    trigger.style.backgroundColor = '#a855f7'; // Reset to standard purple
                }
            });
            
            // Close menu if clicking outside
            document.addEventListener('click', function(event) {
                if (!trigger.contains(event.target) && !options.contains(event.target)) {
                    options.classList.remove('show');
                    const iconOpen = trigger.querySelector('.icon-open');
                    const iconClose = trigger.querySelector('.icon-close');
                    iconOpen.classList.remove('d-none');
                    iconClose.classList.add('d-none');
                    trigger.style.backgroundColor = '#a855f7';
                }
            });
        }
    });
</script>

</body>
</html>
