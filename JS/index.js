
document.addEventListener('DOMContentLoaded', function () {
    const sidenav = document.getElementById('sidenav-1');
    const toggler = document.querySelector('[data-mdb-toggle="sidenav"]');

    // Function to check screen width and enable sidenav only for mobile
    function toggleSidenav() {
        const screenWidth = window.innerWidth;
        if (screenWidth < 992) { // Only enable for screens smaller than 992px
            if (sidenav.classList.contains('sidenav-open')) {
                sidenav.classList.remove('sidenav-open');
            } else {
                sidenav.classList.add('sidenav-open');
            }
        } else {
            console.log("Sidenav functionality disabled on desktop.");
        }
    }

    // Add event listener to the button
    toggler.addEventListener('click', toggleSidenav);

    // Close sidenav on desktop resize if already open
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            sidenav.classList.remove('sidenav-open'); // Automatically close sidenav on desktop
        }
    });
});

