<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICONS CDN -->
    <link href="../CSS/Navbar&Footer.css" rel="stylesheet">
    <link href="../CSS/PRODUCTS.css" rel="stylesheet">
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
                <li><a style="color: maroon; font-weight: 500;" href="{{URL::to('/products')}}">PRODUCTS</a></li>
                <li><a href="{{URL::to('/contactus')}}">CONTACT US</a></li>
                <li><a href="{{URL::to('/quote')}}">QUOTE</a></li>
                <li><a href="{{URL::to('/login')}}">LOGIN</a></li>
            </ul>
        </ul>
    </nav>

    <!------------------------------------------------------------ BANNER ---------------------------------------------------------->

    <div class="products-banner">
        <img src="../IMAGES/PRODUCTS/Products-Banner.jpg" class="w-100 object-fit-contain">
        <h1 class="text-light">PRODUCTS</h1>
    </div>

    <div class="cardscontainer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card">
                    <div class="image-box card1">
                        <div class="text-container">
                            <span class="subtitle">SPECIALIZED VEHICALS<i class="fa fa-angle-double-down"></i></span>
                            <p>Unleash Unparalleled Protection And Power With Our State-Of-The-Art B6 Level Armored
                                Vehicals
                                .</p>
                        </div>
                        <div class="button-down">
                            <a href="{{URL::to('/products/specializedvehicals')}}">
                                <span>Know More</span>
                            </a>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card">
                    <div class="image-box card3">
                        <div class="text-container">
                            <span class="subtitle">PROTECTIVE GEARS<i class="fa fa-angle-double-down"></i></span>
                            <p>Stay Protected With Our Top-Of-The-Line Armored Vests And Helmets, Superior Comfort For
                                Ultimate Luxury .</p>
                        </div>
                        <div class="button-down">
                            <a href="{{URL::to('/products/protectivegears')}}">
                                <span>Know More</span>
                            </a>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card">
                    <div class="image-box card4">
                        <div class="text-container">
                            <span class="subtitle">ARMOURY<i class="fa fa-angle-double-down"></i></span>
                            <p>Discover Top-Tier Precision With Our Premium Selection Of Firearms At Armoury.</p>
                        </div>
                        <div class="button-down">
                            <a href="{{URL::to('/products/armoury')}}">
                                <span>Know more</span>
                            </a>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card">
                    <div class="image-box card2">
                        <div class="text-container">
                            <span class="subtitle">OPTICS<i class="fa fa-angle-double-down"></i></span>
                            <p>Dominate The Field With Our State-Of-The-Art Military Optics, Engineered For Durability
                                In
                                The Toughest Conditions.</p>
                        </div>
                        <div class="button-down">
                            <a href="{{URL::to('/products/optics')}}">
                                <span>Know more</span>
                            </a>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="">
                    <div class="card">
                        <div class="image-box card6">
                            <div class="text-container">
                                <span class="subtitle">GUIDES & BOOKS<i class="fa fa-angle-double-down"></i></span>
                                <p>Let The Pages Be Your Guide To New Worlds, Unlocking The Boundless Realms Of
                                    Knowledge.
                                </p>
                            </div>
                            <div class="button-down">
                                <a href="{{URL::to('/products/guides&books')}}">
                                    <span>Know more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="">
                    <div class="card">
                        <div class="image-box card9">
                            <div class="text-container">
                                <span class="subtitle">ACCESSORIES<i class="fa fa-angle-double-down"></i></span>
                                <p>Discover The Ultimate In Stealth And Concealment With Our Premium Camouflage
                                    Materials
                                </p>
                            </div>
                            <div class="button-down">
                                <a href="{{URL::to('/products/accessories')}}">
                                    <span>Know more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="">
                    <div class="card">
                        <div class="image-box card8">
                            <div class="text-container">
                                <span class="subtitle">UNMANNED VEHICALS<i class="fa fa-angle-double-down"></i></span>
                                <p>Experience The Future Of Mobility With Our Cutting-Edge Unmanned Vehicles !</p>
                            </div>
                            <div class="button-down">
                                <a href="{{URL::to('/products/unmannedvehicals')}}">
                                    <span>Know more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
    <x-footer />
    
    <script src="../JS/SERVICES.js"></script>
    <script src="../JS/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>