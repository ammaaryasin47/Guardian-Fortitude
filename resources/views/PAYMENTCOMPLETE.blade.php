<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="../CSS/Navbar&Footer.css" rel="stylesheet">
    <title>guardianfortitude.com</title>
    <link href="../CSS/ABOUTUS.css" rel="stylesheet">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">
    <style>
        /* Preloader Styles */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000; /* Black background */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 9999; /* Ensure it's on top of everything */
        }

        /* Professional rotating circle animation */
        .loader {
            border: 4px solid rgba(255, 255, 255, 0.3); /* Light grey border */
            border-top: 4px solid maroon; /* Maroon color */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1.5s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Loading text */
        .loading-text {
            margin-top: 20px;
            font-size: 1.5rem;
            color: #fff;
            font-family: 'Barlow', sans-serif;
            font-weight: 300;
            letter-spacing: 1px;
        }

        /* Hide preloader when loaded */
        #preloader.hidden {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        /* Page Content Styles */
        #page-content {
            display: none; /* Hide content initially */
        }

        .links{
            color:#fff;
            text-decoration: none;
        }

        .links:hover{
            color: maroon;
        }
    </style>
    <script>
        // Wait for the page to fully load
        window.addEventListener('load', function () {
            // Simulate a loading delay (replace this with your actual loading logic)
            setTimeout(function () {
                // Add the 'hidden' class to the preloader for the fade-out effect
                document.getElementById('preloader').classList.add('hidden');

                // Show the page content
                document.getElementById('page-content').style.display = 'block';
            }, 3000); // 3-second delay for demonstration
        });
    </script>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
        <div class="loading-text">Payment Processing...</div>
    </div>

    <!-- Page Content -->
    <div id="page-content">
        <!-- Your Navbar and Page Content Here -->
        <nav style="background-color: black; position:sticky !important; top: 0; z-index: 10;" class=" text-light w-100">
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

                    <!-- Conditional Login/Profile Picture -->
                @auth
<li class="sidenav-item dropdown">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
        <img 
            src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('default-profile.png') }}" 
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
                    src="{{ Auth::user()->profile_picture ?? asset('default-profile.png') }}" 
                    alt="Profile Picture" 
                    class="rounded-circle" 
                    height="40px">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">PROFILE</a></li>
                    <li><a class="dropdown-item" href="{{ route('cart') }}">CART</a></li>
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">YOUR ORDERS</a></li>
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

        <div class="text-light text-center">
            <a><img class="logo01" src="../IMAGES/HOME/Logo.png" height="120px" style="margin-top: 14rem; margin-bottom: 2rem;"></a>
            <h1>THANK YOU FOR KEEPING PATIENCE ...</h1>
            <h2>YOUR ORDER HAS BEEN PLACED !</h2>
            <h2>CONTACT US REGARDING ANY QUERIES</h2>
            <br>
            <div class="text-center w-100">
                <p class="fs-2"><a class="links" href="{{URL::to('/contactus')}}">CONTACT US</a></p>
                <h1 class="fs-2"><a class="links" href="{{URL::to('/products')}}">CONTINUE SHOPPING</a></h1>
            </div>
        </div>

        <div class="position-relative">
            <x-footer />
        </div>
    </div>

    <script src="../JS/navbar.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>