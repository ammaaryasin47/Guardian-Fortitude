<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICONS CDN -->
    <link href="../CSS/Navbar&Footer.css" rel="stylesheet">
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
    <link href="../CSS/LOGIN.css" rel="stylesheet">
    <!---- FAVICONS ---->
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }   
    </style>
</head>

<body>


    <!--------------------------------------------- NAVBAR ----------------------------------------------------->
    <nav style="background-color: black; position:sticky; top: 0; z-index: 10;" class=" text-light w-100">
        <div class="uppernav">
            <ul style="cursor:default;" class="fs-4 list-unstyled gap-5 d-flex ps-3 ">
                <li class="pe-3 border-light align-items-center" style="border-right: 1px dotted #fff;"> <i
                        class='bx bx-envelope'></i>
                    guardianfortitudeservice@gmail.com</li>
                <li class="pe-3 border-light align-items-center" style="border-right: 1px dotted #fff;"> <i
                        class='bx bx-phone-call'></i>
                    +91 1234567890</li>
                <li> <i class='bx bx-map'></i> Ahemdabad , Gujarat</li>
                <ul style="cursor: pointer;" class="justify-content-end list-unstyled gap-5 ms-auto d-flex pe-3 wrap">
                    <li><i class='bx bxl-meta'></i></li>
                    <li><i class='bx bxl-linkedin'></i></li>
                    <li><i class='bx bxl-github'></i></li>
                    <li><i class='bx bxl-instagram'></i></li>
                </ul>
            </ul>
        </div>
        <ul class="fs-4 list-unstyled d-flex">
            <a><img class="logo01" src="../../IMAGES/HOME/Logo.png" height="50px"></a>
            <!-- LOGO -->

            <div class="fs-1 hamburger-icon">
                <i class="bx bx-menu"></i>
            </div>

            <!-- Sidenav For Mobile -->
            <nav id="sidenav-1" data-mdb-sidenav-init class="sidenav" data-mdb-hidden="true">
            <i id="close-sidenav" style="padding:1.5rem 1.5rem;" class='text-light fs-1 bx bx-x'></i>
                <ul style=" list-style-type: none;" class="mt-5 sidenav-menu">
                    <a><img class="logo02" src="../../IMAGES/HOME/Logo.png" height="50px"></a>
                    <!-- LOGO -->

                    <li class="sidenav-item">
                        <a href="{{URL::to('/')}}" class="sidenav-link">
                            <span>HOME</span></a>
                    </li>

                    <li class="sidenav-item">
                        <a href="{{URL::to('/aboutus')}}" class="sidenav-link">
                            <span>ABOUT US</span></a>
                    </li>

                    <li class="sidenav-item">
                        <a href="{{URL::to('/services')}}" class="sidenav-link">
                            <span>SERVICES</span></a>
                    </li>

                    <li class="sidenav-item">
                        <a href="{{URL::to('/products')}}" class="sidenav-link">
                            <span>PRODUCTS</span></a>
                    </li>

                    <li class="sidenav-item">
                        <a href="{{URL::to('/contactus')}}" class="sidenav-link">
                            <span>CONTACT US</span></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{URL::to('/quote')}}" class="sidenav-link">
                            <span>QUOTE</span></a>
                    </li>

                    <li class="sidenav-item">
                        <a href="{{URL::to('/login')}}" class="sidenav-link">
                            <span>LOGIN</span></a>
                    </li>
                    <div class="mt-5">
                        <div class="mb-5">
                            <li class=" fs-5 pe-3 border-light align-items-center"
                                style="border-right: 1px dotted #fff;">
                                <i class='bx bx-envelope'></i>
                                guardianfortitude<p>service@gmail.com</p>
                            </li>
                            <li class="fs-5 pe-3 border-light align-items-center"
                                style="border-right: 1px dotted #fff;"> <i class='bx bx-phone-call'></i>
                                +91 1234567890</li>
                            <li class="fs-5"><i class='bx bx-map'></i> Ahemdabad , India</li>
                        </div>

                        <li class="sidenav-item d-flex">
                            <ul style="list-style-type: none;" class="justify-content-around d-flex flex-column">
                                <li><i class='bx bxl-meta'></i></li>
                                <li><i class='bx bxl-linkedin'></i></li>
                                <li><i class='bx bxl-github'></i></li>
                                <li><i class='bx bxl-instagram'></i></li>
                            </ul>
                        </li>
                    </div>
                </ul>
            </nav>

            <ul style="cursor: pointer;"
                class="navbtnul justify-content-end align-items-center list-unstyled gap-3 ms-auto d-flex pe-3 fs-2">
                <li><a href="{{URL::to('/')}}">HOME</a></li>
                <li><a href="{{URL::to('/aboutus')}}">ABOUT US</a></li>
                <li><a href="{{URL::to('/services')}}">SERVICES</a></li>
                <li><a href="{{URL::to('/products')}}">PRODUCTS</a></li>
                <li><a href="{{URL::to('/contactus')}}">CONTACT US</a></li>
                <li><a href="{{URL::to('/quote')}}">QUOTE</a></li>
                <li><a style="color: maroon; font-weight: 500;" href="{{URL::to('/login')}}">LOGIN</a></li>
            </ul>
        </ul>
    </nav>

    <!------------------------------------------------------------ PAYMENT ------------------------------------------------------->
    <<!-- ERROR -->
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

    <section class="vh-100 text-light" style="background-color: #000;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../IMAGES/PAYMENT/payment-banner.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div style="background:#000;" class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div style="background:#000;" class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" action="">
                                    @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <!-- <img src="../IMAGES/HOME/Logo.png" style="width: 10rem;"> -->
                                            <span class="fs-1">GUARDIAN FORTITUDE<br> SECURITY SERVICES</span>
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">CARD DETAILS</h5>

                                            <div style="background:#000; font-size:1.5rem;" class="form-group mb-3">
                                    <label class="text-light" for="name">CARD HOLDER'S NAME</label>
                                    <input style="background:#000; font-size:1.5rem;" type="text" name="name" id="name" class="text-light form-control" required>

                                    <label class="text-light mt-5" for="name">CARD NUMBER</label>
                                    <input style="background:#000; font-size:1.5rem;" pattern="\d{4} \d{4} \d{4} \d{4}" type="number" name="cardnumber" id="cardnumber" class="text-center text-light form-control" placeholder="XXXX XXXX XXXX XXXX" required>
                                     
                                    <div class="d-flex text-center mt-5 justify-content-center align-items-center">
                                        <label class="text-light">EXPIRATION DATE</label>
                                        <input style="background:#000; font-size:1.5rem; width:50%;" pattern="\d{2}/\d{2}"  type="text" name="expdate" id="expdate" class="text-center text-light form-control mx-5" placeholder="MM/DD" required>

                                        <label class="text-light">CVV</label>
                                        <input style="background:#000; font-size:1.5rem; width:50%" pattern="\d{3}" type="text" name="cvv" id="cvv" class="text-center text-light form-control mx-5" placeholder="XXX" required>
                                    </div>                                    
                                </div>

                                        <div class=" pt-1 mb-4">
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                style="letter-spacing: 2px;"
                                                class="login-btn btn btn-lg btn-block text-light" type="button">
                                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                                </svg>
                                                <span>PAY</span>
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

    <script>
        // Expiration Date Input
        const expDateInput = document.getElementById('expdate');
        expDateInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\D/g, ''); // Remove non-digits
            if (value.length > 2) {
                value = value.slice(0, 2) + '/' + value.slice(2, 4); // Add slash after MM
            }
            e.target.value = value;
        });

        // CVV Input
        const cvvInput = document.getElementById('cvv');
        cvvInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\D/g, ''); // Remove non-digits
            value = value.slice(0, 3); // Limit to 3 digits
            e.target.value = value;
        });

        // Form Submission Validation
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            const cardNumberPattern = /^\d{4} \d{4} \d{4} \d{4}$/;
            const expDatePattern = /^\d{2}\/\d{2}$/;
            const cvvPattern = /^\d{3}$/;

            if (!cardNumberPattern.test(cardNumberInput.value)) {
                alert('Please enter a valid card number in the format XXXX XXXX XXXX XXXX');
                e.preventDefault();
                return;
            }

            if (!expDatePattern.test(expDateInput.value)) {
                alert('Please enter a valid expiration date in the format MM/DD');
                e.preventDefault();
                return;
            }

            if (!cvvPattern.test(cvvInput.value)) {
                alert('Please enter a valid 3-digit CVV');
                e.preventDefault();
                return;
            }

            // If all validations pass, the form will be submitted
        });
    });

    </script>
<script src="../JS/navbar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->

</body>
</html>