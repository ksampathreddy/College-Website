// Add this JavaScript
document.getElementById('scrollTopBtn').addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Optional: Show/hide button based on scroll position
window.addEventListener('scroll', function() {
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    if (window.pageYOffset > 300) {
        scrollTopBtn.parentElement.style.display = 'block';
    } else {
        scrollTopBtn.parentElement.style.display = 'none';
    }
});

// Initially hide the button
document.querySelector('.scroll-to-top').style.display = 'none';
