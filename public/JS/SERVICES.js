function toggleDropdown(icon) {
    const li = icon.parentElement;  // The <li> element
    const dropdowns = document.querySelectorAll('.dropdown-content'); // Get all dropdowns

    // Close other open dropdowns
    dropdowns.forEach(dropdown => {
        const parentLi = dropdown.parentElement; // Get the parent <li>
        if (dropdown !== li.querySelector('.dropdown-content')) {
            parentLi.classList.remove('dropdown-open'); // Remove the open class from other dropdowns
            // Reset the chevron icon direction to down for closed dropdowns
            const otherIcon = parentLi.querySelector('.bx');
            otherIcon.classList.add('bx-chevron-down');
            otherIcon.classList.remove('bx-chevron-up');
        }
    });

    // Toggle the clicked dropdown
    li.classList.toggle('dropdown-open');  // Toggle the open class
    
    // Handle the chevron icon
    if (li.classList.contains('dropdown-open')) {
        icon.classList.add('bx-chevron-up');
        icon.classList.remove('bx-chevron-down');
    } else {
        icon.classList.add('bx-chevron-down');
        icon.classList.remove('bx-chevron-up');
    }
}

//<------------------------------------------- PLACEHOLDER
const nameInput = document.getElementById('nameinput');
const nameLabel = document.getElementById('name-label');
const contactInput = document.getElementById('contactinput');
const contactLabel = document.getElementById('contact-label');
const zipInput = document.getElementById('zipinput');
const zipLabel = document.getElementById('zip-label');
const locationInput = document.getElementById('locationinput');
const locationLabel = document.getElementById('location-label');

// Show the Name label when name input is focused
nameInput.addEventListener('focus', function () {
    nameLabel.classList.add('active'); // Show the Name label
    nameInput.setAttribute('placeholder', ''); // Remove placeholder for Name input
});

// Hide the Name label when name input loses focus, only if input is empty
nameInput.addEventListener('blur', function () {
    if (nameInput.value === '') {
        nameLabel.classList.remove('active'); // Hide the Name label
        nameInput.setAttribute('placeholder', 'NAME'); // Restore placeholder
    }
});

// Show the Contact label when contact input is focused
contactInput.addEventListener('focus', function () {
    contactLabel.classList.add('active'); // Show the Contact label
    contactInput.setAttribute('placeholder', ''); // Remove placeholder for Contact input
});

// Hide the Contact label when contact input loses focus, only if input is empty
contactInput.addEventListener('blur', function () {
    if (contactInput.value === '') {
        contactLabel.classList.remove('active'); // Hide the Contact label
        contactInput.setAttribute('placeholder', 'CONTACT'); // Restore placeholder
    }
});

// Show the Zip label when zip input is focused
zipInput.addEventListener('focus', function () {
    zipLabel.classList.add('active'); // Show the Zip label
    zipInput.setAttribute('placeholder', ''); // Remove placeholder for Zip input
});

// Hide the Zip label when zip input loses focus, only if input is empty
zipInput.addEventListener('blur', function () {
    if (zipInput.value === '') {
        zipLabel.classList.remove('active'); // Hide the Zip label
        zipInput.setAttribute('placeholder', 'ZIP'); // Restore placeholder
    }
});

// Show the Location label when location input is focused
locationInput.addEventListener('focus', function () {
    locationLabel.classList.add('active'); // Show the Location label
    locationInput.setAttribute('placeholder', ''); // Remove placeholder for Location input
});

// Hide the Location label when location input loses focus, only if input is empty
locationInput.addEventListener('blur', function () {
    if (locationInput.value === '') {
        locationLabel.classList.remove('active'); // Hide the Location label
        locationInput.setAttribute('placeholder', 'LOCATION'); // Restore placeholder
    }
});


