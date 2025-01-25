<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G.F.S.S Optics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--FONT AWESOME CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICONS CDN -->
    <link href="../../CSS/PRODUCTS/OPTICS.css" rel="stylesheet">
    <link href="../../CSS/Navbar&Footer.css" rel="stylesheet">
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
    
    <section
        style="background-image: url('https://i.redd.it/y2487meii7n81.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"
        class="h-100 w-100">
        <div>
            <h3 style="text-align: center; color: #3a9768; " class="position-relative display-1">OPTICS</h3>
        </div>
    </section>

    <!----------------------------------------------------- MODAL --------------------------------------------------------->
    <div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark"> <!-- Added bg-dark for dark background -->
                <div class="modal-header justify-content-center"> <!-- Center align header -->
                    <h5 class="modal-title text-light text-center" id="modalTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="Product Image" class="img-fluid mb-3">
                    <h4 id="modalPrice" class="text-primary"></h4>
                </div>
            </div>
        </div>
    </div>

    <section class="section-products">
        <div class="container">
            <h3 class="Product-head display-4 text-light mt-5 mb-5"> SCOPE </h3>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-12" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Holosun Elite" data-price="$30,000"
                                        data-image="https://cdnb.artstation.com/p/assets/images/images/058/956/651/large/vladislav-kravchenko-5.jpg?1675317718"><i
                                            class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Holosun Elite</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-13" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="M110k1" data-price="$30,000"
                                        data-image="https://cdnb.artstation.com/p/assets/images/images/022/265/741/large/linus-scheffel-schmidt-benderoptic1.jpg?1574764917"><i
                                            class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">M110k1</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-14" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Red Dot" data-price="$30,000"
                                        data-image="https://cdnb.artstation.com/p/assets/images/images/036/668/529/large/mustafa-majeed-3.jpg?1618306315"><i
                                            class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Red Dot</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-15" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Leupold Mark IV" data-price="$30,000"
                                        data-image="https://cdnb.artstation.com/p/assets/images/images/044/501/097/large/nestor-sarmiento-prueba-main-camera-002.jpg?1640187426"><i
                                            class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Leupold Mark IV</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-16" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Bushnell TRS-25" data-price="$30,000"
                                        data-image="https://cdnb.artstation.com/p/assets/images/images/074/822/599/large/stephen-mok-c-02-c-c-04-p05-vanity-wide.jpg?1713060893"><i
                                            class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Bushnell TRS-25</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-17" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Aimpoint Micro T2"
                                        data-price="$30,000"
                                        data-image="https://cdnb.artstation.com/p/assets/images/images/076/165/283/large/dmytro-bushylov-pose-1.jpg?1716328861"><i
                                            class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Aimpoint Micro T2</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-18" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Trijicon ACOG" data-price="$30,000"
                                        data-image="https://cdnb.artstation.com/p/assets/images/images/071/756/895/large/carlos-morales-empire-3d-std-acog-013.jpg?17058823063"><i
                                            class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Trijicon ACOG</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-19" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="S9 LPVO" data-price="$30,000"
                                        data-image="https://cdna.artstation.com/p/assets/images/images/058/137/986/large/hector-cervantes-asset.jpg?1673466449"><i
                                            class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">S9 LPVO</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>

                <img src="../../IMAGES/1_00000 (1).jpg">

                <h3 class="Product-head display-4 text-light mt-5 mb-5"> NIGHT VISION </h3>
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6"></div>
                </div>
                <div class="row">
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-1" class="single-product">
                            <div class="part-1">
                                <span class="discount">15% off</span>
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li>
                                        <a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="Panoramic NVG"
                                            data-price="$85,000"
                                            data-image="https://cdna.artstation.com/p/assets/images/images/036/341/792/large/bucket-hex-tbrender001-shot-1-fullquality.jpg?1617390227">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">Panoramic NVG</h3>
                                <h4 class="product-old-price text-light">$100,000</h4>
                                <h4 class="product-price text-light">$85,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-2" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="Dual-Tube NVG"
                                            data-price="$60,000"
                                            data-image="https://cdnb.artstation.com/p/assets/images/images/057/988/125/large/eldon-henrique-k.jpg?1673134831">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">Dual-Tube NVG</h3>
                                <h4 class="product-price text-light">$60,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-3" class="single-product">
                            <div class="part-1">
                                <span class="new">new</span>
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="Mono-Tube NVG"
                                            data-price="$70,000"
                                            data-image="https://cdnb.artstation.com/p/assets/images/images/065/363/617/large/georgiy-kiselev-1pn138-render002-test-6.jpg?1690201799">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">Mono-Tube NVG</h3>
                                <h4 class="product-price text-light">$70,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-4" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="Minie Wilcox G29"
                                            data-price="$70,000"
                                            data-image="https://cdnb.artstation.com/p/assets/images/images/077/116/711/large/ilya-rukhlyada-1-viewport-019.jpg?1718642929">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">Minie Wilcox G29</h3>
                                <h4 class="product-price text-light">$70,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-5" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="Wilcox G29" data-price="$50,000"
                                            data-image="https://cdna.artstation.com/p/assets/images/images/077/116/672/large/ilya-rukhlyada-1-viewport-012.jpg?1718642871">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">Wilcox G29</h3>
                                <h4 class="product-price text-light">$50,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-6" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="Futuristic NVG"
                                            data-price="$30,000"
                                            data-image="https://cdnb.artstation.com/p/assets/images/images/011/362/481/large/nicholas-lim-helmet-composite.jpg?1529196400">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">Futuristic NVG</h3>
                                <h4 class="product-price text-light">$30,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-7" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="Dual-Tube With Mount"
                                            data-price="$55,000"
                                            data-image="https://cdna.artstation.com/p/assets/images/images/070/409/944/large/antoine-george-explode-01.jpg?1702471561">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">Dual-Tube With Mount</h3>
                                <h4 class="product-price text-light">$55,000</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="Product-head display-4 text-light mt-5 mb-5"> LASER </h3>
                <div class="row">
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-8" class="single-product">
                            <div class="part-1">
                                <span class="new">new</span>
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="DBAL-D2" data-price="$30,000"
                                            data-image="https://cdnb.artstation.com/p/assets/images/images/037/912/099/large/roman-kozak-shot-1.jpg?1621634549">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">DBAL-D2</h3>
                                <h4 class="product-price text-light">$30,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-9" class="single-product">
                            <div class="part-1">
                                <span class="discount">20% off</span>
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="MAWL-C1" data-price="$70,000"
                                            data-image="https://cdna.artstation.com/p/assets/images/images/037/383/280/large/benedict-burns-perst-4-artstation-presentation-3.jpg?1620232422">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">MAWL-C1</h3>
                                <h4 class="product-old-price text-light">$85,000</h4>
                                <h4 class="product-price text-light">$70,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-10" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="PEQ-15" data-price="$40,000"
                                            data-image="https://cdna.artstation.com/p/assets/images/images/043/925/382/large/wenwen-ar15keys-4-17.jpg?1638633290">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">PEQ-15</h3>
                                <h4 class="product-price text-light">$40,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-11" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-title="LA5" data-price="$60,000"
                                            data-image="https://cdnb.artstation.com/p/assets/images/images/015/471/275/large/anton-pismennyy-anton-pismennyy-lcu-13.jpg?1548454625">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title text-light">LA5</h3>
                                <h4 class="product-price text-light">$60,000</h4>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
    </section>

    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
    <x-footer />

    <script src="../../JS/PRODUCTS/OPTICS.js"></script>
    <script src="../../JS/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->

</body>

</html>