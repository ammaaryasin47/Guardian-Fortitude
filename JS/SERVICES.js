function toggleDropdown(icon) {
    const li = icon.parentElement;  // The <li> element
    li.classList.toggle('dropdown-open');  // Toggle the open class
    
    // Optionally toggle the chevron direction (rotate 180 degrees)
    if (li.classList.contains('dropdown-open')) {
        icon.classList.add('bx-chevron-up');
        icon.classList.remove('bx-chevron-down');
    } else {
        icon.classList.add('bx-chevron-down');
        icon.classList.remove('bx-chevron-up');
    }
}