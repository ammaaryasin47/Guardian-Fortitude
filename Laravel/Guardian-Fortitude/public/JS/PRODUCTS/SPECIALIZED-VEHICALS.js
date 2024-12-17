document.addEventListener('DOMContentLoaded', () => {
    const expandButtons = document.querySelectorAll('.expand-button');
    const modalTitle = document.getElementById('productModalLabel');
    const modalImage = document.getElementById('productModalImage');
    const modalPrice = document.getElementById('productModalPrice');
    const modalCategory = document.getElementById('productModalCategory');

    expandButtons.forEach(button => {
        button.addEventListener('click', () => {
            const title = button.getAttribute('data-title');
            const price = button.getAttribute('data-price');
            const image = button.getAttribute('data-image');
            const category = button.getAttribute('data-category'); // Get the category attribute

            // Update modal content
            modalTitle.textContent = title;
            modalPrice.textContent = `Price: ${price}`;
            modalImage.src = image;

            // Set the category heading
            if (category === "Luxury") {
                modalCategory.innerHTML = "Exclusive Armored Vehicle That Perfectly Balances Luxury And Protection. <br><br> <strong>NOTE:</strong> The Images Provided Are For Illustrative Purposes And Depict The Design Of The Vehicle. They Should Not Be Used To Assess Protection Levels, Functionality, Or Other Performance Characteristics Of The Product.";
            }
             else if (category === "Tactical") {
                modalCategory.innerHTML = "Vehical Dedicated To Solely Serve Security Purposes. <br><br> <strong>NOTE:</strong> The Images Provided Are For Illustrative Purposes And Depict The Design Of The Vehicle. They Should Not Be Used To Assess Protection Levels, Functionality, Or Other Performance Characteristics Of The Product.";
            } else if (category === "Light Armored") {
                modalCategory.innerHTML = "Vehical Designed To Deal With Minor Damages. <br><br> <strong>NOTE:</strong> The Images Provided Are For Illustrative Purposes And Depict The Design Of The Vehicle. They Should Not Be Used To Assess Protection Levels, Functionality, Or Other Performance Characteristics Of The Product."
            }
            else {
                modalCategory.textContent = "";
            }
        });
    });
});
