document.addEventListener('DOMContentLoaded', () => {
    const scrollButton = document.querySelector('.scroll-to-top');
    const footer = document.querySelector('.footer-section');

    const footerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                scrollButton.classList.add('is-hidden-by-footer');
            } else {
                scrollButton.classList.remove('is-hidden-by-footer');
            }
        });
    }, {
        threshold: 0.1 
    });

    if (footer) {
        footerObserver.observe(footer);
    }
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            scrollButton.classList.add('is-visible');
        } else {
            scrollButton.classList.remove('is-visible');
        }
    });

    if (window.scrollY > 100) {
        scrollButton.classList.add('is-visible');
    }
});