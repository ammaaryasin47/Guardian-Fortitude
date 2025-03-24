<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER-LEGAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICONS CDN -->
    <link href="../../CSS/Navbar&Footer.css" rel="stylesheet">
    <script>
     window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    const content = document.getElementById('content');

    // Hide the preloader
    preloader.classList.add('hidden');

    // Show the main content after a delay
    setTimeout(() => {
      preloader.style.display = 'none';
      content.style.display = 'block';
    }, 5000); // Match the transition duration
    });
    </script>
    <link href="../../CSS/REGISTER.css" rel="stylesheet">
    <!---- FAVICONS ---->
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">
</head>

<body>

    <div id="preloader">
      <img src="../IMAGES/HOME/Logo.png" alt="Loading...">
    </div>
    <!--------------------------------------------- NAVBAR ----------------------------------------------------->
   <x-navbar />

    <!------------------------------------------------------- BREADCRUMBS ----------------------------------------------------->
    <div class="breadcrumbs d-flex align-items-center">
        <div class="crumb fs-5  text-light text-center">
            <span>PERSONAL INFO</span>
        </div>

        <i class='bx bx-chevron-right  text-light fs-1'></i>

        <div class="crumb text-light fs-5 text-center">
            <span>DETAILS</span>
        </div>
        <i class='bx bx-chevron-right text-light fs-1'></i>

        <div class="crumb text-light  fs-5 text-center">
            <span>PREFERENCES</span>
        </div>
        <i class='bx bx-chevron-right text-light fs-1'></i>

        <div class="crumb crumb-active fs-5 text-center">
            <span>LEGAL COMPLAIANCE</span>
        </div>

        <i class='bx bx-chevron-right text-light fs-1'></i>

        <div class="crumb fs-5 text-light text-center">
            <span>CONFIRMATION</span>
        </div>

    </div>

    <!----------------------------------------------------- REGISTRATION -------------------------------------------------------------->

    <section class="vh-100 text-light" style=" background-color: #000;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://collider.com/wp-content/uploads/agents-of-shield-comic-con-poster.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                              <!-- ERROR -->
                              @if ($errors->any())
<div class="error-alert-container" style="display: none;">
    <div class="alert fade_error" style="position: relative; padding: 15px; border-radius: 4px; background-color: #ffdbdb; border: 1px solid #f95668;">
        <button class="close-btn" type="button" style="position: absolute; top: 5px; right: 10px; background: none; border: none; font-size: 20px; cursor: pointer; color: #f95668;">&times;</button>
        <strong style="display: block; color: #f95668; margin-bottom: 10px; text-transform: uppercase; font-size: 12px;">Error!</strong>
        <ul class="error-list" style="margin: 0; padding-left: 20px; list-style: none;">
            @foreach ($errors->all() as $error)
                <li style="color: #f95668; margin-bottom: 5px; font-size: 14px;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const errorContainer = document.querySelector('.error-alert-container');
    if (errorContainer) {
        // Show the error container
        errorContainer.style.display = 'block';
        
        // Position it fixed at top-right
        errorContainer.style.position = 'fixed';
        errorContainer.style.top = '20px';
        errorContainer.style.right = '20px';
        errorContainer.style.zIndex = '9999';
        errorContainer.style.maxWidth = '400px';
        
        // Close button functionality
        const closeBtn = errorContainer.querySelector('.close-btn');
        closeBtn.addEventListener('click', function() {
            errorContainer.style.display = 'none';
        });
        
        // Auto-hide after 5 seconds
        setTimeout(function() {
            errorContainer.style.display = 'none';
        }, 5000);
        
        // Optional: Keep visible while hovering
        errorContainer.addEventListener('mouseenter', function() {
            clearTimeout(autoHideTimer);
        });
        
        errorContainer.addEventListener('mouseleave', function() {
            autoHideTimer = setTimeout(function() {
                errorContainer.style.display = 'none';
            }, 5000);
        });
        
        let autoHideTimer = setTimeout(function() {
            errorContainer.style.display = 'none';
        }, 5000);
    }
});
</script>
@endif
    

                                    <form action="{{ route('register.storelegal') }}" method="POST">
                                    @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="../../IMAGES/HOME/Logo.png" style="width: 10rem;">
                                            <span class="fs-1">GUARDIAN FORTITUDE<br> SECURITY SERVICES</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">LEGAL COMPLAIANCE
                                            STATEMENT</h5>


                                        <div class="mb-4 px-5 fs-5">
                                            By Registering An Account With <strong
                                                style="color: maroon; font-size: 1.5rem;">GUARDIAN FORTITUDE</strong>,<br>
                                            You Acknowledge And Agree
                                            To Comply With All Applicable Laws, Regulations, And Policies Governing
                                            Security Services And Data Protection. You Confirm That The Information
                                            Provided During Registration Is Accurate, Complete, And Truthful To The Best
                                            Of Your Knowledge. Guardian Fortitude Reserves The Right To Verify The
                                            Provided Details And Suspend Or Terminate Accounts Found To Contain False Or
                                            Misleading Information. Additionally, You Consent To The Collection,
                                            Storage, And Processing Of Your Personal Data, Including Real-Time Location
                                            Information, In Accordance With Our Privacy Policy And Applicable Data
                                            Protection Laws. Unauthorized Use Of This Platform Is Strictly Prohibited
                                            And May Result In Legal Action. By Proceeding, You Agree To Adhere To These
                                            Terms And Conditions And Any Updates Thereto.
                                        </div>
                                        
                                         <!-- Checkbox for Agreement -->
                                         <div class="fs-2 text-center form-check mb-3">
        <input type="checkbox" class="form-check-input" id="agree_to_terms" name="agree_to_terms" value="1" required>
        <label class="form-check-label" for="agree_to_terms">I Agree to the Terms and Conditions</label>
    </div>

                                        <div class="pt-1 mb-4">
                                            <button type="submit" class="reg-btn btn btn-lg btn-block text-light"
                                                style="letter-spacing: 2px;" data-mdb-button-init data-mdb-ripple-init>
                                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                                </svg>
                                                <span>NEXT</span>
                                            </button>
                                        </div>

                                        <a href="#!" class="small text-muted fs-5">Terms & Conditions</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
   <x-footer />

    <script src="../../JS/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>