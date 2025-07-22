document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');
  const mobileOverlay = document.querySelector('.mobile-overlay');
  const mobileClose = document.querySelector('.mobile-close-btn');
  
  // Toggle mobile menu
  if (mobileToggle) {
    mobileToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      mobileNav.classList.toggle('active');
      mobileOverlay.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    });
  }
  
  // Close mobile menu
  if (mobileClose) {
    mobileClose.addEventListener('click', function() {
      mobileToggle.classList.remove('active');
      mobileNav.classList.remove('active');
      mobileOverlay.classList.remove('active');
      document.body.classList.remove('no-scroll');
    });
  }
  
  if (mobileOverlay) {
    mobileOverlay.addEventListener('click', function() {
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
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      dropdown.classList.toggle('active');
    });
  });
});
