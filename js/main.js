// Mobile menu toggle
const nav = document.querySelector('.nav-links');
const hamburger = document.createElement('div');
hamburger.classList.add('hamburger');
hamburger.innerHTML = '☰';
document.querySelector('.main-nav').appendChild(hamburger);

// Add mobile-nav-hidden class instead of using inline styles
if (window.innerWidth <= 768) {
    nav.classList.add('mobile-nav-hidden');
}

hamburger.addEventListener('click', () => {
    nav.classList.toggle('mobile-nav-hidden');
});

// Close mobile menu when clicking a link
nav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
            nav.classList.add('mobile-nav-hidden');
        }
    });
});

// Lightbox functionality
document.addEventListener('DOMContentLoaded', function() {
    const lightboxTriggers = document.querySelectorAll('.lightbox-trigger');
    const menuDialog = document.getElementById('menu-dialog');
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