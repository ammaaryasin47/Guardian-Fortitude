<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICONS CDN -->
    <link href="../CSS/Navbar&Footer.css" rel="stylesheet">
    <link href="../CSS/CONTACTUS.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!---- FAVICONS ---->
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">
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
            <a><img class="logo01" src="../IMAGES/HOME/Logo.png" height="50px"></a>
            <!-- LOGO -->

            <div class="fs-1 hamburger-icon">
                <i class="bx bx-menu"></i>
            </div>


            <!-- Sidenav For Mobile -->
            <nav id="sidenav-1" data-mdb-sidenav-init class="sidenav" data-mdb-hidden="true">
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
                            <span >LOGIN</span></a>
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
                <li><a style="color: maroon; font-weight: 500;" href="{{URL::to('/contactus')}}">CONTACT US</a></li>
                <li><a href="{{URL::to('/quote')}}">QUOTE</a></li>
                <li><a href="{{URL::to('/login')}}">LOGIN</a></li>
            </ul>
        </ul>
    </nav>

    <!------------------------------------------ BANNER -------------------------------------------->
    <div class="contactus-banner">
        <img src="../IMAGES/CONTACT US/CONTACTUS-Banner.png" class="w-100 object-fit-contain">
        <h1 class="text-light">CONTACT US</h1>
    </div>

    <!--------------------------------------- CONTACT US -------------------------------------------------->

    <div class="contactus d-flex justify-content-around">
        <div class="address d-flex flex-column text-light text-center">
            <i style="font-size: 6rem;" class='pb-3 px-5 bx bx-map'></i>
            <h3>Ahemdabad , Gujarat India</h3>
        </div>
        <div class="email d-flex flex-column text-light text-center">
            <i style="font-size: 6rem;" class='pb-3 px-5 bx bx-envelope'></i>
            <h3>guardianfortitudeservice@gmail.com</h3>
        </div>
        <div class="phone d-flex flex-column text-light text-center">
            <i style="font-size: 6rem;" class='pb-3 px-5 bx bx-phone'></i>
            <h3>+91 123456789</h3>
        </div>
    </div>

    <!----------------------------------------- MAP --------------------------------------------------->
    <div class="mapandform d-flex mt-5 ">
        <div class="m-5" id="map"></div>

        <div class="contactform text-light w-100">
            <h2 class="fs-1 text-center">CONTACT FORM</h2>

            <h4 class="mt-5 fs-3 text-left pb-3">NAME</h4>
            <input
                style="color: #fff; font-size: 2rem; width: 70%; height: 2rem; border:none; border-bottom: 1px solid grey; background: transparent; outline: none;"
                type="text" name="contactus">

            <h4 class="mt-5 fs-3 text-left pb-3">CONTACT</h4>
            <input
                style="color: #fff; font-size: 2rem; width: 70%; height: 2rem; border:none; border-bottom: 1px solid grey; background: transparent; outline: none;"
                type="text" name="contactus">

            <h4 class="mt-5 fs-3 text-left pb-3">EMAIL ID</h4>
            <input
                style="color: #fff; font-size: 2rem; width: 70%; height: 2rem; border:none; border-bottom: 1px solid grey; background: transparent; outline: none;"
                type="text" name="contactus">

            <h4 class="mt-5 fs-3 text-left pb-3">MESSAGE</h4>
            <input
                style=" color: #fff; font-size: 2rem; width: 70%; height: 5rem; border:none; border-bottom: 1px solid grey; background: transparent; outline: none;"
                type="text" name="contactus">

        </div>
    </div>
    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
    <x-footer />

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="../JS/CONTACTUS.js"></script>
    <script src="../JS/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>