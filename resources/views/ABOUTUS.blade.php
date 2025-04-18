<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
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
    <link href="../CSS/ABOUTUS.css" rel="stylesheet">
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

<nav style="background-color: black; position:sticky; top: 0; z-index: 10;" class=" text-light w-100">
    <div class="uppernav">
        <ul style="cursor:default;" class="fs-4 list-unstyled gap-5 d-flex ps-3">
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
                    src="{{ Auth::user()->picture ? asset(Auth::user()->picture) : asset('default-profile.png') }}" 
                    alt="Profile Picture" 
                    class="rounded-circle" 
                    height="40px">
                    </a>
                    <ul class="fs-2 dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        @auth
    @if(Auth::user()->type === 'Admin')
        <li class="sidenav-item">
            <a href="{{ route('admin.panel') }}" class="dropdown-item sidenav-link">
                <span>ADMIN PANEL</span>
            </a>
        </li>
    @endif
@endauth
                        <li><a class="dropdown-item" href="{{ route('orders') }}">YOUR ORDERS</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
                @else
                <li class="sidenav-item">
                    <a href="{{URL::to('/login')}}" class="sidenav-link">LOGIN</a>
                </li>
                @endauth
                <div class="mt-5">
                        <div class="fs-2 mb-5">
                            <li class=" pe-3 border-light align-items-center"
                                style="border-right: 1px dotted #fff;">
                                <i class='bx bx-envelope ='></i>
                                guardianfortitudeservice<br>@gmail.com
                            </li>
                            <li class="fs-2 pe-3 border-light align-items-center"
                                style="border-right: 1px dotted #fff;"> <i class='bx bx-phone-call'></i>
                                +91 1234567890</li>
                            <li class="fs-2"><i class='bx bx-map'></i> Ahemdabad , India</li>
                        </div>

                        <li class="sidenav-item d-flex justify-content-between">
                            <ul style="list-style-type: none;" class="justify-content-between d-flex flex-column">
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

    <!------------------------------------------------------------ BANNER  ----------------------------------------------------->
    <div class="about-banner">
        <img src="../IMAGES/ABOUT US/About-Banner.jpeg" class="w-100 object-fit-cover">
        <h1 class=" text-light position-relative">ABOUT US</h1>
    </div>

    <div class="about-para text-light p-5">
        <p style="text-align: center;"><span style="color:maroon; font-size: 4rem;"> A</span>t Guardian Fortitude
            Security
            Services, We Pride Ourselves On Our Unwavering Dedication To Safeguarding What
            Matters Most To You. Our Mission Is To Provide Unparalleled Security Solutions That Ensure The Safety And
            Peace
            Of
            Mind Of Our Clients. With A Team Of Highly Trained And Experienced Security Professionals, We Employ The
            Latest
            In
            Surveillance Technology, Alarm Systems, And Emergency Response Protocols To Offer Comprehensive Protection.
            We
            Understand That Each Client Has Unique Security Needs, Which Is Why We Tailor Our Services To Provide
            Personalized
            And Effective Security Strategies. Our Core Values Of Integrity, Vigilance, And Reliability Guide Us In
            Every
            Aspect Of Our Operations, From The Initial Assessment To The Implementation And Ongoing Management Of Our
            Security
            Solutions. At Guardian Fortitude, We Believe That True Security Comes From A Combination Of Advanced
            Technology,
            Skilled Personnel, And A Proactive Approach To Identifying And Mitigating Risks. Whether It's Protecting
            Your
            Home, Business, Or Community, We Are Committed To Delivering Top-Notch Security Services That You Can Trust.
            With
            Guardian Fortitude Security Services, You Can Rest Assured That Your Safety Is Our Top Priority, And WeAre
            Always
            Ready To Respond To Any Challenge With Strength And Precision.</p>
    </div>

    <!---------------------------------------------------------- GOALS ----------------------------------------------------------->

    <div class="goals justify-content-between bg-light w-100">
        <h1 class="text-center">GOALS</h1>
        <div class="goal-1">
            <h2 class="fs-1 text-center mb-5">Asset Protection</h2>
            <p class=" fs-3 text-center">Our Primary Goal As A Security Company Is To Safeguard The Valuable Assets Of
                Our Clients. This Encompasses Both Physical Assets, Such As Property, And Equipment, And Intangible
                Assets, Including Sensitive Data & Intellectual Property.</p>
        </div>
        <div class="goal-1">
            <h2 class="fs-1 text-center mb-5">Risk Mitigation</h2>
            <p class="fs-3 text-center">We Aim To Identify, Assess, And Minimize Risks To Their Clients. This Involves
                Conducting Thorough Risk Assessments, Implementing Effective Security Measures, And Providing Ongoing
                Monitoring And Response Services To Prevent Security Breaches.</p>
        </div>
        <div class="goal-2 ">
            <h2 class=" fs-1 text-center mb-5">Client Safety & Peace Of Mind</h2>
            <p class="fs-3 text-center">Ultimately, We Strive To Ensure The Safety And Peace Of Mind Of Their Clients.
                This Involves Providing Security Personnel, Surveillance Systems, Alarm Monitoring, And Emergency
                Response
                Services To Promptly Address Any Security Threats Or Incidents That May Arise.</p>
        </div>
    </div>

    <!--------------------------------------------------------- TEAM ------------------------------------------------>

    <div>
        <h1 style="border-bottom: 2px solid maroon; width: 30rem;" class="text-light pt-5 mt-5 ps-5 pb-3">OUR EXECTUTIVE
            TEAM</h1>
    </div>

    <div class="profile-card-wrapper d-flex w-100">
        <div class="profile-card-2"
            style="background-image: url('https://i.pinimg.com/564x/cb/13/b7/cb13b751d146415931fbd9f883f2bc10.jpg');">
            <div class="profile-name">SUPPЯESSOЯ</div>
            <div class="profile-username">BRAND AMBASSADOR</div>
            <div class="fs-2 profile-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>

        <div class="profile-card-2"
            style="background-image: url('https://i.pinimg.com/enabled/564x/3c/ee/b2/3ceeb2bbf5f06a8d847bc40a0f95c39d.jpg');">
            <div class="profile-name">EK_VILLAIN</div>
            <div class="profile-username">OWNER</div>
            <div class="fs-2 profile-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>

        <div class="profile-card-2"
            style="background-image: url('https://i.pinimg.com/736x/5b/98/89/5b9889b63f5bd3d5aca5e2e89911935c.jpg');">
            <div class="profile-name">H3CT0R</div>
            <div class="profile-username">ASSOCIATE</div>
            <div class="fs-2 profile-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </div>

    <img style="width: 100%;" src="../IMAGES/HOME/Separator.jpg" alt="seperator">
    <!----------------------------------------------------- TIMELINE ------------------------------------------------------------------------>
    <div class="container-fluid position-relative" style=" padding-bottom: 5rem; padding-top: 20rem;">
        <div class="timeline-row">
            <h2 class=" text-center w-100 text-light ">
                HISTORIC &nbsp; &nbsp;
                &nbsp; TIMELINE</h2>
            <div class="col-md-12 whiteLine d-flex flex-column align-items-center justify-content-center">
                <!-- BOX 1 -->
                <div class="card-timeline my-2 me-4 leftBox position-relative">
                    <img src="../IMAGES/HOME/Logo.png" class="p-2" width="40">
                    <div class="card-body">
                        <h5 class="card-title">The Foundation</h5>
                        <p class="card-subtitle mb-2 text-muted h4">2012-13</p>
                        <p class="card-text text-muted fw-bold">
                            EK_VILLAIN Founded Guardian Fortitude Security Services With A Vision To Provide Elite
                            Security
                            Solutions,
                            Partnering With H3CT0R, A Cybersecurity Expert.<br>
                        </p>
                    </div>
                    <span class="left-arrow"></span>
                </div>
                <!-- BOX 2 -->
                <div class="card-timeline my-2 me-4 rightBox position-relative">
                    <img src="../IMAGES/HOME/Logo.png" class="p-2" width="40">
                    <div class="card-body">
                        <h5 class="card-title">Expanding Brand Presence</h5>
                        <p class="card-subtitle mb-2 text-muted h4">2014-15</p>
                        <p class="card-text text-muted fw-bold fs-8">SHAIKH AMMAAR Was Introduced As The Brand
                            Ambassador,
                            Enhancing
                            Public Awareness And Credibility For The Company.</p>
                    </div>
                    <span class="right-arrow"></span>
                </div>
                <!-- BOX-3  -->
                <div class="card-timeline my-2 me-4 leftBox position-relative">
                    <img src="../IMAGES/HOME/Logo.png" class="p-2" width="40">
                    <div class="card-body">
                        <h5 class="card-title">Technological Integration</h5>
                        <p class="card-subtitle mb-2 text-muted h4">2016-17</p>
                        <p class="card-text text-muted fw-bold fs-8">
                            H3CT0R Led The Integration Of Advanced Security Technologies, Positioning The Company As A
                            Leader In Both
                            Physical And Cybersecurity.<br>
                        </p>
                    </div>
                    <span class="left-arrow"></span>
                </div>
                <!-- BOX-4  -->
                <div class="card-timeline my-2 me-4 rightBox position-relative">
                    <img src="../IMAGES/HOME/Logo.png" class="p-2" width="40">
                    <div class="card-body">
                        <h5 class="card-title">Global Expansion</h5>
                        <p class="card-subtitle mb-2 text-muted h4">2018-19</p>
                        <p class="card-text text-muted fw-bold fs-8">Expanded Operations Internationally, Offering
                            Services
                            To
                            Clients Across Multiple Countries.</p>
                    </div>
                    <span class="right-arrow"></span>
                </div>
                <!-- BOX-5  -->
                <div class="card-timeline my-2 me-4 leftBox position-relative">
                    <img src="../IMAGES/HOME/Logo.png" class="p-2" width="40">
                    <div class="card-body">
                        <h5 class="card-title">Strengthening Cyber Defenses</h5>
                        <p class="card-subtitle mb-2 text-muted h4">2020-21</p>
                        <p class="card-text text-muted fw-bold fs-8">
                            Enhanced Cybersecurity Offerings To Address Increasing Threats, Led By H3CT0R.<br>
                        </p>
                    </div>
                    <span class="left-arrow"></span>
                </div>
                <!-- BOX-6 -->
                <div class="card-timeline my-2 me-4 rightBox position-relative">
                    <img src="../IMAGES/HOME/Logo.png" class="p-2" width="40">
                    <div class="card-body">
                        <h5 class="card-title">Global Expansion</h5>
                        <p class="card-subtitle mb-2 text-muted h4">2022-23</p>
                        <p class="card-text text-muted fw-bold fs-8">Expanded Operations Internationally, Offering
                            Services
                            To
                            Clients Across Multiple Countries. Celebrated A Decade Of Excellence In Security Services
                            With
                            Events
                            Highlighting The Company's Achievements.</p>
                    </div>
                    <span class="right-arrow"></span>
                </div>
                <!-- BOX-7  -->
                <div class="card-timeline my-2 me-4 leftBox position-relative">
                    <img src="../IMAGES/HOME/Logo.png" class="p-2" width="40">
                    <div class="card-body">
                        <h5 class="card-title">Sustaining Growth</h5>
                        <p class="card-subtitle mb-2 text-muted h4">2024-Present</p>
                        <p class="card-text text-muted fw-bold fs-8">
                            Maintained A Strong Focus On Growth And Innovation, Ensuring The Company Remains At The
                            Forefront Of The
                            Security Industry.<br>
                        </p>
                    </div>
                    <span class="left-arrow"></span>
                </div>
            </div>
        </div>
    </div>

    <img style="width: 100%;" src="../IMAGES/HOME/Separator.jpg" alt="seperator">

    <!-------------------------------------------------------- ACCREDATIONS ------------------------------------------------->

    <h1 style="border-bottom: 2px solid maroon;" class="text-center text-light mt-5 pt-5 pb-3">ACCREDATIONS</h1>

    <div class="accredation row mt-5">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="https://marketplace.canva.com/EAFK9uOYOsE/1/0/1600w/canva-black-gold-elegant-certificate-of-appreciation-lr5R15shSos.jpg"
                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

            <img src="https://cdn.prod.website-files.com/5f51ff346f381e4105e072c5/6256bd164c7ad72cc1f41f52_badge-preview%20(46).png"
                class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://docsandslides.com/wp-content/uploads/2023/08/Certificate-Of-Authenticity-Template.webp"
                class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

            <img src="https://img.freepik.com/premium-vector/premium-certificate-template-with-luxury-elegant-gold-black-curves-black-background_691616-298.jpg"
                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://img.freepik.com/free-vector/luxury-ornamental-certificate-template-black-gold_53876-116393.jpg"
                class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

            <img src="https://cdn.prod.website-files.com/5f51ff346f381e4105e072c5/6256bd164c7ad72cc1f41f52_badge-preview%20(46).png"
                class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
        </div>
    </div>

    <img style="width: 100%;" src="../IMAGES/HOME/Separator.jpg" alt="seperator">
    <!------------------------------------------------------ CLIENTS ------------------------------------------------->
    <h1 style="border-bottom: 2px solid maroon;" class="pb-5 text-center text-light mt-5">CLIENTS</h1>

    <div class="clients d-flex justify-content-around mt-5">
        <img src="../IMAGES/ABOUT US/CLIENTS/Client 01.jpeg">
        <img src="../IMAGES/ABOUT US/CLIENTS/Client 02.jpeg">
        <img src="../IMAGES/ABOUT US/CLIENTS/Client 03.png">
        <img src="../IMAGES/ABOUT US/CLIENTS/Client 04.jpeg">
    </div>

    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
    <x-footer />


    <script src="../JS/navbar.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>