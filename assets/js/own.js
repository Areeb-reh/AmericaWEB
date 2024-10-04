document.querySelectorAll('.main-text-dark').forEach(function (darkText) {
    darkText.addEventListener('mouseenter', function () {
        // Add hover class to parent
        this.parentElement.classList.add('hover');
    });
    darkText.addEventListener('mouseleave', function () {
        // Remove hover class from parent
        this.parentElement.classList.remove('hover');
    });
});




document.addEventListener('DOMContentLoaded', (event) => {
    const hoverText = document.getElementById('hover-text');
    const brandingElements = document.querySelectorAll('.main-text-dark');

    brandingElements.forEach(element => {
        element.addEventListener('mouseenter', () => {
            const text = element.getAttribute('data-hover-text');
            hoverText.textContent = text;
            hoverText.style.display = 'block';
            hoverText.classList.add('animate'); // Add animation class
        });

        element.addEventListener('mousemove', (e) => {
            hoverText.style.left = `${e.pageX}px`;
            hoverText.style.top = `${e.pageY}px`;
        });

        element.addEventListener('mouseleave', () => {
            hoverText.style.display = 'none';
            hoverText.classList.remove('animate'); // Remove animation class
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const imgs = document.querySelectorAll('.text_scroll .main-text img');
    let position = 0;
    let direction = 1; // 1 for down, -1 for up

    function animate() {
        position += direction * 0.1; // Change 0.2 to control speed
        if (position >= 12 || position <= -12) { // Change 10 to control distance
            direction *= -1;
        }
        imgs.forEach(img => {
            img.style.transform = `translateY(${position}px)`;
        });
        requestAnimationFrame(animate);
    }

    animate();
});


document.addEventListener("DOMContentLoaded", function() {
    const svgElement = document.getElementById("animated-svg");

    function animateSVG() {
        svgElement.animate([
            { transform: 'translateY(0) rotate(10deg)' },
            { transform: 'translateY(-20px) rotate(10deg)' },
            { transform: 'translateY(0) rotate(10deg)' }
        ], {
            duration: 3000,
            iterations: Infinity,
            easing: 'ease-in-out'
        });
    }

    animateSVG();
});


document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.ul-desktop .btn-link a');
    const currentUrl = window.location.pathname.split('/').pop();

    links.forEach(link => {
        const linkHref = link.getAttribute('href').split('/').pop();
        if (linkHref === currentUrl) {
            link.parentElement.classList.add('active');
        }
    });
});

function setActiveLink() {
    const links = document.querySelectorAll('.ul-desktop .btn-link a');
    const currentUrl = window.location.pathname.split('/').pop();

    links.forEach(link => {
        const linkHref = link.getAttribute('href').split('/').pop();
        if (linkHref === currentUrl) {
            link.parentElement.classList.add('active');
        } else {
            link.parentElement.classList.remove('active'); // remove active class if not matching
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    setActiveLink();
});

// If using barba.js
barba.hooks.after(() => {
    setActiveLink();
});







document.addEventListener('DOMContentLoaded', function () {
    function initializeCarousels() {
        const carousels = document.querySelectorAll('.swiper-container');
        carousels.forEach((carousel) => {
            new Swiper(carousel, {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        });
    }

    window.onload = function() {
        initializeCarousels(); 
    };

    // Initialize carousels on page load
    initializeCarousels();

    // Reinitialize carousels when the page becomes visible again
    window.addEventListener('visibilitychange', function () {
        if (document.visibilityState === 'visible') {
            initializeCarousels();
        }
    });
});


