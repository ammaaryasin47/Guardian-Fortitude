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
    <!--------------------------------------------- NAVBAR ----------------------------------------------------->
   <x-productsnavbar />

    <!--------------------------------------------------------------- BANNER --------------------------------------------------------->
    <div class="armoury-banner">
        <img src="https://cdn11.bigcommerce.com/s-fex90914pb/images/stencil/760x1000/uploaded_images/ammo-blog-scaled-1-1536x1038.jpg?t=1633931274"
            class="w-100 object-fit-cover">
        <h1 class="text-light">Armoury</h1>
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
        <div class="series-item">
            <img src="https://cdnb.artstation.com/p/assets/images/images/031/942/803/large/ryzin-art-screenshot096.jpg?1605033339"
                alt="PISTOLS">
            <h3 class="text-center">PISTOLS</h3>
        </div>
        <div class="series-item">
            <img src="https://cdna.artstation.com/p/assets/images/images/010/130/402/large/linus-scheffel-5.jpg?1522743897"
                alt="HUNTING RIFLES">
            <h3 class="text-center">HUNTING RIFLES</h3>
        </div>
        <div class="series-item">
            <img src="https://cdna.artstation.com/p/assets/images/images/075/080/848/large/egor-rzhevskii-ump-4k-right-min.jpg?1713714355"
                alt="SUB MACHINE GUNS">
            <h3 class="text-center">SUB MACHINE GUNS</h3>
        </div>
        <div class="series-item">
            <img src="https://cdnb.artstation.com/p/assets/images/images/069/643/793/large/pascual-hernandez-pascualhernandez-remington-870-frontground.jpg?1700641488"
                alt="SHOTGUNS">
            <h3 class="text-center">SHOTGUNS</h3>
        </div>
        <div class="series-item">
            <img src="https://cdnb.artstation.com/p/assets/images/images/024/195/279/large/florian-neumann-06-side.jpg?1581607642"
                alt="ASSAULT RIFLES">
            <h3 class="text-center">ASSAULT RIFLES</h3>
        </div>
        <div class="series-item">
            <img src="https://cdnb.artstation.com/p/assets/images/images/032/325/659/large/laurentiu-nedelca-pms-akrapov-s4-artstation-010.jpg?1606131873"
                alt="SNIPER RIFLES">
            <h3 class="text-center">SNIPER RIFLES</h3>
        </div>
        <div class="series-item">
            <img src="https://cdna.artstation.com/p/assets/images/images/043/750/398/large/james-shock-2-edited.jpg?1638179700"
                alt="BOWS">
            <h3 class="text-center">LAUNCHERS</h3>
        </div>
        <div class="series-item">
            <img src="https://cdnb.artstation.com/p/assets/images/images/035/824/167/large/laurentiu-nedelca-pms-stal-51-0011.jpg?1615993846"
                alt="MACHINE GUNS">
            <h3 class="text-center">MACHINE GUNS</h3>
        </div>
        <div class="series-item">
            <img src="https://images2.alphacoders.com/108/1085880.jpg" alt="REVOLVERS">
            <h3 class="text-center">GRENADES & IED</h3>
        </div>
        <div class="series-item">
            <img src="https://cdna.artstation.com/p/assets/images/images/042/387/512/large/emmanuel-marshall-pavlovvr-m1-garand-knife-01.jpg?1634366710" alt="REVOLVERS">
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

            <div class="svg-item">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                    <img src="https://cdnb.artstation.com/p/assets/images/images/076/860/535/large/sergii-kolesnyk-4-2jpg.jpg?1718014232"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
                <!-- GLOCK 34 -->
                <div class="card h-100 d-flex flex-column">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/077/515/427/large/ryland-scott-howahr-ue-neutral-renderv01.jpg?1719645588"
                        style="transform: scaleX(-1);" class="card-img-top" width="100%">
                    <div class="card-body pt-0 px-0 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between mb-0 px-3">
                            <small class="fs-4 text-muted mt-1">Howa 1500 </small>
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
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

            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 card-container" data-caliber=".22LR" data-category="PISTOLS">
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
                                <button type="button" class="btn btn-danger btn-block fs-5">ORDER</button>
                            </div>
                            <small class="legal-disclaimer d-flex justify-content-center text-muted fs-6">*Legal
                                Disclaimer</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
    <x-footer />

    <script src="../../JS/PRODUCTS/ARMOURY.js"></script>
    <script src="../../JS/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>