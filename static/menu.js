function initMobileMenu() {
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');
    const mobileOverlay = document.querySelector('.mobile-overlay');
    const mobileClose = document.querySelector('.mobile-close-btn');

    // Toggle mobile menu
    if (mobileToggle && mobileNav && mobileOverlay) {
        mobileToggle.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.toggle('active');
            mobileNav.classList.toggle('active');
            mobileOverlay.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });

        // Close mobile menu
        if (mobileClose) {
            mobileClose.addEventListener('click', function(e) {
                e.preventDefault();
                mobileToggle.classList.remove('active');
                mobileNav.classList.remove('active');
                mobileOverlay.classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
        }

        mobileOverlay.addEventListener('click', function(e) {
            e.preventDefault();
            mobileToggle.classList.remove('active');
            mobileNav.classList.remove('active');
            this.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    }

    // Mobile dropdown functionality
    document.querySelectorAll('.mobile-dropdown .dropbtn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const dropdown = this.closest('.mobile-dropdown');
            dropdown.classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-chevron-up');
        });
    });

    // Sports submenu toggle for mobile
    document.querySelectorAll('.sports-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.toggle('active');
            const submenu = this.nextElementSibling;
            submenu.classList.toggle('active');
        });
    });

    // Desktop dropdowns
    document.querySelectorAll('.dropdown').forEach(dropdown => {
        dropdown.addEventListener('mouseenter', function() {
            this.querySelector('.dropdown-content').style.display = 'block';
        });
        
        dropdown.addEventListener('mouseleave', function() {
            this.querySelector('.dropdown-content').style.display = 'none';
        });
    });
}

// Initialize when DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    document.getElementById('year').textContent = new Date().getFullYear();
});