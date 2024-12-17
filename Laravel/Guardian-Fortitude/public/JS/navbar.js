document.addEventListener('DOMContentLoaded', function () {
    const sidenav = document.getElementById('sidenav-1');
    const toggler = document.querySelector('.hamburger-icon');

    // Function to check screen width and enable sidenav only for mobile
    function toggleSidenav() {
        const screenWidth = window.innerWidth;
        if (screenWidth < 768) { // Only enable for screens smaller than 768px
            if (sidenav.classList.contains('sidenav-open')) {
                sidenav.classList.remove('sidenav-open');
            } else {
                sidenav.classList.add('sidenav-open');
            }
        } else {
            console.log("Sidenav functionality disabled on desktop.");
        }
    }

    // Add event listener to the hamburger icon
    toggler.addEventListener('click', toggleSidenav);

    // Close sidenav on desktop resize if already open
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            sidenav.classList.remove('sidenav-open'); // Automatically close sidenav on desktop
        }
    });
});
