document.addEventListener('DOMContentLoaded', function() {
  const images = document.querySelectorAll('.image-slider img');
  let currentIndex = 0;

  // Show first image immediately
  images[0].classList.add('active');

  function showNextImage() {
    // Remove active class from current image
    images[currentIndex].classList.remove('active');
    
    // Move to next image
    currentIndex = (currentIndex + 1) % images.length;
    
    // Add active class to new image
    images[currentIndex].classList.add('active');
  }

  // Change image every 5 seconds
  setInterval(showNextImage, 5000);
});