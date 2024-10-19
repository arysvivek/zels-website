document.addEventListener("DOMContentLoaded", function() {
    // Smooth scroll for Shop Now button
    const bannerButton = document.querySelector('#banner button');
    bannerButton.addEventListener('click', () => {
        document.querySelector('#products').scrollIntoView({ behavior: 'smooth' });
    });
});
