const carousel = document.querySelector(".carousel");
const slides = document.querySelectorAll(".slide");
const slideWidth = slides[0].offsetWidth;
const slideCount = slides.length;
let currentSlide = 0;

function slideNext() {
    currentSlide = (currentSlide + 1) % slideCount;
    carousel.scrollTo({
        left: currentSlide * slideWidth,
        behavior: "smooth"
    });
}

function startAutoSlide() {
    autoSlideInterval = setInterval(slideNext, 15000); // 15000 milliseconds = 15 seconds
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

// Start the auto-slide when the page loads
startAutoSlide();

// Pause auto-slide when the user hovers over the carousel
carousel.addEventListener("mouseenter", stopAutoSlide);

// Resume auto-slide when the user leaves the carousel
carousel.addEventListener("mouseleave", startAutoSlide);