// ─── Global scroll-reveal ────────────────────────────────────────────────────
(function () {
    var els = document.querySelectorAll('.reveal');
    if (!els.length) return;
    if ('IntersectionObserver' in window) {
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
        els.forEach(function (el) { obs.observe(el); });
    } else {
        els.forEach(function (el) { el.classList.add('visible'); });
    }
}());

// ─── Global 3-D tilt cards (desktop) ─────────────────────────────────────────
(function () {
    if (window.innerWidth <= 768) return;
    document.querySelectorAll('.tilt-card').forEach(function (card) {
        card.addEventListener('mousemove', function (e) {
            var r  = card.getBoundingClientRect();
            var rx = ((e.clientY - r.top)  / r.height - 0.5) * -10;
            var ry = ((e.clientX - r.left) / r.width  - 0.5) *  10;
            card.style.transform = 'perspective(700px) rotateX('+rx+'deg) rotateY('+ry+'deg) translateZ(6px)';
        });
        card.addEventListener('mouseleave', function () {
            card.style.transform = '';
        });
    });
}());

// Mobile menu toggle
const nav = document.querySelector('.nav-links');
const hamburger = document.querySelector('.hamburger');

// Add mobile-nav-hidden class instead of using inline styles
if (window.innerWidth <= 768) {
    nav.classList.add('mobile-nav-hidden');
}

hamburger.addEventListener('click', () => {
    const isHidden = nav.classList.toggle('mobile-nav-hidden');
    hamburger.setAttribute('aria-expanded', isHidden ? 'false' : 'true');
});

// Close mobile menu when clicking a link
nav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
            nav.classList.add('mobile-nav-hidden');
            hamburger.setAttribute('aria-expanded', 'false');
        }
    });
});

// Close mobile menu when tapping outside
document.addEventListener('click', (e) => {
    if (window.innerWidth <= 768 && !nav.contains(e.target) && !hamburger.contains(e.target)) {
        nav.classList.add('mobile-nav-hidden');
        hamburger.setAttribute('aria-expanded', 'false');
    }
});

// Lightbox functionality
document.addEventListener('DOMContentLoaded', function() {
    const menuDialog = document.getElementById('menu-dialog');
    if (!menuDialog) return;

    const lightboxTriggers = document.querySelectorAll('.lightbox-trigger');
    const lightboxImage = document.getElementById('lightbox-image');
    
    // Lightbox state
    let currentZoom = 1;
    let currentX = 0;
    let currentY = 0;
    const zoomStep = 0.2;
    const moveStep = 50;
    
    // Initialize lightbox
    function initLightbox() {
        currentZoom = 1;
        currentX = 0;
        currentY = 0;
        updateImageTransform();
    }
    
    // Update image transform
    function updateImageTransform() {
        lightboxImage.style.transform = `translate(${currentX}px, ${currentY}px) scale(${currentZoom})`;
    }
    
    // Zoom functions
    function zoomIn() {
        currentZoom = Math.min(currentZoom + zoomStep, 3);
        updateImageTransform();
    }
    
    function zoomOut() {
        currentZoom = Math.max(currentZoom - zoomStep, 0.5);
        updateImageTransform();
    }
    
    function zoomReset() {
        currentZoom = 1;
        currentX = 0;
        currentY = 0;
        updateImageTransform();
    }
    
    // Navigation functions
    function moveUp() {
        currentY += moveStep;
        updateImageTransform();
    }
    
    function moveDown() {
        currentY -= moveStep;
        updateImageTransform();
    }
    
    function moveLeft() {
        currentX += moveStep;
        updateImageTransform();
    }
    
    function moveRight() {
        currentX -= moveStep;
        updateImageTransform();
    }
    
    // Event listeners for lightbox triggers
    lightboxTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const imageSrc = this.getAttribute('data-image');
            lightboxImage.src = imageSrc;
            initLightbox();
            document.body.style.overflow = 'hidden';
            menuDialog.showModal();
        });
    });
    
    // Event listeners for controls
    document.getElementById('zoom-in').addEventListener('click', zoomIn);
    document.getElementById('zoom-out').addEventListener('click', zoomOut);
    document.getElementById('zoom-reset').addEventListener('click', zoomReset);
    document.getElementById('nav-up').addEventListener('click', moveUp);
    document.getElementById('nav-down').addEventListener('click', moveDown);
    document.getElementById('nav-left').addEventListener('click', moveLeft);
    document.getElementById('nav-right').addEventListener('click', moveRight);
    document.getElementById('close-btn').addEventListener('click', function() {
        menuDialog.close();
    });
    
    // Keyboard controls
    document.addEventListener('keydown', function(e) {
        if (menuDialog.open) {
            switch(e.key) {
                case '+':
                case '=':
                    e.preventDefault();
                    zoomIn();
                    break;
                case '-':
                    e.preventDefault();
                    zoomOut();
                    break;
                case '0':
                    e.preventDefault();
                    zoomReset();
                    break;
                case 'ArrowUp':
                    e.preventDefault();
                    moveUp();
                    break;
                case 'ArrowDown':
                    e.preventDefault();
                    moveDown();
                    break;
                case 'ArrowLeft':
                    e.preventDefault();
                    moveLeft();
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    moveRight();
                    break;
                case 'Escape':
                    menuDialog.close();
                    break;
            }
        }
    });
    
    // Close lightbox when clicking outside the image
    menuDialog.addEventListener('click', function(e) {
        if (e.target === menuDialog) {
            menuDialog.close();
        }
    });
    
    // Restore body overflow when dialog closes
    menuDialog.addEventListener('close', function() {
        document.body.style.overflow = '';
        initLightbox(); // Reset zoom and position
    });
});

// Sticky mobile Order Now button
(function () {
    var stickyBtn = document.getElementById('sticky-order-btn');
    if (!stickyBtn) return;

    var SCROLL_THRESHOLD = 300;
    var footerVisible = false;

    var footer = document.querySelector('.site-footer');
    if (footer && 'IntersectionObserver' in window) {
        new IntersectionObserver(function (entries) {
            footerVisible = entries[0].isIntersecting;
            updateBtn();
        }, { threshold: 0.05 }).observe(footer);
    }

    function updateBtn() {
        if (window.innerWidth > 768) return;
        var show = window.scrollY > SCROLL_THRESHOLD && !footerVisible;
        stickyBtn.classList.toggle('is-visible', show);
    }

    window.addEventListener('scroll', updateBtn, { passive: true });
    window.addEventListener('resize', updateBtn, { passive: true });
}()); 