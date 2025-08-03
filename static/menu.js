// static/menu.js
function initMobileMenu() {
    // Mobile menu toggle
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');
    const mobileOverlay = document.querySelector('.mobile-overlay');
    const mobileClose = document.querySelector('.mobile-close-btn');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            mobileNav.classList.toggle('active');
            mobileOverlay.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });
    }
    if (mobileClose) {
        mobileClose.addEventListener('click', function() {
            mobileNav.classList.remove('active');
            mobileOverlay.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    }
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function() {
            mobileNav.classList.remove('active');
            this.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    }

    // Main dropdowns (About, Departments, Facilities, etc.)
    document.querySelectorAll('.mobile-dropdown > .dropbtn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const dropdown = this.closest('.mobile-dropdown');
            // Close other dropdowns
            document.querySelectorAll('.mobile-dropdown').forEach(other => {
                if (other !== dropdown) other.classList.remove('active');
            });
            dropdown.classList.toggle('active');
        });
    });

    // Student Clubs submenu for mobile
    document.querySelectorAll('.mobile-clubs-header').forEach(header => {
        header.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.classList.toggle('active');
            const clubsList = this.nextElementSibling;
            if (clubsList && clubsList.classList.contains('mobile-clubs-list')) {
                clubsList.classList.toggle('active');
            }
        });
    });

    // Prevent accidental closure on Student Clubs links
    document.querySelectorAll('.mobile-clubs-list a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });

    // Desktop dropdown hover
    document.querySelectorAll('.dropdown').forEach(dropdown => {
        dropdown.addEventListener('mouseenter', function() {
            const content = this.querySelector('.dropdown-content');
            if (content) content.style.display = 'block';
        });
        dropdown.addEventListener('mouseleave', function() {
            const content = this.querySelector('.dropdown-content');
            if (content) content.style.display = 'none';
        });
    });
}

// Initialize when DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    if (typeof initMobileMenu === 'function') {
        initMobileMenu();
    }
    // Set year if you have <span id="year"></span> somewhere
    const yearEl = document.getElementById('year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();
});