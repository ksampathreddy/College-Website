function initMobileMenu() {
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');
  const mobileOverlay = document.querySelector('.mobile-overlay');
  const mobileClose = document.querySelector('.mobile-close-btn');

  if (mobileToggle && mobileNav && mobileOverlay) {
    // Toggle mobile menu
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
  const dropdowns = document.querySelectorAll('.mobile-dropdown');
  dropdowns.forEach(dropdown => {
    const btn = dropdown.querySelector('.dropbtn');
    if (btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        dropdown.classList.toggle('active');
      });
    }
  });
}

// Initialize when DOM is fully loaded
document.addEventListener('DOMContentLoaded', initMobileMenu);

// footer

document.getElementById('year').textContent = new Date().getFullYear();
