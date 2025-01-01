
// Add event listener to all expand buttons
document.querySelectorAll('.expand-button').forEach(button => {
    button.addEventListener('click', function () {
        // Update modal content based on clicked button's data
        const title = this.getAttribute('data-title');
        const price = this.getAttribute('data-price');
        const image = this.getAttribute('data-image');

        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalPrice').textContent = price;
        document.getElementById('modalImage').src = image;
    });
});

