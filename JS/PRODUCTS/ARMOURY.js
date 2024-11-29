// Get all the tab items
const tabItems = document.querySelectorAll('.tabs-selector-item');

// Add click event listener to each tab item
tabItems.forEach(item => {
    item.addEventListener('click', () => {
        // Remove 'active' class from all tab items
        tabItems.forEach(tab => tab.classList.remove('active'));

        // Add 'active' class to the clicked tab item
        item.classList.add('active');
    });
});



// Get all tabs
const tabs = document.querySelectorAll('.tabs-selector-item');
// Get the sections for By Series and By Caliber
const bySeriesSection = document.getElementById('home-by-series');
const byCaliberSection = document.getElementById('home-by-caliber');

// Function to switch tabs
function switchTab(target) {
    // Hide both sections initially
    bySeriesSection.style.display = 'none';
    byCaliberSection.style.display = 'none';

    // Show the selected section based on the target
    if (target === '#home-by-series') {
        bySeriesSection.style.display = 'block';
        byCaliberSection.style.display = 'none';
    } else if (target === '#home-by-caliber') {
        byCaliberSection.style.display = 'block';
        bySeriesSection.style.display = 'none';
    }

    // Remove the active class from all tabs
    tabs.forEach(tab => tab.classList.remove('active'));

    // Add the active class to the clicked tab
    document.querySelector(`.tabs-selector-item[data-target="${target}"]`).classList.add('active');
}

// Add click event listener to each tab
tabs.forEach(tab => {
    tab.addEventListener('click', (event) => {
        const target = event.target.getAttribute('data-target');
        switchTab(target);
    });
});
