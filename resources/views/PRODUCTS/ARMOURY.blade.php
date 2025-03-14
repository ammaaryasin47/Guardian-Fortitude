<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMOURY</title>
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
    <link href="../../CSS/PRODUCTS/ARMOURY.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
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

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <!--------------------------------------------- NAVBAR ----------------------------------------------------->
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

    <!--------------------------------------------------------------- BANNER --------------------------------------------------------->
    <div class="armoury-banner">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/049/495/071/small_2x/bullet-isolated-on-black-background-with-reflexion-rifle-bullets-close-up-on-black-back-cartridges-for-rifle-and-carbine-on-a-black-photo.jpg"
            class="w-100 object-fit-cover">
        <h1 class="text-light text-center">Armoury</h1>
    </div>

    <!------------------------------------------------------------- PARALLAX ----------------------------------------------------------------------->
    <div class="parallax-div">
        <div class="text-light">
            <h3>M4 CARBINE</h3>
            <p id="firstyear">Commemorating Our First
                Year Corporate Anniversary</p>
            <p id="discount">11% OFF</p>
            <p id="parallax-terms">Terms & Conditions Applied*
            </p>
        </div>
    </div>

    <div class="tabs-selector mt-5">
        <div class="tabs-selector-item active" data-target="#home-by-series">By Series</div>
        <div class="tabs-selector-item" data-target="#home-by-caliber">By Caliber</div>
    </div>

    <!-------------------------------------------------------------- SORTING SECTION ----------------------------------------------------------------->

    <div id="home-by-series" class="tab-content content-section">
        <div class="series-item" data-category="HUNTINGRIFLES">
            <img src="https://cdnb.artstation.com/p/assets/images/images/031/942/803/large/ryzin-art-screenshot096.jpg?1605033339"
                alt="PISTOLS">
            <h3 class="text-center">PISTOLS</h3>
        </div>
        <div class="series-item" data-category="HUNTINGRIFLES">
            <img src="https://cdna.artstation.com/p/assets/images/images/010/130/402/large/linus-scheffel-5.jpg?1522743897"
                alt="HUNTINGRIFLES">
            <h3 class="text-center">HUNTING RIFLES</h3>
        </div>
        <div class="series-item" data-category="SUB_MACHINE_GUNS">
            <img src="https://cdna.artstation.com/p/assets/images/images/075/080/848/large/egor-rzhevskii-ump-4k-right-min.jpg?1713714355"
                alt="SUB_MACHINE_GUNS">
            <h3 class="text-center">SUB MACHINE GUNS</h3>
        </div>
        <div class="series-item" data-category="SHOTGUNS">
            <img src="https://cdnb.artstation.com/p/assets/images/images/069/643/793/large/pascual-hernandez-pascualhernandez-remington-870-frontground.jpg?1700641488"
                alt="SHOTGUNS">
            <h3 class="text-center">SHOTGUNS</h3>
        </div>
        <div class="series-item" data-category="ASSAULT_RIFLES">
            <img src="https://cdnb.artstation.com/p/assets/images/images/024/195/279/large/florian-neumann-06-side.jpg?1581607642"
                alt="ASSAULT_RIFLES">
            <h3 class="text-center">ASSAULT RIFLES</h3>
        </div>
        <div class="series-item" data-category="SNIPER_RIFLES">
            <img src="https://cdnb.artstation.com/p/assets/images/images/032/325/659/large/laurentiu-nedelca-pms-akrapov-s4-artstation-010.jpg?1606131873"
                alt="SNIPER_RIFLES">
            <h3 class="text-center">SNIPER RIFLES</h3>
        </div>
        <div class="series-item" data-category="HUNTINGRIFLES">
            <img src="https://cdna.artstation.com/p/assets/images/images/043/750/398/large/james-shock-2-edited.jpg?1638179700"
                alt="LAUNCHERS">
            <h3 class="text-center">LAUNCHERS</h3>
        </div>
        <div class="series-item" data-category="MACHINE_GUNS">
            <img src="https://cdnb.artstation.com/p/assets/images/images/035/824/167/large/laurentiu-nedelca-pms-stal-51-0011.jpg?1615993846"
                alt="MACHINE_GUNS">
            <h3 class="text-center">MACHINE GUNS</h3>
        </div>
        <div class="series-item" data-category="GRENADES_&_IED">
            <img src="https://images2.alphacoders.com/108/1085880.jpg" alt="GRENADES_&_IED">
            <h3 class="text-center">GRENADES & IED</h3>
        </div>
        <div class="series-item" data-category="KNIVES">
            <img
                src="https://cdna.artstation.com/p/assets/images/images/051/947/416/large/jason-h-ka-bar-second.jpg?1658571531" alt="KNIVES">
            <h3 class="text-center">KNIVES</h3>
        </div>
    </div>

    <!------------------------------------------------------------ SVG SELECTOR ---------------------------------------------------------------------->

    <div id="home-by-caliber" class="container mt-4 content-section" style="display: none;">
        <div class="scroll-container">
            <div class="svg-item" data-caliber=".22LR"> <!-- .22 LR -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.4 415">
                    <path fill="#222"
                        d="M46.7,409.7h-1.5v-70.2h-.2v-18.3h-1c-1.8-17.9-6.6-26.9-12.5-26.9s-10.8,9-12.5,26.9h-1v18.3h-.2v70.2h-1c-.5,0-1,.4-1,1v1.6c0,.5.4,1,1,1h30.1c.5,0,1-.4,1-1v-1.6c-.2-.6-.6-1-1.2-1Z">
                    </path>
                </svg>
                <p class="svg-label">.22 LR</p>
            </div>

            <div class="svg-item" data-caliber="9MM"> <!-- 9 MM -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.4 415">
                    <path fill="#222"
                        d="M51.3,404.6v-2.9l2.4-5.1v-73.5h-1.3c0-26.1-8.8-44-14.5-47.2h0c-.4-.3-.8-.4-1.3-.5-1.6-.6-3.2-.9-4.9-.8-1.7,0-3.3.2-4.9.8-.4.1-.9.3-1.3.4v.2c-5.7,3.1-14.5,21-14.5,47.1h-1.3v73.5l2.4,5.1v2.9h-3.3v4.9s.5,2.6,16.7,3.4v.3c2.2,0,4.3,0,6.2-.1s3.9.1,6.2.1v-.3c16.3-.9,16.7-3.4,16.7-3.4v-4.9h-3.3Z">
                    </path>
                </svg>
                <p class="svg-label">9 MM</p>
            </div>

            <div class="svg-item" data-caliber=".40S&W"> <!-- .40 S&W  -->
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" version="1.1"
                    viewBox="0 0 63.4 415">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-1,
                            .cls-2 {
                                stroke-width: 0px;
                            }

                            .cls-2 {
                                fill: #222;
                            }
                        </style>
                    </defs>
                    <path class="cls-2"
                        d="M57.2,312.5h-2c0-22.1-8.1-32.3-9.4-33.8v-.2h-28.3v.2c-1.3,1.5-9.4,11.7-9.4,33.8h-2v81.9l4.9,4-.7,5h-4.1v6.6c2.7.7,5.5,1.3,8.3,1.8,0,0,11.1,1.6,16.4,1.5,5.3.1,18.1-1.5,18.1-1.5,2.8-.5,5.6-1,8.3-1.8v-6.6h-4.3l-.7-5,5-4v-81.9h-.1Z">
                    </path>
                    <rect class="cls-1" y="86" width="63.4" height="329"></rect>
                </svg>
                <p class="svg-label">.40 S&W </p>
            </div>

            <div class="svg-item" data-caliber=".45ACP"> <!-- .45 ACP -->
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" version="1.1"
                    viewBox="0 0 63.4 415">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-1,
                            .cls-2 {
                                stroke-width: 0px;
                            }

                            .cls-2 {
                                fill: #222;
                            }
                        </style>
                    </defs>
                    <path class="cls-2"
                        d="M59.5,409.3v-5.3h-4.3v-4.9l4.3-8.9v-85.9h-2.6c.2-29.4-9.4-39.6-18.2-42.8-2.2-.9-4.6-1.4-6.9-1.3-2.4-.1-4.8.4-6.9,1.3-8.8,3.2-18.3,13.4-18.2,42.8h-2.7v85.9l4.3,8.9v5h-4.3v5.3s-.9,2.5,18.5,3.5c0,0,6.5.4,9.2.3s9.2-.3,9.2-.3c19.5-1.1,18.6-3.6,18.6-3.6Z">
                    </path>
                    <rect class="cls-1" y="86" width="63.4" height="329"></rect>
                </svg>
                <p class="svg-label">.45 ACP</p>
            </div>

            <div class="svg-item" data-caliber="5.56"> <!-- 5.56 -->
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" version="1.1"
                    viewBox="0 0 63.4 415">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-1,
                            .cls-2 {
                                stroke-width: 0px;
                            }

                            .cls-2 {
                                fill: #222;
                            }
                        </style>
                    </defs>
                    <path class="cls-2"
                        d="M51.8,409.7v-4.6l-2.3-2,2.3-5.9v-151.6l-6.3-12.9v-24.4h-2c0-35-5.8-53-7.9-58.4l-.6-1.8h-6.6l-.7,1.8c-2.1,5.4-7.9,23.4-7.9,58.4h-2v24.4l-6.3,12.9v151.6l2.3,5.9-2.3,2v4.6s-.9,1.6,8.3,2.6c0,0,8.5.9,11.9.8,3.4.1,11.9-.8,11.9-.8,9.1-1,8.2-2.6,8.2-2.6Z">
                    </path>
                    <rect class="cls-1" y="86" width="63.4" height="329"></rect>
                </svg>
                <p class="svg-label">5.56</p>
            </div>

            <div class="svg-item" data-caliber="6CM"> <!-- 6 CM -->
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" version="1.1"
                    viewBox="0 0 63.4 415">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-1,
                            .cls-2 {
                                stroke-width: 0px;
                            }

                            .cls-2 {
                                fill: #222;
                            }
                        </style>
                    </defs>
                    <path class="cls-2"
                        d="M57.1,407.8l-4.4-4.7v-5.5l2.8-4.2v-153l-10.5-24.2c2.8-18.9,0-27.9,0-27.9,0-54.6-13.2-87.4-13.2-87.4h-.2c0,0-.2,0-.2,0,0,0-13.2,32.9-13.2,87.4,0,0-2.8,9.1,0,27.9l-10.3,24.1v153l2.8,4.2v5.5l-4.4,4.7s-2.6,4.3,21,5.2h0c1.6.1,3,.1,4.4.1h4.4c23.6-.9,21-5.2,21-5.2h0Z">
                    </path>
                    <rect class="cls-1" y="86" width="63.4" height="329"></rect>
                </svg>
                <p class="svg-label">6 CM</p>
            </div>

            <div class="svg-item" data-caliber=".308"> <!-- .308 Win -->
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" version="1.1"
                    viewBox="0 0 63.4 415">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-1,
                            .cls-2 {
                                stroke-width: 0px;
                            }

                            .cls-2 {
                                fill: #222;
                            }
                        </style>
                    </defs>
                    <path class="cls-2"
                        d="M58.8,406.8l-7.3-6,4-8.6v-163.7l-6-19.8c0-77.9-12.8-114.9-15.9-117.6l-.3-.2c-.9-1-2.4-1-3.4,0h-.1c0,0-.3.3-.3.3-3,2.6-15.9,39.6-15.9,117.6l-5.9,19.8v163.8l4,8.6-7.3,6s0,5.9,27.1,5.9,27.3-6,27.3-6Z">
                    </path>
                    <rect class="cls-1" y="86" width="63.4" height="329"></rect>
                </svg>
                <p class="svg-label">.308 Win</p>
            </div>

            <div class="svg-item" data-caliber="7MM"> <!-- 7 MM REM-->
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" version="1.1"
                    viewBox="0 0 63.4 415">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-1,
                            .cls-2 {
                                stroke-width: 0px;
                            }

                            .cls-2 {
                                fill: #222;
                            }
                        </style>
                    </defs>
                    <rect class="cls-1" y="86" width="63.4" height="329"></rect>
                    <path class="cls-2"
                        d="M58.8,406.8l-7.3-6,4-8.6v-201.7l-6-17.8c0-14.7-.5-33.1-1.2-45.3s0-.6,0-.9c-3.3-52.1-12.1-78.2-14.6-80.3l-.3-.2c-.9-1-2.4-1-3.4-.1h-.1c0,.1-.3.3-.3.3-2.4,2.1-11.2,27.8-14.6,79.4v1.3c-.8,12.4-1.3,31-1.3,45.9l-5.9,17.8v201.8l4,8.6-7.3,6s0,5.9,27.1,5.9,27.3-6,27.3-6h0Z">
                    </path>
                </svg>
                <p class="svg-label">7 MM</p>
            </div>

            <div class="svg-item" data-caliber="50CAL">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" version="1.1"
                    viewBox="0 0 63.4 415">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                            }

                            .cls-1,
                            .cls-2 {
                                stroke-width: 0px;
                            }

                            .cls-2 {
                                fill: #222;
                            }
                        </style>
                    </defs>
                    <rect class="cls-1" y="86" width="63.4" height="329"></rect>
                    <path class="cls-2"
                        d="M47,124C47,68.5,31.8,3.2,31.8,3.2h-.4s-15.2,65.4-15.2,120.8l-3.2,23.4-10.9,26.1v219l3.5,4.6v6l-5.5,5.1s-3.2,4.7,26.1,5.7v.2h11v-.3c29.4-1,26.1-5.7,26.1-5.7l-5.5-5.1v-6l3.5-4.6v-219l-11-26.1-3.3-23.3h0Z">
                    </path>
                </svg>
                <p class="svg-label">50 CAL.</p>
            </div>

        </div>
    </div>

    <!----------------------------------------------------------- PRODUCTS ---------------------------------------------------------------->

    <div class="container-fluid d-flex justify-content-center text-light">
        <div class="row mt-5 align-items-stretch" id="gun-list">

            <!--------------------------------------------------------- PISTOLS ------------------------------------------------------------------------>
            <div class="text-center mt-5">
                <div class="heading-container">
                    <div class="heading-large">PISTOLS</div>
                    <div class="heading-normal">PISTOLS</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="PISTOLS">
                <!-- M9 BERETTA -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/016/854/158/large/renderdock-studio-m9-01.jpg?1553718783"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M9 BERETTA</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="mb-0 fs-5">15 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.95 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Single Action<br>Double Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-M9BERETTA">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".45ACP" data-category="PISTOLS">
                <!-- COLT 1911 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/037/885/138/large/heavy-machinery-1.jpg?1621560428"
                        class="card-img-top" width="100%" style="transform: scaleX(-1);">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">COLT 1911</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="mb-0">7 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">1.1 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Single Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-COLT1911">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".40S&W" data-category="PISTOLS">
                <!-- GLOCK 17 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/016/497/851/large/renderdock-studio-glock17-3.jpg?1552392649"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GLOCK 17</small>
                            <h6 class="fs-4 text-center">&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">17 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.63 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Single Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-GLOCK17">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="PISTOLS">
                <!-- GLOCK 19X -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/016/523/154/large/renderdock-studio-glock17-6.jpg?1552487107"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GLOCK 19X </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">17 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.62 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Double Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-GLOCK19X">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="PISTOLS">
                <!-- GLOCK 19 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/073/294/159/large/forge-studios-g19-03.jpg?1709316837"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GLOCK 19 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">15 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.61 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Single Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-GLOCK19">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".40S&W" data-category="PISTOLS">
                <!-- GLOCK 22 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/028/004/730/large/carlos-morales-empire-3d-std-glock22-01b.jpg?1593196387"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GLOCK 22 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">17 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.64 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Single Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-GLOCK22">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="PISTOLS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/024/091/775/large/shanji-wang-g34-render-2.jpg?1581298047"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GLOCK 34 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">17 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.65 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Single Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-GLOCK34">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="PISTOLS">
                <!-- SIG SAUER P226 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/041/832/444/large/joris-chambard-p226-camera-1-002.jpg?1632829967"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SIG SAUER P226</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">12 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.96 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Single Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-SIGP226">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="PISTOLS">
                <!-- SIG SAUER P320 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/063/071/727/large/zhabin-yuri-16.jpg?1684659807"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SIG SAUER P320 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">15 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.63 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Double Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-SIGP320">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="PISTOLS">
                <!-- SIG SAUER P365 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/066/363/709/large/igor-antonov-closedcase.jpg?1692723049"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SIG SAUER P365 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">12 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Double Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-SIGP365">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
                <!-- SIG SAUER P322 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/060/765/108/large/niraj-sahgel-1-013.jpg?1679290256"
                         class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SIG SAUER P322 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">20 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.48 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Single Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-SIGP322">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="PISTOLS">
                <!-- SIG SAUER P228 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/029/317/812/large/david-oroian-0.jpg?1597158574"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SIG SAUER P228 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">13 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">0.73 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Double Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Pstl-SIGP228">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <img src="../../IMAGES/1_00000 (1).jpg">

<!---------------------------------------------- HUNTING RIFLES ---------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">HUNTING RIFLES</div>
                <div class="heading-normal">HUNTING RIFLES</div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="HUNTINGRIFLES">
                <!-- ZASTAVA 9.3 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/052/989/163/large/artem-nasyrov-1.jpg?1661170503"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">WINCHESTER 70 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.06 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-HuntRif-WINCHESTER70">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="HUNTINGRIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/037/324/030/large/sheila-hernanz-rifle-11.jpg?1620091356"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SAVAGE 99</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">4.99 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Lever Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-HuntRif-SAVAGE99">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="HUNTINGRIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/052/251/938/large/paddingsons-outsourcing-argocomfortech-5.jpg?1659352972"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M40A5</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">10 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">6.57 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-HuntRif-M40A5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="HUNTINGRIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/065/938/295/large/wanis-kazi-03-1-pp.jpg?1691604687"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> ZASTAVA 9.3 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-HuntRif-ZASTAVA93">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="HUNTINGRIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/014/185/133/large/joshua-abbott-8.jpg?1542849472"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">HOLLAND & HOLLAND </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">4.8 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-HuntRif-HOLLANDHOLLAND">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="HUNTINGRIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/077/515/427/large/ryland-scott-howahr-ue-neutral-renderv01.jpg?1719645588"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">HOWA 1500 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">10 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">4.2 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-HuntRif-HOWA1500">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="HUNTINGRIFLES">
                <!-- TOZ 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/043/728/865/large/luminiferous_slavoch-toz-34-art-2.jpg?1638120893"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">TOZ-34 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">2 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.3 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Break Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-HuntRif-TOZ-34">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="HUNTINGRIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/032/036/716/large/bastien-blanch-sauer-render-4.jpg?1605286506"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SAUER 101 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-HuntRif-SAUER101">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

 <!---------------------------------------------------- SUB MACHINE GUNS ----------------------------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">SUB-MACHINE GUNS</div>
                <div class="heading-normal">SMG</div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/075/391/806/large/laurentiun-sow-mp9-006.jpg?1714466659"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> MP-9 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-MP-9">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/047/110/807/large/vladislav-babiak-main.jpg?1646820274"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> RHN-9 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-RHN-9">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".45ACP" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/077/318/398/large/barkin-eraslan-be-lwrc-9.jpg?1719161863"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SMG-45 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-SMG-45">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/038/185/817/large/jinyi-zhu-zj01-15.jpg?1622425072"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> ZJ01 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-ZJ01">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/017/502/931/large/jonathan-norden-new-render7.jpg?1556230289"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> P90 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-P90">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/009/780/566/large/linus-scheffel-2.jpg?1520872244"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> TOMMY </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-TOMMY">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/051/088/058/large/sam-white-1.jpg?1656429947"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> ADT CENTAUR </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-ADT-CENTAUR">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".45ACP" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/014/486/737/large/sviatoslav-chervatiuk-3-1.jpg?1544138779"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> LWRC-45 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-LWRC-45">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/078/529/115/large/laurentiun-sow-kv-showcase-014.jpg?1722359554"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SOW VECTOR </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-SOW-VECTOR">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/011/742/678/large/ben-armstrong-kh9-alternate-01.jpg?1531173726"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> KH9 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-KH9">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/032/635/884/large/laurentiu-nedelca-pms-mac-10-v2-003.jpg?1607013910"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> MAC-10 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-MAC-10">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="SMG">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/068/328/445/large/stefan-engdahl-render06.jpg?1697550040"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> PPK-42 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SMG-PPK-42">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

<!------------------------------------------------- SHOTGUNS -------------------------------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">SHOTGUNS</div>
                <div class="heading-normal">SHOTGUNS</div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="12GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/030/503/648/large/ryzin-art-screenshot005.jpg?1600801744"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> DOUBLE BARELL </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-DOUBLEBARELL">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="16GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/071/149/895/large/artem-n-anton-huleha-benelli-m4-1.jpg?1704558641"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> BENELI M4 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-BENELI-M4">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="12GAUGE" data-category="SHOTGUNS">
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/035/815/734/large/amc-ro-studio-render-6.jpg?1615976732"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> MOSSBERG 590M </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-MOSSBERG-590M">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="10GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/069/643/793/large/pascual-hernandez-pascualhernandez-remington-870-frontground.jpg?1700641488"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> REMINGTOM 870 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-REMINGTON-870">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="16GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/033/584/731/large/alexandru-voinea-studio-1.jpg?1610020632"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SIX12 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-SIX12">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="12GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/068/328/445/large/stefan-engdahl-render06.jpg?1697550040"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> PPK-42 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-PPK-42">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="12GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/054/264/885/large/ben-bolton-cs-039.jpg?1664149233"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> Bolton-BSS </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-BOLTON-BSS">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber="12GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/032/738/658/large/laurentiu-nedelca-pms-m12-006.jpg?1607341003"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> PMS M12 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">5 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">2.5 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Bolt Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-PMS-M12">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="12GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/016/207/242/large/johann-william-loffler-win1895-3.jpg?1551305389"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> WINCHESTER 1895 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 text-muted">Magazine Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">4 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">4.1 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Lever Action</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-WINCHESTER-1895">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="12GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/019/878/478/large/carlos-morales-sm-shotgun-01f.jpg?1565379313"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> REMINGTON 870 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-WINCHESTER-1895">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="16GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/015/032/659/large/carlos-morales-cmgs-dp12-00.jpg?1546801438"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> DP12 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">14 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">4 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-DP12">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="12GAUGE" data-category="SHOTGUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/039/699/066/large/game-weapons-spas12-main-camera.jpg?1626687138"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> FRANCHI SPAS12 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Shotgun-FRANCHI-SPAS12">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


<!------------------------------------------------- ASSAULT RIFLES -------------------------------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">ASSAULT RIFLES</div>
                <div class="heading-normal">ASSAULT RIFLES</div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/038/298/795/large/emiel-sleegers-gun-cama.jpg?1622709260"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> AR15</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-AR15">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/063/012/355/large/vladyslav-narozhnyi-4-1.jpg?1684483766"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SCAR-L </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-SCAR-L">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/026/080/777/large/alvaro-fuster-plano01-2.jpg?1587825005"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">AK-74</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-AK-74">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/023/908/824/large/ohle-mathiebe-asd.jpg?1580739750"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">OZ-14 GROZA</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-OZ-14-GROZA">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/051/522/759/large/games-artist-side-view-a-main-camera-side-render-fullquality.jpg?1657528828"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> M4</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-M4">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/007/790/849/large/patrick-benai-screenshot003.jpg?1508520605"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M16A4</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-M16A4">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/004/870/763/large/hong-kim-type-95-2.jpg?1486890963"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> TYPE-95</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-Type95">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/032/564/734/large/mattias-h-mattias-h-sako-rk-95tp-1.jpg?1606821646"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SAKO RK 95 TP</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-SakoRK95TP">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/074/103/752/large/parisa-mohammadsadeghi-untitled-001.jpg?1711233352"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> CZ 805 BREN A1 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-CZ805BREN">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/083/105/797/large/pavel-proskurin-08.jpg?1734780815"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">KAT-4</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-KAT4">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/009/411/894/large/sergejs-karpovs-saiga12-xts-render-3k-fn1.jpg?1518833428"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SAIGA 12 XTS</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-Saiga12XTS">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="ASSAULT_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/028/156/669/large/philipp-neumann-side.jpg?1593635121"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> MDR</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-AsltRif-MDR">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


<!------------------------------------------------- SNIPER RIFLES -------------------------------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">SNIPER RIFLES</div>
                <div class="heading-normal">SNIPER RIFLES</div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/058/455/110/large/dreamerz-lab-1.jpg?1674190194"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> THE BARRETT (MRAD) MK22</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-BarrettMRADMK22">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".308" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/020/398/178/large/jinyi-zhu-asset.jpg?1567617654"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SNOW OWL </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-SnowOwl">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/009/881/160/large/airam-hernandez-9.jpg?1521393280"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SPEED MODELING - M40</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-SpeedModelingM40">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber=".308" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/075/542/400/large/vladyslav-narozhnyi-2.jpg?1714828450"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> REMINTON R11</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-RemintonR11">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="50CAL" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/083/453/255/large/ed-zukan-untitled-viewport-006.jpg?1735988933"
                        style="transform:scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1"> SOLOTHURN S18</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-DVL10M2Urbana">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="9MM" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/031/003/458/large/matthieu-labrie-vss-side-1.jpg?1602282112"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">VSS VINTOREZ</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-VSSVINTOREZ">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="50CAL" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/032/985/571/large/ryzin-art-tbrender135.jpg?1608061890"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">AWM </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-AWM">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="50CAL" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/009/556/217/large/madushan-wenuranga-m82-01.jpg?1519659409"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">BARRETT M82 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-BARRETTM82">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/032/325/342/large/laurentiu-nedelca-pms-akrapov-s4-artstation-001.jpg?1606131100"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">PMS AKRAPOV S4</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-PMSAKRAPOV-S4">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/029/739/346/large/zachary-shertz-screenshot176.jpg?1598486375"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">PSG-1 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-PSG1">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/042/554/882/large/david-avakov-base-right.jpg?1634820191"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">MCMILLAN TAC-50 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-MCMILLANTAC-50">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>          

            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="SNIPER_RIFLES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/014/728/241/large/peetu-gronholm-trg42.jpg?1545198043"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SAKO TRG 42</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-SnprRif-SAKOTRG-42">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


<!------------------------------------------------- LAUNCHERS -------------------------------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">LAUNCHERS</div>
                <div class="heading-normal">LAUNCHERS</div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/022/975/710/large/stefan-engdahl-rend3.jpg?1577552097"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">RGM-40 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-RGM-40">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/082/794/963/large/canoe-render-003-logo.jpg?1733935435"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">TOW</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-TOW">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/043/651/684/large/james-mainwaring-m320-06.jpg?1637867742"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M320 GRENADE LAUNCHER
                            </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-M320">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/075/667/816/large/oliver-kay-fim92j-05.jpg?1715135077"
                       style="transform:scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">FIM 92J STINGER </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-FIM-92J">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/001/759/636/large/waqas-iqbal-missilelauncher-01.jpg?1452316612"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">RENEGADE X </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-RenegadeX">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/081/207/922/large/anton-kunstmann-tbrender-camera-3.jpg?1729658616"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M79 GRENADE LAUNCHER</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-M79">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/028/341/786/large/alexandru-voinea-2.jpg?1594196392"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">MGL GRL</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-MGL-GRL">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/060/861/682/large/keal-team-shot-1.jpg?1679481919"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M203 M4 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-M203-M4">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/039/317/318/large/diptiranjan-panigrahi-rpg-5.jpg?1625567421"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">RPG LAUNCHER</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-RPG-LAUNCHER">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/035/073/849/large/jona-pahl-05.jpg?1614032492"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GL06 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-GL06">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/024/644/401/large/andrey-nepryahin-screenshot000.jpg?1583087796"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">STEAMPUNK</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-STEAMPUNK">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="LAUNCHERS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/039/049/886/large/simon-mercuzot-shot01.jpg?1624815562"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GP-25</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Lnchr-GP-25">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



<!------------------------------------------------- MACHINE GUNS -------------------------------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">MACHINE GUNS</div>
                <div class="heading-normal">MACHINE GUNS</div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="6CM" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/067/302/959/large/yahli-mendler-full-right-front.jpg?1695055452"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">NSV </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-NSV">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="6CM" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/030/906/233/large/ryzin-art-screenshot004.jpg?1602009117"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">BREN LMG </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-BRENLMG">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="6CM" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/035/824/176/large/laurentiu-nedelca-pms-stal-51-0017.jpg?1615994607"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">PMS STAL-51 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-PMSSTAL51">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="50CAL" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/016/368/578/large/tim-shumaker-3.jpg?1551896691"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">MA DEUCE
                            </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-MADEUCE">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="50CAL" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/024/711/350/large/slava-kireev-render8.jpg?1583284348"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">LEWIS MG</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-LEWISMG">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/080/931/942/large/3dma-studios-saw-pb-01.jpg?1728933712"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M249 SAW
                            </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-M249SAW">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/073/818/901/large/deepak-gollar-dp-28-02.jpg?1710536645"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">DP 28
                            </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-DP28">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="50CAL" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/032/692/467/large/kameron-brooks-u100-2.jpg?1607185687"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">ULTIMAX 100 LMG

                            </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-Ultimax100">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="7MM" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/071/609/751/large/artem-n-anton-huleha-m240d-2.jpg?1705538196"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M-240 </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-M240">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="6CM" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/031/404/822/large/akash-bhatt-gatling-close.jpg?1603523410"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GATLING GUN </small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-Gatling">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="5.56" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/008/557/367/large/pawin-changkiendee-pawin-changkiendee-minimimk3-7.jpg?1513545241"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">MINIMI MK3</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-MinimiMk3">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="50CAL" data-category="MACHINE_GUNS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/059/114/297/large/kevuru-games-m2-browning-50cal-02.jpg?1675686492"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M2 BROWNING</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-MchnGun-M2Browning">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


<!------------------------------------------------- GRENADES & IED-------------------------------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">GRENADES & IED</div>
                <div class="heading-normal">GRENADES & IED</div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/081/831/355/large/lorenzo-pace-1a.jpg?1731354533"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">HAND GRENADE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0"> - </h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-HANDGRENADE">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/056/277/092/large/jason-h-m48-fourth-new.jpg?1668861580"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">FLASHBANG</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-FLASHBANG">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/052/385/505/large/ted-manske-tnt-001.jpg?1659665510"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">IED</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-IED">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/056/277/269/large/jason-h-smoke-grenade-diagonal2.jpg?1668861933"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">SMOKE GRENADE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-SMOKEGRENADE">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/064/474/107/large/fan-cheng-tbrender-main-camera.jpg?1688002790"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">C4</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-C4">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/030/533/330/large/damith-galhena-2.jpg?1600884258"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">ANTI TANK MINE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-ANTITANKMINE">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/016/076/593/large/declan-sheehan-sub-02.jpg?1550791446"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">PINEAPPLE GRENADE MK2</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-PINEAPPLEGRENADE">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/035/152/499/large/vladislav-fjh-gavrilin-shot0.jpg?1614223264"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M67 FRAGMENTATION GRENADE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-M67">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/023/096/827/large/marwan-ammar-german-m24-stick-grenade-anti-tank-bundle-wwii-marwan-ammar-04.jpg?1578071224"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">GERMAN M24 STICK</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-M24">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/034/049/943/large/andre-foster-stun-grenade.jpg?1611255790"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">12/29 STUN</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-1229STUN">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/063/628/966/large/sidharth-s-grenaderendermain1.jpg?1685987897"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M26 GRENADE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-M26">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="GRENADES_&_IED">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/049/223/734/large/somdatta-das-grenade-1.jpg?1651997929"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">MKV GAS</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Grnd-MKVGAS">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>





            <!-------------------------------------------------KNIVES-------------------------------------------------------------------------->

            <div class="heading-container text-center">
                <div class="heading-large">KNIVES</div>
                <div class="heading-normal">KNIVES</div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/marketplace/presentation_assets/001/760/002/large/file.jpg?1654356909"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">COMBAT KUKRI</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-COMBATKUKRI">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/026/197/952/large/himanshu-sandhu-5k.jpg?1588155323"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">KARAMBIT</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-KARAMBIT">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/marketplace/presentation_assets/001/170/070/large/file.jpg?1629957542"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">M48 KUKRI</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-M48KUKRI">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/002/706/618/large/billy-lundevall-cold-steel-recon-1.jpg?1464796870"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">TANTO</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-TANTO">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/034/982/294/large/sean-o-brien-renders1.jpg?1613765173"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">BUTTERFLY KNIFE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-BUTTERFLY">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/077/133/282/large/sergey-nikulshin-sergey-nikulshin-2.jpg?1718686307"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">PUSH DAGGER</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-PUSHDAGGER">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/031/660/680/large/kirill-sp-8-5.jpg?1604253408"
                         class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">MACHETE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-MACHETE">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/025/184/491/large/brx-boyles-featherblade-01.jpg?1584938761"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">FEATHER BLADE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-FEATHERBLADE">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/079/003/761/large/james-bolton-moderngyutorendersfinal-4.jpg?1723679978"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">MODERN GYUTO</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-MODERNGYUTO">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/044/531/558/large/mike-kennedy-moonsplinter-2021-1.jpg?1640278852"
                        class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">MOON SPLINTER</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-MOONSPLINTER">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/072/596/515/large/wanis-kazi-2.jpg?1707760452"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">HUNTING KNIFE</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-HUNTINGKNIFE">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6 card-container" data-caliber="PROJECTILE" data-category="KNIVES">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdna.artstation.com/p/assets/images/images/072/895/272/large/reviron-img-9.jpg?1708449581"
                         class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">TOMHAWK</small>
                            <h6>&dollar;22,495&ast;</h6>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="d-flex flex-row justify-content-between px-3 pb-4">
                            <div class="d-flex flex-column"><span class="fs-5 tRemington 870ext-muted">Magazine
                                    Cap.</span>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class=" fs-5 mb-0">8 Rounds</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-3 mid">
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-1">Weight</small>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column ml-1 fs-5">3.6 kg</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column"><small class="fs-5 text-muted mb-2">Action
                                    Type</small>
                                <div class="d-flex flex-row">
                                    <h6 class="fs-5">Pump Action Type</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-center mx-3 mt-3 mb-2">
                                <button type="button" class="btn btn-danger btn-block fs-5 add-to-cart-button" data-product-id="Armoury-Knife-TOMHAWK">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
    <footer class="footer mt-5">
        <div class="footer-row">

            <div class="footer-col"> <!-- Logo And Tagline -->
                <img src="../../IMAGES/HOME/Logo.png" id="footer-logo" alt="logo" width="150px" height="150px">
                <p>Fortifying The Present, </p>
                <p>Safeguarding The Future ...</p>
                <p>We Are The Saviours ,</p>
                <p>The Last Hope , </p>
                <p>We Are
                <h3 class="text-align-center">THE GUARDIAN FORTITUDE</h3>
                </p>
            </div>

            <div class="footer-col"> <!--OFFICE ADDRESS & CONTACT -->
                <h3 style="border-bottom: 1px solid maroon;">OFFICE <div><span></span></div>
                </h3>
                <p>D-Fuzer HQ Security Wing ,</p>
                <p>99th Avenue,</p>
                <p>Ahmedabad , INDIA </p>
                <p class="footer-email-id"><i class='bx bx-envelope'></i>&nbsp;guardianfortitudeservice@gmail.com</p>
                <h4>+91 1234567890</h4>
            </div>

            <div class="footer-col"> <!-- Nav Pages -->
                <h3 style="border-bottom: 1px solid maroon;">PAGES<div><span></span></div>
                </h3>
                <ul>
                    <li><a href="../../HTML/INDEX.html">Home</a></li>
                    <li><a href="../../HTML/ABOUTUS.html">About Us</a></li>
                    <li><a href="../../HTML/SERVICES.html">Services</a></li>
                    <li><a href="../../HTML/PRODUCTS.html">Products</a></li>
                    <li><a href="../../HTML/CONTACT US.html">Contact Us</a></li>
                    <li><a href="../../HTML/QUOTE.html">Quote</a></li>
                    <li><a href="../../HTML/LOGIN.html">Login</a></li>
                </ul>
            </div>

            <div class="footer-col"> <!-- Email Form For Latest Upadates -->
                <h3 style="border-bottom: 1px solid maroon;">TO RECIEVE OUR LATEST UPDATES<div>
                        <span></span>
                    </div>
                </h3>
                <form class="footer-form">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" placeholder="Enter Your Email ID" required>
                    <button type="submit"><i class='bx bxs-arrow-from-left'></i></i></i></button>
                </form>

                <div class="social-icons"> <!-- Social Media Icons -->
                    <a class='bx bxl-instagram' href="#"></a>
                    <a class='bx bxl-twitter' href="#"></a>
                    <a class='bx bxl-reddit' href="#"></a>
                    <a class='bx bxl-whatsapp' href="#"></a>
                </div>

            </div>

        </div>

        <hr>

        <p style="font-family: 'Barlow',sans-serif;" class="copyright">Guardian Fortitude Security
            Services
            &copy;
            2024
            -
            All Rights Reserved</p>
        <p style="font-family: 'Barlow',sans-serif;" class="copyright">Guardian Fortitude Security
            Services Is A
            Registered
            Trademark Under The D-Fuzer
            Army&#174;</p>

    </footer>
    <script>
    document.querySelectorAll(".series-item").forEach(card => {
    card.addEventListener("click", function () {
        const category = this.getAttribute("data-category") || this.querySelector("img").alt;
        console.log("Clicked category:", category);
        });
    });

    </script>
    <script>
    document.querySelectorAll(".svg-item").forEach(button => {
        button.addEventListener("click", function () {
            console.log("Clicked:", this.getAttribute("data-caliber"));
        });
    });
    </script>
    <script>
	document.addEventListener("DOMContentLoaded", function () {
		console.log("DOM fully loaded and parsed");
		let buttons = document.querySelectorAll(".add-to-cart-button");
		console.log("Found buttons:", buttons.length);
		if (buttons.length === 0) {
			console.error("No .add-to-cart-button elements found.");
		}
								// Fix for dynamically added elements
								$(document).on("click", ".add-to-cart-button", function (event) {
									event.preventDefault();

									let productId = $(this).data("product-id");
									if (!productId) {
										console.error("No product ID found for clicked button");
										return;
									}

									console.log("Clicked button. Product ID:", productId);

									$.ajax({
										url: "/cart/add", // Ensure this route is correct
										type: "POST",
										data: {
											_token: $('meta[name="csrf-token"]').attr("content"), // CSRF token
											product_id: productId
										},
										headers: {
											"X-Requested-With": "XMLHttpRequest" // Helps Laravel recognize AJAX requests
										},
										xhrFields: {
											withCredentials: true // Ensures cookies (session) are sent with the request
										},
										success: function (response) {
											console.log("Server response:", response);
											if (response.success) {
												alert("Product added to cart!");
											} else {
												alert("Failed to add product: " + response.message);
											}
										},
										error: function (xhr, status, error) {
											console.error("Error adding product:", xhr.responseText);
											alert("Error adding product: " + xhr.responseText);
										}
									});
								});
							});
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../JS/PRODUCTS/ARMOURY.js"></script>
    <script src="../../JS/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>