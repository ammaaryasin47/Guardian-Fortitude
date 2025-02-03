<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>G.F.S.S</title>
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
  <link href="../CSS/INDEX.css" rel="stylesheet">
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
  <nav style="background-color: black; position:sticky; top: 0; z-index: 10;" class=" text-light w-100">
    <div class="uppernav">
        <ul style="cursor:default;" class="align-items-end fs-4 list-unstyled gap-5 d-flex ps-3">
            <li class="pe-3 border-light align-items-center" style="border-right: 1px dotted #fff;">
                <i class='bx bx-envelope'></i>
                guardianfortitudeservice@gmail.com
            </li>
            <li class="pe-3 border-light align-items-center" style="border-right: 1px dotted #fff;">
                <i class='bx bx-phone-call'></i>
                +91 1234567890
            </li>
            <li><i class='bx bx-map'></i> Ahemdabad , Gujarat</li>
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

  <!--------------------------------------- COMPANY BANNER --------------------------------------------------->

  <div class="NamePlate">
    <h1 id="Guardian">GUARDIAN</h1>
    <h1 id="Fortitude">FORTITUDE</h1>
    <h1 id="Security">SECURITY</h1>
    <h1 id="Services">SERVICES</h1>
  </div>

  <!------------------------------------------ QUOTE CAROUSEL --------------------------------------------------------->

  <div id="carouselTwo" class="carousel slide" data-bs-ride="carousel"
    style="border-top: 2px solid white; cursor: default;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://image.tmdb.org/t/p/original/6lDCSxbht0i3R1z191t3zaSKKAN.jpg" class="d-block w-100"
          alt="EK_VILLAIN Image">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: rgb(170, 56, 56);" class="h1">EK_VILLAIN</h5>
          <h5 class="h3 blockquote">OWNER</h5>
          <p class="fs-3">Someone Has To Make The Enemies Scared Of The Dark</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://wallpapercave.com/wp/wp12521426.jpg" class="d-block w-100" alt="SUPPRESSOR Image">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: rgb(56, 166, 170);" class="h1">SUPPRESSOR</h5>
          <h5 class="h3 blockquote">BRAND AMBASSADOR</h5>
          <p class="fs-3">Survival Must Be Your Only Goal</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://wallpapers.com/images/hd/black-and-white-anonymous-hacker-0t3ibs8rld889nia.jpg"
          class="d-block w-100" alt="H3CT0R Image">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h1">H3CT0R</h5>
          <h5 class="h3 blockquote">PARTNER</h5>
          <p class="fs-3">Internet Without Privacy Turns Piracy Real Fast</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTwo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselTwo" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  

  <!----------------------------------------- WHY CHOOSE US ? ----------------------------------------------->
  <div style="background-color: black; cursor: default; border-top:2px solid white ;" class="h-100">
    <h1 style="border-bottom: 0.2rem solid maroon" class="h-1 text-center pt-5 pb-5 text-light">WHY CHOOSE US
      ?</h1>

    <div class="divtop d-flex justify-content-around text-light pt-5">
      <div style="width: 45rem; text-align: center;">
        <i style="font-size: 3rem; " class='bx bxs-briefcase'></i>
        <h1 class="h3">DECADES OF EXPERIENCE </h1>
        <p> Founded In 2012, Our Extensive Knowledge And Proven Adaptability Enable Us To Address The
          Evolving Threats
          And Challenges Across Various Sectors. Our Longevity In The Industry Is A Testament To Our Ability To
          Adapt .
        </p>
      </div>

      <div style="width: 45rem; text-align: center;">
        <i style="font-size: 3rem;" class='bx bx-headphone'></i>
        <h1 class="h3"> 24/7 SUPPORT</h1>
        <p>Guardian Fortitude Security Services Offers 24/7 Support, Ensuring That Security Needs Are
          Addressed At Any
          Hour Of The Day. Our Team Is Always On Standby Ready To Act Swiftly And Effectively To Safeguard Your
          Interests At All Times.</p>
      </div>
    </div>

    <div id="whychooseuslogo" style="display: flex; align-items: center; justify-content: center;  position:relative;">
      <img style="opacity: 25%;" src="../IMAGES/HOME/Logo.png" height="200rem">
    </div>

    <div class="divbottom d-flex justify-content-around text-light pt-5 mb-5 pb-5">
      <div style="width: 45rem; text-align: center;">
        <i style="font-size: 3rem;" class='bx bx-microchip'></i>
        <h1 class="h3">STATE-OF-THE-ART-TECHNOLOGY</h1>
        <p> Guardian Fortitude Leverages Cutting-Edge Technology, Including Advanced Surveillance Systems,
          Real-Time Monitoring, And Analytics, To Provide Proactive And Responsive Security Solutions.
        </p>
      </div>

      <div style="width: 45rem; text-align: center; ">
        <i style="font-size: 3rem;" class='bx bx-globe'></i>
        <h1 class="h3">WORLD WIDE REACH</h1>
        <p> Our Extensive Network Of International Partners And Highly Skilled Personnel Ensures That No
          Matter Where You Are Located, We Can Deliver The Same High-Quality Security Services
        </p>
      </div>
    </div>
  </div>

  <!-------------------------------------- PRODUCT CAROUSEL --------------------------------------------------->

  <div id="carouselOne" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cdna.artstation.com/p/assets/images/images/077/126/116/large/diego-mura-mag.jpg?1718661090"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="fs-2">H&K Replacement Mags</h5>
          <p class="fs-4">LIMITED OFFER ! Buy 1 Get 1 Free </p>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://cdna.artstation.com/p/assets/images/images/059/320/894/large/g-a-r-r-2sssss.jpg?1676126879"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="fs-2"></h5>
          <p class="fs-4"> </p>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://cdna.artstation.com/p/assets/images/images/038/376/796/large/tyler-schutte-m4a1-customized-dmr-scene-01-shot-02.jpg?1622919662"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="fs-2">Special Edition M4 Carbine</h5>
          <p class="fs-4"> 5% Discount This Week !</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOne" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselOne" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <!--------------------------------------------------------- BLOGS ------------------------------------------------------------->

  <h3 style="border-bottom: 0.2rem solid maroon; background-color: black;"
    class="text-light mt-5 pb-5 fs-1 text-center">BLOGS</h3>
  <div class="Blogs justify-content-around mb-5">
    <div style="border-right: 2px solid maroon" class=" blog-1 px-5 text-center text-light mt-5">
      <img class="mb-3"
        src="https://cdnb.artstation.com/p/assets/images/images/034/890/181/4k/andrei-popescu-357-s-w-magnum-357-s-w-magnum.jpg?1613514909"
        height="150rem">
      <h1>Understanding Bullet Calibers</h1>
      <h2>By <i>SUPPRESSOR</i></h2>
      <h3>5th March 2024</h3>
      <a href="#" style="text-decoration: none; margin-top: 5rem; cursor:pointer ;">Read More ...</a>
    </div>
    <div style="border-right: 2px solid maroon" class="blog-2 px-5 text-center text-light mt-5">
      <img class="mb-3" src="https://img.freepik.com/free-photo/close-up-man-writing-paper_23-2148377689.jpg" height="150rem">
      <h1>Impacts Of Security Consultancy</h1>
      <h2>By <i>EK_VILLAIN</i></h2>
      <h3>5th March 2024</h3>
      <a href="#" style="text-decoration: none; margin-top: 5rem; cursor:pointer ;">Read More ...</a>
    </div>
    <div class="blog-3 px-5 text-center text-light mt-5">
      <img class="mb-3"
        src="https://t4.ftcdn.net/jpg/05/82/19/57/360_F_582195761_R6KLj1upLmNAtkn5GM2Lsc4Sv56gxeT8.jpg"
        height="150rem">
      <h1>Exploring Your Legal Boundaries</h1>
      <h2>By <i>DAX</i></h2>
      <h3>5th March 2024</h3>
      <a href="#" style="text-decoration: none; margin-top: 5rem; cursor:pointer ;">Read More ...</a>
    </div>
  </div>

  <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
 <x-footer />


  <script src="../JS/navbar.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>