document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM Loaded");

    // Ensure tabs work correctly
    const tabs = document.querySelectorAll('.tabs-selector-item');
    const sections = {
        '#home-by-series': document.getElementById('home-by-series'),
        '#home-by-caliber': document.getElementById('home-by-caliber'),
    };

    function switchTab(target) {
        Object.values(sections).forEach(section => section.style.display = 'none');
        if (sections[target]) sections[target].style.display = target === '#home-by-series' ? 'grid' : 'block';

        tabs.forEach(tab => tab.classList.remove('active'));
        document.querySelector(`.tabs-selector-item[data-target="${target}"]`).classList.add('active');
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-target');
            switchTab(target);
        });
    });

    switchTab('#home-by-series'); // Set default tab

    // FILTER BY CALIBER (SVG BUTTONS)
    setTimeout(() => {
        const filterButtons = document.querySelectorAll(".svg-item");
        console.log("Filter Buttons Found:", filterButtons.length);

        if (filterButtons.length === 0) {
            console.error("No filter buttons found! Ensure they exist in the HTML.");
            return;
        }

        const productCards = document.querySelectorAll(".card-container"); // Check selector

        filterButtons.forEach(button => {
            button.addEventListener("click", function () {
                const selectedCaliber = this.getAttribute("data-caliber");
                console.log("Clicked caliber:", selectedCaliber);

                productCards.forEach(card => {
                    const cardCaliber = card.getAttribute("data-caliber");

                    if (cardCaliber === selectedCaliber) {
                        card.style.display = "block"; // Ensure correct display style
                    } else {
                        card.style.display = "none";
                    }
                });
            });
        });

    }, 2000); // Wait 2 seconds before checking

    document.addEventListener("DOMContentLoaded", function () {
        console.log("DOM Loaded");
    
        document.querySelectorAll(".series-item").forEach(card => {
            card.addEventListener("click", function () {
                let category = this.querySelector("img").alt.trim().toUpperCase().replace(/\s+/g, "_");
                console.log("Clicked category:", category);
    
                let productCards = document.querySelectorAll(".card-container");
    
                if (productCards.length === 0) {
                    console.warn("⚠️ No product cards found! Check if they are loaded.");
                }
    
                productCards.forEach(card => {
                    let productCategory = card.getAttribute("data-category")?.trim().toUpperCase();
                    console.log(`Checking card: ${productCategory}, should match: ${category}`);
    
                    if (productCategory === category) {
                        console.log("✅ MATCH! Showing:", productCategory);
                        card.style.display = "block"; // Show matching
                    } else {
                        console.log("❌ NO MATCH! Hiding:", productCategory);
                        card.style.display = "none"; // Hide non-matching
                    }
                });
            });
        });
    });
    
    
    
});
