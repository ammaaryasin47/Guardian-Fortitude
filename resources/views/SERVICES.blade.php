<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICONS CDN -->
    <link href="../CSS/Navbar&Footer.css" rel="stylesheet">
    <link href="../CSS/SERVICES.css" rel="stylesheet">
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
                <li><a style="color: maroon; font-weight: 500;" href="{{URL::to('/services')}}">SERVICES</a></li>
                <li><a href="{{URL::to('/products')}}">PRODUCTS</a></li>
                <li><a href="{{URL::to('/contactus')}}">CONTACT US</a></li>
                <li><a href="{{URL::to('/quote')}}">QUOTE</a></li>
                <li><a href="{{URL::to('/login')}}">LOGIN</a></li>
            </ul>
        </ul>
    </nav>
    <!------------------------------------------------------------ BANNER ---------------------------------------------------------->

    <div class="service-banner">
        <img src="../IMAGES/SERVICES/Service-Banner02.jpg" class="w-100 object-fit-cover">
        <h1 class="text-light">SERVICES</h1>
    </div>

    <!-------------------------------------------------------------- SERVICES ----------------------------------------------------------------------->

    <div class="weprovide">
        <h1 class="text-light text-center mt-5 mb-5 pb-5">WE PROVIDE ,</h1>
        <ul class="text-light mt-5">
            <li class="d-flex text-center">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/Personal Protection.png">
                <h2 class="ps-3">PERSONAL PROTECTION</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light align-items-center">
                        <p><span class="fs-1">P</span>ersonal Protection Plays Paramount Priority
                            Providing Peaceful Perimeter Protection, Preventing Potential Perils. Guardian Fortitude
                            Guarantees Genuine, Groundbreaking Guarding, Granting Guaranteed Safety. Our Optimal
                            Officers Offer Outstanding Oversight, Observing Obstacles, Offering Onsite Operational
                            Oversight. Specialized Surveillance Systems Strengthen Security, Safeguarding Sensitive
                            Spaces, Sustaining Superior Standards. Ensuring Every Encounter Enforces
                            Exceptional Efficiency, Effectiveness, Expertise.</p>
                        <img class="weprovideimg"
                            src="https://kadavy.net/wp-content/uploads/2018/10/security-3028679_1920-350x233.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/Asset Protection.png">
                <h2 style="vertical-align: center;" class="ps-3">ASSET PROTECTION</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">A</span>sset Protection Represents A Critical Component Of
                            Our Comprehensive Security
                            Services. By Safeguarding Physical, Digital, And Intellectual Resources, We Ensure That Your
                            Valuables Remain Secure From Threats Such As Theft, Vandalism, And Unauthorized Access. Our
                            Expertise In Risk Assessment, Advanced Surveillance Systems, And Highly Trained Security
                            Personnel Guarantees That Every Asset Is Protected Around The Clock. Whether You Require
                            On-Site Security, Remote Monitoring, Or Customized Protective Solutions, Guardian Fortitude
                            Delivers Peace Of Mind Through Reliable And Strategic Asset Protection Services.</p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/564x/0d/e7/02/0de702b4538fa91a9761d5089af29b77.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/Survelliance&Monitoring.png">
                <h2 style="vertical-align: center;" class="ps-3">SURVELLIANCE & MONITORING</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">W</span>e Provide Premium Surveillance & Monitoring Services
                            Designed To Ensure The Safety And Security Of Your Business Or Property Around The Clock.
                            Our Advanced Technologies And Highly Trained Professionals Constantly Monitor Your Premises,
                            Detecting Any Suspicious Activities In Real-Time To Prevent Potential Threats Before They
                            Escalate.
                        </p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/564x/08/89/a5/0889a50bafd5318798346ddd9cc2da0f.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/SiteSecurity.png">
                <h2 style="vertical-align: center;" class="ps-3">SITE SECURITY</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">O</span>ur Team Of Highly Trained Security Professionals
                            Delivers Round-The-Clock Surveillance, Threat Assessment, And Rapid Response To Potential
                            Risks. With Cutting-Edge Technology And Proactive Monitoring, We Deter Unauthorized Access,
                            Vandalism, And Theft, Tailoring Solutions To Your Specific Needs. Whether It's Commercial,
                            Industrial, Or Residential Sites, Guardian Fortitude Provides Unmatched Reliability,
                            Expertise, And Peace Of Mind.
                        </p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/564x/63/99/ac/6399ac6601f5e28a38b0f4dce553fbce.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/Training&Consultation.png">
                <h2 style="vertical-align: center;" class="ps-3">TRAINING & CONSTULTATION</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">W</span>e Offer Comprehensive Training & Consultation
                            Services Tailored To Equip Your Team With The Necessary Skills And Knowledge To Excel In
                            Security Management. Our Expert Trainers Provide Hands-On Training In Surveillance, Risk
                            Assessment, Crisis Management, And Threat Mitigation, Ensuring Your Personnel Are Prepared
                            For Real-World Scenarios. Additionally, Our Consultation Services Are Designed To Analyze
                            Your Current Security Systems, Identify Vulnerabilities, And Recommend Strategic
                            Enhancements.
                        </p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/564x/d6/2a/f1/d62af148a35217796286df8307784acd.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/Emergency Extraction.png">
                <h2 style="vertical-align: center;" class="ps-3">EMERGENCY EXTRACTION</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">E</span>mergency Extraction Services Provided By Guardian
                            Fortitude Ensure Rapid And Safe Evacuations In Critical Situations. Our Highly Trained
                            Professionals Are Equipped With Advanced Skills And Technology To Respond Effectively To
                            Emergencies. Whether It's A Natural Disaster, Civil Unrest, Or Any Life-Threatening
                            Scenario, We Prioritize The Safety Of Our Clients And Their Assets.
                        </p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/564x/6d/1b/d4/6d1bd41c703b0b17fbf11a421861d497.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/AssaultTeam.png">
                <h2 style="vertical-align: center;" class="ps-3">SPECIAL ASSAULT TEAM</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">I</span>ntroducing Our Elite Special Assault Team, A Highly
                            Trained Group Of Professionals Committed To Ensuring The Safety And Security Of Our Clients.
                            With Extensive Experience In High-Risk Situations, Our Team Utilizes Advanced Tactics And
                            Cutting-Edge Technology To Neutralize Threats Effectively. At Guardian Fortitude, We
                            Prioritize Your Protection, Offering Tailored Security Solutions That Address Your Unique
                            Needs.
                        </p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/564x/4f/fd/25/4ffd25fa1cf1165035e5d4a202947f7b.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/Crisis Management.png">
                <h2 style="vertical-align: center;" class="ps-3">EMERGENCY CRISIS MANAGEMENT</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">W</span>e Understand That Effective Emergency Crisis
                            Management Is Crucial For Protecting Lives And Assets. Our Expert Team Is Dedicated To
                            Providing Comprehensive Solutions Tailored To Meet The Unique Needs Of Each Client. We
                            Specialize In Risk Assessment, Response Planning, And On-Site Support To Ensure Swift And
                            Effective Action During Emergencies.
                        </p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/564x/6c/b1/37/6cb137650eb8d155cd5419655211c473.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/Cyber Security.png">
                <h2 style="vertical-align: center;" class="ps-3">CYBER SECURITY</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">W</span>e Understand That Cyber Security Is Vital In
                            Protecting Your Digital Assets And Information. Our Comprehensive Services Offer Advanced
                            Solutions To Safeguard Your Organization From Cyber Threats And Data Breaches. With A Team
                            Of Experts Dedicated To Monitoring, Assessing, And Mitigating Risks, We Ensure Your Systems
                            Remain Secure And Resilient Against Evolving Threats.
                        </p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/736x/78/97/4a/78974a9f8c088587bd9a040717309601.jpg">
                    </div>
                </div>
            </li>

            <li class="d-flex ">
                <img class="weprovidelogo" src="../IMAGES/SERVICES/Icons/Private Detective.png">
                <h2 style="vertical-align: center;" class="ps-3">PRIVATE DETECTIVES</h2>
                <i class='ps-5 fs-1 bx bx-chevron-down' onclick="toggleDropdown(this)"></i>
                <div style="background-color: black; border: 2px solid maroon; border-radius: 2rem;"
                    class="dropdown-content">
                    <div class="d-flex text-light text-center align-items-center justify-content-between">
                        <p><span class="fs-1">W</span>e Understand The Unique Role Private Detectives Play
                            In Today's Complex World. They Are Skilled Professionals, Expertly Trained To Uncover
                            Information, Investigate Cases, And Ensure Client Safety. With A Keen Eye For Detail And An
                            Unwavering Commitment To Integrity, Our Private Detectives Utilize Cutting-Edge Technology
                            And Proven Techniques To Deliver Results. Whether It's Conducting Background Checks,
                            Surveillance, Or Gathering Evidence, Their Expertise Is Indispensable.
                        </p>
                        <img class="weprovideimg"
                            src="https://i.pinimg.com/564x/41/80/ca/4180cae6291514976108b5011ab85e32.jpg">
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <img style="width: 100%;" src="../IMAGES/HOME/Separator.jpg" alt="seperator">

    <!--------------------------------------------------------- USER INFORMATION ---------------------------------------------------->
    <div class="heading-container d-flex justify-content-center align-items-center">
        <h1 class="fs-1 text-light mt-5 pt-5 pb-2 user-heading">USER INFORMATION</h1>
    </div>

    <!-- <div class="text-center mt-5" id="backpack-heading">
        <div class="heading-container">
            <div class="heading-large text-center">USER INFORMATION</div>
            <div class="heading-normal text-center">USER INFORMATION</div>
        </div>
    </div> -->

    <div class="d-flex justify-content-between text-light ps-5" style="height: 50vh;">
        <div class="leftdiv d-flex flex-column align-items-center position-relative">
            <!-- Name label and input -->
            <h5 id="name-label" class="fs-5 transition-effect">NAME</h5>
            <input id="nameinput" type="text" placeholder="NAME" class="fs-2">

            <!-- Contact label and input -->
            <h5 id="contact-label" class="fs-5 mt-4 transition-effect">CONTACT</h5>
            <input id="contactinput" type="number" placeholder="CONTACT" class="fs-2 mt-3"
                style="color: #fff; background: transparent; outline: none; text-align: center;">
        </div>

        <div class="rightdiv d-flex flex-column align-items-center position-relative">
            <!-- Zip label and input -->
            <h5 id="zip-label" class="fs-5 transition-effect">ZIP</h5>
            <input id="zipinput" type="text" placeholder="ZIP" class="fs-2">

            <!-- Location label and input -->
            <h5 id="location-label" class="fs-5 mt-4 transition-effect">LOCATION</h5>
            <input id="locationinput" type="text" placeholder="LOCATION" class="fs-2 mt-5">
        </div>
    </div>

    <img style="width: 100%;" src="../IMAGES/HOME/Separator.jpg" alt="seperator">

    <div class="heading-container d-flex justify-content-center align-items-center">
        <h1 class="fs-1 text-light mt-5 pt-5 pb-2 user-heading">CHOOSE YOUR SERVICE</h1>
    </div>

    <form class="chooseservice text-light mt-5">
        <div class="radio-container">
            <div class="column">
                <div class="checkbox-box">
                    <input type="checkbox" id="option1" name="options" value="1">
                    <label for="option1">PERSONAL PROTECTION</label>
                </div>
                <div class="checkbox-box">
                    <input type="checkbox" id="option2" name="options" value="2">
                    <label for="option2">ASSET PROTECTION</label>
                </div>
                <div class="checkbox-box">
                    <input type="checkbox" id="option3" name="options" value="3">
                    <label for="option3">SURVELLIANCE & MONITORING</label>
                </div>
                <div class="checkbox-box">
                    <input type="checkbox" id="option4" name="options" value="4">
                    <label for="option4">SITE SECURITY</label>
                </div>
                <div class="checkbox-box">
                    <input type="checkbox" id="option5" name="options" value="5">
                    <label for="option5">TRAINING & CONSULTATION</label>
                </div>
            </div>

            <div class="column">
                <div class="checkbox-box">
                    <input type="checkbox" id="option6" name="options" value="6">
                    <label for="option6">EMERGENCY EXTRACTION</label>
                </div>
                <div class="checkbox-box">
                    <input type="checkbox" id="option7" name="options" value="7">
                    <label for="option7">SPECIAL ASSAULT TEAM</label>
                </div>
                <div class="checkbox-box">
                    <input type="checkbox" id="option8" name="options" value="8">
                    <label for="option8">EMERGENCY CRISIS MANAGEMENT</label>
                </div>
                <div class="checkbox-box">
                    <input type="checkbox" id="option9" name="options" value="9">
                    <label for="option9">CYBER SECURITY</label>
                </div>
                <div class="checkbox-box">
                    <input type="checkbox" id="option10" name="options" value="10">
                    <label for="option10">PRIVATE DETECTIVES</label>
                </div>
            </div>
        </div>
    </form>
    <div class="submitbutton-container">
        <a href="#">SUBMIT</a>
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