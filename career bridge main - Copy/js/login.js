function showLogin() {
    document.querySelector('.slides').style.transform = 'translateX(0)';
    document.getElementById('login-form').classList.add('form-active');
    document.getElementById('signup-form').classList.remove('form-active');
    setActiveSlide(0);
}

function showSignup() {
    document.querySelector('.slides').style.transform = 'translateX(-50%)';
    document.getElementById('signup-form').classList.add('form-active');
    document.getElementById('login-form').classList.remove('form-active');
    setActiveSlide(1);
}

function setActiveSlide(index) {
    const slides = document.querySelectorAll('.slide');
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.add('active');
        } else {
            slide.classList.remove('active');
        }
    });
}

// Initialize the first slide as active
document.addEventListener('DOMContentLoaded', () => setActiveSlide(0));