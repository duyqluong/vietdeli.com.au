// Mobile menu toggle
const nav = document.querySelector('.nav-links');
const hamburger = document.createElement('div');
hamburger.classList.add('hamburger');
hamburger.innerHTML = '☰';
document.querySelector('.main-nav').appendChild(hamburger);

// Ensure menu is hidden initially on mobile
if (window.innerWidth <= 768) {
    nav.style.display = 'none';
}

hamburger.addEventListener('click', () => {
    nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
});

// Close mobile menu when clicking a link
nav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
            nav.style.display = 'none';
        }
    });
}); 