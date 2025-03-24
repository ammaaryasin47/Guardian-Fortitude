document.addEventListener('DOMContentLoaded', function () {
    const sidenav = document.getElementById('sidenav-1');
    const toggler = document.querySelector('.hamburger-icon');
    const closeIcon = document.getElementById('close-sidenav'); // Get the cross icon
    

    // Function to toggle sidenav
    function toggleSidenav() {
        const screenWidth = window.innerWidth;
        console.log("Screen Width:", screenWidth); // Debugging output

        if (screenWidth < 992) { // Enable for screens below 992px (including tablets)
            sidenav.classList.toggle('sidenav-open');
        } else {
            console.log("Sidenav functionality disabled on desktop.");
        }
    }

    // Function to close sidenav
    function closeSidenav() {
        sidenav.classList.remove('sidenav-open');
    }

    // Add event listener to the hamburger icon
    toggler.addEventListener('click', toggleSidenav);

    // Add event listener to the cross icon
    closeIcon.addEventListener('click', closeSidenav);

    // Close sidenav when resizing to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            sidenav.classList.remove('sidenav-open'); // Automatically close sidenav on desktop
        }
    });
});

