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