document.addEventListener('DOMContentLoaded', function () {
    // Get tabs and sections
    const tabs = document.querySelectorAll('.tabs-selector-item');
    const sections = {
        '#home-by-series': document.getElementById('home-by-series'),
        '#home-by-caliber': document.getElementById('home-by-caliber'),
    };

    // Function to switch tabs
    function switchTab(target) {
        // Hide all sections
        Object.values(sections).forEach(section => section.style.display = 'none');

        // Show the target section
        if (sections[target]) sections[target].style.display = target === '#home-by-series' ? 'grid' : 'block';

        // Update active class
        tabs.forEach(tab => tab.classList.remove('active'));
        document.querySelector(`.tabs-selector-item[data-target="${target}"]`).classList.add('active');
    }

    // Add click listeners to tabs
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-target');
            switchTab(target);
        });
    });

    // Set default view (optional)
    switchTab('#home-by-series');
});

document.addEventListener('DOMContentLoaded', function () {
    const caliberItems = document.querySelectorAll('.svg-item');
    const gunItems = document.querySelectorAll('#gun-list .col-sm-4');

    // Function to filter guns by caliber
    function filterGunsByCaliber(selectedCaliber) {
        gunItems.forEach(gun => {
            const gunCaliber = gun.getAttribute('data-caliber');
            gun.style.display = gunCaliber === selectedCaliber ? 'block' : 'none';
        });
    }

    // Add click listeners to caliber items
    caliberItems.forEach(item => {
        item.addEventListener('click', function () {
            const selectedCaliber = item.getAttribute('data-caliber');

            // Ensure the caliber section is visible
            document.getElementById('home-by-caliber').style.display = 'block';

            // Filter guns based on caliber
            filterGunsByCaliber(selectedCaliber);
        });
    });

    // Default state: show all guns
    filterGunsByCaliber('');
});




