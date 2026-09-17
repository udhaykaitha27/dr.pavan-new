/**
 * Main Application Script for Dr. Pavan Kumar Ediga Rebuild
 */

document.addEventListener("DOMContentLoaded", function () {
    // 1. Navbar Scroll Effect
    const navbar = document.querySelector(".navbar-custom");
    const backToTop = document.querySelector(".back-to-top");

    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            if (backToTop) backToTop.classList.add("visible");
        } else {
            navbar.classList.remove("scrolled");
            if (backToTop) backToTop.classList.remove("visible");
        }
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Initial check

    // 2. Mobile Menu Toggle
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbarCollapse = document.querySelector(".navbar-collapse");

    if (navbarToggler && navbarCollapse) {
        const navItems = navbarCollapse.querySelectorAll(".nav-link:not([data-bs-toggle='dropdown']), .btn");
        navItems.forEach(item => {
            item.addEventListener("click", () => {
                if (window.innerWidth < 992 && navbarCollapse.classList.contains("show")) {
                    navbarToggler.click(); // Close collapse on click
                }
            });
        });
    }

    // 3. Scroll spy - active navigation link highlight
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    const observerOptions = {
        root: null,
        rootMargin: "-20% 0px -60% 0px",
        threshold: 0
    };

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute("id");
                navLinks.forEach(link => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${id}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => sectionObserver.observe(section));

    // 4. Back to Top Smooth Scroll
    if (backToTop) {
        backToTop.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

    // 5. 3D Business Card Tilt Effect (Vanilla JS alternative)
    const cards = document.querySelectorAll(".business-card");
    cards.forEach(card => {
        card.addEventListener("mousemove", function (e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left; //x position within the element.
            const y = e.clientY - rect.top;  //y position within the element.

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = ((centerY - y) / centerY) * 12; // max 12 deg
            const rotateY = ((x - centerX) / centerX) * 12; // max 12 deg

            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;

            // Adjust glare if present
            const glare = this.querySelector(".business-card-glare");
            if (glare) {
                glare.style.opacity = "0.2";
                glare.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(255,255,255,0.4) 0%, rgba(255,255,255,0) 80%)`;
            }
        });

        card.addEventListener("mouseleave", function () {
            this.style.transform = "perspective(1000px) rotateX(0deg) rotateY(0deg)";
            const glare = this.querySelector(".business-card-glare");
            if (glare) {
                glare.style.opacity = "0";
            }
        });
    });

    // 6. Client-Side Form Validations & Booking Handler
    const forms = document.querySelectorAll(".needs-validation");
    forms.forEach(form => {
        form.addEventListener("submit", function (e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add("was-validated");
        }, false);
    });

    // Lazy load non-critical images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const image = entry.target;
                    if (image.dataset.src) {
                        image.src = image.dataset.src;
                        image.removeAttribute("data-src");
                    }
                    observer.unobserve(image);
                }
            });
        });

        document.querySelectorAll("img[loading='lazy']").forEach(img => {
            imageObserver.observe(img);
        });
    }
});

// 7. Video Playlist Switcher Function
function changeVideo(id, title, desc) {
    const player = document.getElementById("mainYoutubePlayer");
    const titleElem = document.getElementById("videoTitle");
    const descElem = document.getElementById("videoDesc");

    if (!player || !titleElem || !descElem) return;

    // Update iframe src with autoplay
    player.src = `https://www.youtube.com/embed/${id}?autoplay=1`;

    // Update title and description
    titleElem.textContent = title;
    descElem.textContent = desc;

    // Remove active state from all playlist buttons
    document.querySelectorAll(".playlist-btn").forEach(btn => {
        btn.classList.remove("active");
    });

    // Set active state on clicked button
    const activeBtn = document.getElementById("btn-" + id);
    if (activeBtn) {
        activeBtn.classList.add("active");
    }

    // Scroll player into view on small devices
    if (window.innerWidth < 992) {
        player.scrollIntoView({ behavior: "smooth", block: "center" });
    }
}

function changeVideonew(videoPath, title, desc, buttonId) {
    // 1. Update the Video Player
    const videoPlayer = document.getElementById('mainVideoPlayer');
    videoPlayer.src = videoPath;
    videoPlayer.play(); // Automatically play when a new video is clicked

    // 2. Update the Text
    document.getElementById('patientVideoTitle').innerText = title;
    document.getElementById('patientVideoDesc').innerText = desc;

    // 3. Reset all buttons to default styling
    const allButtons = document.querySelectorAll('.video-playlist-btn');
    allButtons.forEach(btn => {
        btn.classList.remove('video-btn-active');
    });

    // 4. Highlight the active button
    const activeButton = document.getElementById(buttonId);
    if (activeButton) {
        activeButton.classList.add('video-btn-active');
    }
}

document.addEventListener("DOMContentLoaded", function () {
    // Carousel Navigation Logic
    const slider = document.getElementById('drTalksSlider');
    const prevBtn = document.getElementById('drTalksPrev');
    const nextBtn = document.getElementById('drTalksNext');

    if (slider && prevBtn && nextBtn) {
        // Scroll roughly one video width at a time
        const scrollAmount = 350;

        nextBtn.addEventListener('click', () => {
            slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
    }

    // Auto-pause other videos when one is played
    const videos = document.querySelectorAll('.dr-talks-vid');
    videos.forEach(video => {
        video.addEventListener('play', function () {
            videos.forEach(otherVideo => {
                if (otherVideo !== video) {
                    otherVideo.pause();
                }
            });
        });
    });
});

// Dropdown Click Redirection on Desktop & Toggle on Mobile
document.addEventListener("DOMContentLoaded", function () {
    const dropdownTriggers = document.querySelectorAll('.navbar-nav .dropdown > a');
    dropdownTriggers.forEach(link => {
        link.addEventListener('click', function (e) {
            if (window.innerWidth >= 992) {
                // On desktop, clicking parent link navigates directly to its href
                const url = this.getAttribute('href');
                if (url && url !== '#') {
                    window.location.href = url;
                }
            }
            // On mobile, let Bootstrap's native JS handle toggling the dropdown
        });
    });
});

// Statistics Counter Animation (when visible)
document.addEventListener("DOMContentLoaded", function () {
    const statsSection = document.querySelector('#stats-section');
    const stats = document.querySelectorAll('.stat-count');
    if (stats.length === 0 || !statsSection) return;

    let animated = false;

    const animateCount = (el) => {
        const target = parseInt(el.getAttribute('data-target'), 10);
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 2000; // 2 seconds duration
        const startTime = performance.now();

        const updateCount = (timestamp) => {
            const elapsed = timestamp - startTime;
            const progress = Math.min(elapsed / duration, 1);

            // Easing (easeOutQuad)
            const easeProgress = progress * (2 - progress);
            const currentVal = Math.floor(easeProgress * target);

            // Format large numbers with commas
            el.textContent = currentVal.toLocaleString('en-US') + suffix;

            if (progress < 1) {
                requestAnimationFrame(updateCount);
            } else {
                el.textContent = target.toLocaleString('en-US') + suffix;
            }
        };

        requestAnimationFrame(updateCount);
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                animated = true;
                stats.forEach(stat => animateCount(stat));
                obs.unobserve(statsSection); // Trigger only once
            }
        });
    }, {
        threshold: 0.2 // Trigger when 20% of the section is visible
    });

    observer.observe(statsSection);
});
