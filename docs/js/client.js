document.addEventListener('DOMContentLoaded', function () {
    var carouselElement = document.querySelector('#clientSlide');
    var navbar = document.querySelector('.navbar');
    var revealItems = document.querySelectorAll('.reveal, .section, .feature-card, .product-card, .values article, .contact-form');

    if (carouselElement && window.bootstrap) {
        var carousel = new bootstrap.Carousel(carouselElement, {
            interval: 3200,
            ride: 'carousel',
            pause: false,
            touch: true,
            wrap: true
        });

        carousel.cycle();
    }

    function updateNavbar() {
        if (!navbar) {
            return;
        }

        navbar.classList.toggle('navbar-scrolled', window.scrollY > 12);
    }

    updateNavbar();
    window.addEventListener('scroll', updateNavbar, { passive: true });

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.14
        });

        revealItems.forEach(function (item) {
            item.classList.add('reveal-ready');
            observer.observe(item);
        });
    } else {
        revealItems.forEach(function (item) {
            item.classList.add('is-visible');
        });
    }
});
