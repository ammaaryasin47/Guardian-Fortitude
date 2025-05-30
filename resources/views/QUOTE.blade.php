<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guardianforitude.com</title>
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
    <link href="../CSS/QUOTE.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!---- FAVICONS ---->
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init({
                publicKey: "mPtxfekfXl_jZzpZy",
            });
        })();
    </script>
</head>

<body>

    <div id="preloader">
      <img src="../IMAGES/HOME/Logo.png" alt="Loading...">
    </div>

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
            <a><img class="logo01" src="../IMAGES/HOME/Logo.png" height="50px"></a>
            <!-- LOGO -->

            <div class="fs-1 hamburger-icon">
                <i class="bx bx-menu"></i>
            </div>


            <!-- Sidenav For Mobile -->
            <nav id="sidenav-1" data-mdb-sidenav-init class="sidenav" data-mdb-hidden="true">
            <i id="close-sidenav" style="padding:1.5rem 1.5rem;" class='text-light fs-1 bx bx-x'></i>
                <ul style=" list-style-type: none;" class="mt-5 sidenav-menu">
                    <a><img class="logo02" src="../IMAGES/HOME/Logo.png" height="50px"></a>
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
                        <a href="{{URL::to('/productus')}}" class="sidenav-link">
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

                      <!-- Conditional Login/Profile Picture -->
                @auth
<li class="sidenav-item dropdown">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
    <img 
                    src="{{ Auth::user()->picture ? asset(Auth::user()->picture) : asset('default-profile.png') }}" 
                    alt="Profile Picture" 
                    class="rounded-circle" 
                    height="40px">
    </a>
    <ul class="fs-2 dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">PROFILE</a></li>
        <li><a class="dropdown-item" href="{{ route('cart') }}">CART</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">LOGOUT</button>
            </form>
        </li>
    </ul>
</li>
@else
<li class="sidenav-item">
    <a href="{{ URL::to('/login') }}" class="sidenav-link">LOGIN</a>
</li>
@endauth
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

            <!-- Conditional Login/Profile Picture -->
            @auth
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                    <img 
                        src="{{ Auth::user()->picture ? asset(Auth::user()->picture) : asset('default-profile.png') }}" 
                        alt="Profile Picture" 
                        class="rounded-circle" 
                        height="40px">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">PROFILE</a></li>
                    @if(Auth::user()->type === 'Admin')
                        <li><a class="dropdown-item" href="{{ route('admin.panel') }}">ADMIN</a></li>
                    @endif
                    <li><a class="dropdown-item" href="{{ route('cart') }}">CART</a></li>
                    <li><a class="dropdown-item" href="{{ route('orders') }}">YOUR ORDERS</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">LOGOUT</button>
                        </form>
                    </li>
                </ul>
            </li>
@else
            <li class="nav-item">
                <a href="{{URL::to('/login')}}">LOGIN</a>
            </li>
@endauth
        </ul>
        </ul>
    </nav>

    <body>

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
        <!------------------------------------------ BANNER -------------------------------------------->
        <div class="quote-banner">
            <img src="https://symphony.cdn.tambourine.com/noble-hospitality/media/noblehospitality-02-ourstory-01-header-image-6439a987de135.jpg"
                class="w-100 object-fit-contain">
            <h1 class="text-light">QUOTATION</h1>
            <h3 class="text-light ps-5">This Is A Complementary Quotation From &nbsp; <span
                    style="color:maroon; font-weight: 500;">
                    GUARDIAN FORTITUDE </span></h3>
        </div>

        <!-------------------------------------------------------- FREE QUOTATION FORM ------------------------------------------>
        <div class="quote-form-div mt-5 pt-5 text-light">
            <p class="quote-para">To The Management At &nbsp; <strong id="quote-para-span">GUARDIAN FORTITUDE
                    SECURITY SERVICES</strong>,</p>
            <p class="quote-para"> My Name Is <input onchange="autocopy" id="quote-para-name1" type="text"
                    placeholder="NAME" required></p>
            <p class="quote-para">Residing At <input type="text" placeholder="ADDRESS" required></p>
            <p class="quote-para"> I Am Reaching Out To Inquire About Your Security Services. </p>
            <p class="quote-para"> Could You Please Provide More Information About The Range Of Services You Offer? </p>
            <p class="quote-para"> I Would Like To Know More About
                <select class="quote-para-drop" required>
                    <option value="CyberSecurity">Cyber Security</option>
                    <option value="ArmedGuard">Armed Guards</option>
                    <option value="UnarmedGuard">Unarmed Guards</option>
                    <option value="EventSecurity">Event Security</option>
                    <option value="Survelliance">Survelliance & Monitoring</option>
                    <option value="ExecutiveProtection">Executive Protection</option>
                    <option value="Detective">Detective Services</option>
                    <option value="Consultation Services">Consultation Services</option>
                    <option value="Vehical Convoy">Vehical Convoy Service</option>
                    <option value="AssaultTeam">Special Assault Team</option>
                    <option value="Extraction">Extraction</option>
                    <option value="K9Unit">K9 Unit</option>
                </select>
            </p>
            <p class="quote-para"> Additionally, I Am Interested In Learning About Your Pricing Options And Any Special
                Packages Available. </p>
            <p class="quote-para"> You Can Reach Me At <input type="text" placeholder="CONTACT NO." required> </p>
            <p class="quote-para"> Or Via Email At <input type="email" placeholder="EMAIL" required> </p>
            <p class="quote-para"> Thank You For Your Time, And I Look Forward To Hearing From You Soon.</p>

            <p class="quote-para">Sincerely,</p>
            <p class="quote-para"><input id="quote-para-name2" type="text" placeholder="NAME" disabled></p>
            <p class="quote-para"><input type="checkbox" id="checkbox" required> I Hereby Agree To All The &nbsp;<a
                    href="#" class="Terms-Conditions">Terms & Conditions</a> &nbsp; By Guardian Fortitude
                Security Services</p>
            <a style="color: white;" href="#" class="quote-send"><i class='bx bx-send'></i></a>
        </div>

    </body>
    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
<x-footer />

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="../JS/QUOTE.js"></script>
    <script src="../JS/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>