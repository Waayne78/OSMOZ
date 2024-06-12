const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');
const items = document.querySelectorAll('.carousel-item');

let currentIndex = 0;

nextButton.addEventListener('click', () => {
    goToNext();
});

prevButton.addEventListener('click', () => {
    goToPrev();
});

function goToNext() {
    const nextIndex = (currentIndex + 1) % items.length;
    updateCarousel(nextIndex);
}

function goToPrev() {
    const prevIndex = (currentIndex - 1 + items.length) % items.length;
    updateCarousel(prevIndex);
}

function updateCarousel(newIndex) {
    items[currentIndex].classList.remove('selected');
    items[newIndex].classList.add('selected');
    currentIndex = newIndex;

    // Set classes for previous and next items
    items.forEach((item, index) => {
        item.classList.remove('prev', 'next', 'prevLeftSecond', 'nextRightSecond', 'hideLeft', 'hideRight');
        if (index === currentIndex - 1 || (currentIndex === 0 && index === items.length - 1)) {
            item.classList.add('prev');
        } else if (index === currentIndex + 1 || (currentIndex === items.length - 1 && index === 0)) {
            item.classList.add('next');
        } else if (index === currentIndex - 2 || (currentIndex === 0 && index === items.length - 2) || (currentIndex === 1 && index === items.length - 1)) {
            item.classList.add('prevLeftSecond');
        } else if (index === currentIndex + 2 || (currentIndex === items.length - 1 && index === 1) || (currentIndex === items.length - 2 && index === 0)) {
            item.classList.add('nextRightSecond');
        } else if (index < currentIndex - 2 || (currentIndex === 0 && index < items.length - 2) || (currentIndex === 1 && index < items.length - 1)) {
            item.classList.add('hideLeft');
        } else {
            item.classList.add('hideRight');
        }
    });
}

// Initialize the carousel display
updateCarousel(currentIndex);
