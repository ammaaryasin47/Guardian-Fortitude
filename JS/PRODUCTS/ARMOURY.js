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

function switchTab(target) {
    bySeriesSection.style.display = 'none';
    byCaliberSection.style.display = 'none';

    if (target === '#home-by-series') {
        bySeriesSection.style.display = 'grid'; 
        byCaliberSection.style.display = 'none';
    } else if (target === '#home-by-caliber') {
        byCaliberSection.style.display = 'block';
        bySeriesSection.style.display = 'none';
    }

    tabs.forEach(tab => tab.classList.remove('active'));

    document.querySelector(`.tabs-selector-item[data-target="${target}"]`).classList.add('active');
}

const ammunitionCategories = {
    ".22 LR": [".22 LR Gun 1", ".22 LR Gun 2"],
    "9 MM": ["M9 BERETTA", "SIG SAUER P226"],
    ".40 S&W": [".40 S&W Gun 1", ".40 S&W Gun 2"],
    ".45 ACP": [".45 ACP Gun 1", ".45 ACP Gun 2"],
    "5.56": ["5.56 Gun 1", "5.56 Gun 2"],
    "6 CM": ["6 CM Gun 1", "6 CM Gun 2"],
    ".308 Win": [".308 Win Gun 1", ".308 Win Gun 2"],
    "7 MM": ["7 MM Gun 1", "7 MM Gun 2"],
    "50 CAL": ["50 CAL Gun 1", "50 CAL Gun 2"]
};

function filterGunsByAmmunition(selectedAmmunition) {
    const gunCards = document.querySelectorAll('.col-sm-4');

    gunCards.forEach(card => {
        const gunName = card.querySelector('.fs-4').textContent.trim();
        
        if (ammunitionCategories[selectedAmmunition] && ammunitionCategories[selectedAmmunition].includes(gunName)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

document.querySelectorAll('.svg-item').forEach(item => {
    item.addEventListener('click', () => {
        const ammunitionType = item.querySelector('.svg-label').textContent.trim();

        document.getElementById('home-by-caliber').style.display = 'block';

        filterGunsByAmmunition(ammunitionType);
    });
});

document.addEventListener('DOMContentLoaded', () => {
    filterGunsByAmmunition('');
});

    document.addEventListener('DOMContentLoaded', function () {
        const caliberItems = document.querySelectorAll('.svg-item');

        const gunItems = document.querySelectorAll('#gun-list .col-sm-4');

        caliberItems.forEach(item => {
            item.addEventListener('click', function () {
                const selectedCaliber = item.getAttribute('data-caliber');

                gunItems.forEach(gun => {
                    const gunCaliber = gun.getAttribute('data-caliber');
                    
                    if (gunCaliber === selectedCaliber) {
                        gun.style.display = '';
                    } else {
                        gun.style.display = 'none';
                    }
                });
            });
        });
    });
