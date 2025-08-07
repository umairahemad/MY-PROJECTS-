// Testimonial slider auto-scroll
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.testimonial-slider');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
    });

    // Auto-scroll function
    function autoScroll() {
        if (slider.scrollLeft !== (slider.scrollWidth - slider.clientWidth)) {
            slider.scrollLeft += 1;
        } else {
            slider.scrollLeft = 0;
        }
    }

    let scrollInterval = setInterval(autoScroll, 30);

    // Stop auto-scroll on interaction
    slider.addEventListener('mouseenter', () => clearInterval(scrollInterval));
    slider.addEventListener('mouseleave', () => scrollInterval = setInterval(autoScroll, 30));
});