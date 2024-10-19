document.addEventListener("DOMContentLoaded", function() {
    const bannerButton = document.querySelector('#banner button');
    bannerButton.addEventListener('click', () => {
        window.location.href = '#products';
    });
});
