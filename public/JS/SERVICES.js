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

// Function to handle focus and blur events
function setupInputEffect(input) {
    input.addEventListener('focus', function () {
        input.style.width = '350px'; // Expand width on focus
    });

    input.addEventListener('blur', function () {
        if (input.value === '') {
            input.style.width = '100%'; // Reset width if input is empty
        }
    });
}

// Apply effect to all inputs
const inputs = document.querySelectorAll('.maroon-input');
inputs.forEach(input => setupInputEffect(input));
