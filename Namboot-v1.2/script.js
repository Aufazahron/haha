const slider = document.querySelector('.slider-list');
let currentIndex = 0;

function nextSlide() {
    currentIndex = (currentIndex + 1) % slider.children.lenght;
    updateslider();
}

function updateslider() {
    const transformValue = -currentIndex * 100 + '%';
    slider.style.transform = 'translateX(${transformValue})';
}

function startAutoplay() {
    setInterval(() => {
        nextSlide();
    }, 3000);
}

startAutoplay();