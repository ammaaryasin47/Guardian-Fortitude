
const expandButtons = document.querySelectorAll('.expand-button');

// Add event listeners to all expand buttons
expandButtons.forEach(button => {
    button.addEventListener('click', function () {
        // Get data attributes from the clicked button
        const title = this.getAttribute('data-title');
        const price = this.getAttribute('data-price');
        const image = this.getAttribute('data-image');

        // Populate modal with data
        document.getElementById('productModalLabel').textContent = title;
        document.getElementById('productModalPrice').textContent = price;
        document.getElementById('productModalImage').src = image;
    });
});