<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICONS CDN -->
    <link href="../../CSS/Navbar&Footer.css" rel="stylesheet">
    <link href="../../CSS/REGISTER.css" rel="stylesheet">
    <!---- FAVICONS ---->
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">
</head>

<body>
    <!--------------------------------------------- NAVBAR ----------------------------------------------------->
<x-navbar />

    <!------------------------------------------------------- BREADCRUMBS ----------------------------------------------------->
    <div style="cursor:arrow;" class="breadcrumbs d-flex align-items-center">
        <div class="crumb crumb-active fs-5 text-center">
            <span>PERSONAL INFO</span>
        </div>

        <i class='bx bx-chevron-right text-light fs-1'></i>

        <div class="crumb fs-5 text-light text-center">
            <span>DETAILS</span>
        </div>
        <i class='bx bx-chevron-right text-light fs-1'></i>

        <div class="crumb fs-5 text-light text-center">
            <span>PREFERENCES</span>
        </div>
        <i class='bx bx-chevron-right text-light fs-1'></i>

        <div class="crumb fs-5 text-light text-center">
            <span>LEGAL COMPLAIANCE</span>
        </div>

        <i class='bx bx-chevron-right text-light fs-1'></i>

        <div class="crumb fs-5 text-light text-center">
            <span>CONFIRMATION</span>
        </div>

    </div>


    <!----------------------------------------------------- REGISTRATION -------------------------------------------------------------->

    <section class="vh-100 text-light mb-5 pb-5 display-relative" style="background-color: #000;">
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

                                    <form action="{{ route('register.storebasicinfo') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="../../IMAGES/HOME/Logo.png" style="width: 10rem;">
                                            <span class="fs-1">GUARDIAN FORTITUDE<br> SECURITY SERVICES</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">REGISTER YOUR
                                            ACCOUNT</h5>

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                     <ul>
                                                         @foreach ($errors->all() as $error)
                                                         <li class="fs-2">{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label style="letter-spacing: 2px;" class="fs-5 form-label" name="name"
                                                for="formName">NAME</label>
                                            <input style="background-color: #000;" type="text" name="name" id="name"
                                                class=" text-light form-control form-control-lg" />
                                        </div>

                                        <div class="fs-5 mb-4">
                                            <label style="letter-spacing: 2px;" for="profilePicture">PROFILE PICTURE</label><br>
                                            <input style="letter-spacing: 2px;" type="file" id="profilePicture" name="picture"
                                                accept="image/*">
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label style="letter-spacing: 2px; cursor: pointer;" class="fs-5 form-label"
                                                for="formContact">CONTACT NUMBER</label>
                                            <div class="input-group">
                                                <select class="form-select form-select-lg text-light" name="countrycode"  id="countryCode"
                                                    style="max-width: 120px;background-color: #000;letter-spacing: 2px;" required>
                                                    <option value="+91" selected>+91 (INDIA)</option>
                                                    <option value="+1">+1 (USA)</option>
                                                    <option value="+44">+44 (UK)</option>
                                                    <option value="+61">+52 (MEXICO)</option>
                                                    <option value="+61">+86 (CHINA)</option>
                                                </select>
                                                <input style="background-color: #000;" name="contact" type="number" id="formContact"
                                                    class="text-light form-control form-control-lg" maxlength="10">
                                            </div>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label style="letter-spacing: 2px;" class="fs-5 form-label"
                                                for="formEmail">EMAIL ADDRESS</label>
                                            <input style="background-color: #000;" type="email" name="email" id="formEmail"
                                                class="text-light form-control form-control-lg" />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label style="letter-spacing: 2px;" class="fs-5 form-label"
                                                for="password">PASSWORD</label>
                                            <input style="background-color: #000;" type="password" name="password" id="password"
                                                class="text-light form-control form-control-lg" />
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button type="submit"
                                                class="reg-btn btn btn-lg btn-block text-light"
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