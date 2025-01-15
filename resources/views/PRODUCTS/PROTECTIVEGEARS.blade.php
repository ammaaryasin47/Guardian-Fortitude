<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPECIALIZED VEHICALS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICONS CDN -->
    <link href="../../CSS/Navbar&Footer.css" rel="stylesheet">
    <link href="../../CSS/PRODUCTS/PROTECTIVE-GEARS.css" rel="stylesheet">
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

    <!------------------------------------------------------------ BANNER  ----------------------------------------------->
    <div class="gear-banner">
        <img style="opacity: 0.2;"
            src="https://archive.airsoftmilsimnews.com/wp-content/uploads/2020/11/TNVC-Optics-1-ECOTI-3.jpg"
            width="1340.5rem">
        <div class="Banner-title">
            <h3 class="text-primary text-light text-center">GUARDIAN FORTITUDE</h3>
            <h6 class="text-secondary text-bold text-light text-center">Presents</h6>
            <h3 class="topic fw-bold mt-5 text-center">ARMOR</h3>
        </div>
        <p class="armor-intro text-center text-light">When It Comes To Personal Protection, Nothing Compares To The High
            Quality And Advanced Engineering Of Our Armored Headgear, Plates, And Plate Carriers. Designed With Both
            Safety And Comfort In Mind, Our Products Offer Unparalleled Defense Against Ballistic Threats. Our Headgear
            Is Crafted From Lightweight Yet Incredibly Strong Materials, Providing Maximum Protection Without
            Compromising On Mobility Or Comfort. The Ballistic Plates Are Rigorously Tested To Withstand The Highest
            Levels Of Impact, Ensuring That You Stay Safe In Even The Most Dangerous Situations. Our Plate Carriers Are
            Ergonomically Designed For A Secure Fit, With Adjustable Features To Accommodate Various Body Types And
            Tactical Needs. Whether You're In Law Enforcement, Military Service, Or Personal Security, Our Premium
            Protective Gear Offers Peace Of Mind And Superior Defense, Ensuring You're Always Ready For The Challenges
            Ahead. Invest In The Best Protection Available And Experience The Confidence That Comes With Knowing You
            Have The Highest Quality Armored Gear On Your Side.</p>
    </div>

    <!-- Product Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h3 class="modal-title" id="productModalLabel"></h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="productModalImage" src="" alt="Product Image" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <h3 id="productModalPrice"></h3>
                                <h4 id="productModalCategory"></h4> <!-- Dynamic section for category -->
                                <button class="btn btn-success mt-3">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------------------------------------------------- HEAD GEAR SECTION  --------------------------------------------->
    <div class="product-container mt-5 pt-5">
        <h3 class="Product-head pb-5 text-light pt-5 mt-5">HEAD GEAR</h3>
    </div>

    <section class="section-products">
        <div class="container">
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-1" class="single-product">
                        <div class="part-1">
                            <span class="discount">15% off</span>
                            <ul>
                                <li>
                                    <a href="#" class="add-to-cart-button" data-product-id="1">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Ballistic Head Gear (With Mandible)"
                                        data-price="$85,000" data-old-price="$100,000"
                                        data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Helmets/ACH%20Combat%20Helmets/Kavro%20ACH-126T/Mandible-Helmet_Right_463_72-dpi-228x228.png">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Ballistic Head Gear</h3>
                            <h3 class="text-light">(With Mandible)</h3>
                            <h4 class="product-old-price text-light">$100,000</h4>
                            <h4 class="product-price text-light">$85,000</h4>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-2" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li>
                                    <a href="#" class="add-to-cart-button" data-product-id="2">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Ballistic Head Gear (Olive Green)"
                                        data-price="$60,000"
                                        data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Helmets/ACH%20Combat%20Helmets/Kavro%20ACH-4/MKH-ACH-4-Product-Left-228x228.png">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Ballistic Head Gear</h3>
                            <h3 class="text-light">(Olive Green)</h3>
                            <h4 class="product-price text-light">$60,000</h4>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-3" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li>
                                    <a href="#" class="add-to-cart-button" data-product-id="3">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Ballistic Head Gear (Black)"
                                        data-price="$70,000"
                                        data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Helmets/ACH%20Combat%20Helmets/Kavro%20ACH-126%20T/Kavro%20ACH-126%20T%20(1)-228x228.png">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Ballistic Head Gear</h3>
                            <h3 class="text-light">(Black)</h3>
                            <h4 class="product-price text-light">$70,000</h4>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-4" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li>
                                    <a href="#" class="add-to-cart-button" data-product-id="4">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Ballistic Head Gear (Desert Tan)"
                                        data-price="$70,000"
                                        data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Helmets/ACH%20Combat%20Helmets/Kavro%20ACH-125%20T/Kavro%20ACH-125%20T%20(4)-228x228.png">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Ballistic Head Gear</h3>
                            <h3 class="text-light">(Desert Tan)</h3>
                            <h4 class="product-price text-light">$70,000</h4>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-5" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li>
                                    <a href="#" class="add-to-cart-button" data-product-id="5">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Ballistic Visor" data-price="$50,000"
                                        data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Helmets/Accessories/Kavro%20Visors/KAVRO-VD-20-SM_Product_Image-228x228.png">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Ballistic Visor</h3>
                            <h4 class="product-price text-light">$50,000</h4>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-6" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li>
                                    <a href="#" class="add-to-cart-button" data-product-id="6">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Ballistic Glasses"
                                        data-price="$30,000"
                                        data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Helmets/Accessories/Kavro%20Ballistic%20Eyewear/KAVRO-BALLISTIC-EYEWEAR-(3)-228x228.png">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Ballistic Glasses</h3>
                            <h4 class="product-price text-light">$30,000</h4>
                        </div>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-7" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li>
                                    <a href="#" class="add-to-cart-button" data-product-id="7">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Ballistic Headset"
                                        data-price="$40,000"
                                        data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Helmets/Accessories/Kavro%20Visors/VD-06%20FM/VD-06-FM-(3)-228x228.png">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Ballistic Headset</h3>
                            <h4 class="product-price text-light">$40,000</h4>
                        </div>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-8" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li>
                                    <a href="#" class="add-to-cart-button" data-product-id="8">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expand-button" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-title="Ballistic Head Gear (Camouflage)"
                                        data-price="$25,000"
                                        data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Helmets/ACH%20Combat%20Helmets/Kavro-ACH-114%20T/Kavro-ACH-114T-Left-463x421.png">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title text-light">Ballistic Head Gear</h3>
                            <h3 class="text-light">(Camouflage)</h3>
                            <h4 class="product-price text-light">$25,000</h4>
                        </div>
                    </div>
                </div>

                <!------------------------------------------ PLATE CARRIER SECTION  --------------------------------------------------------->
                <div class="product-container">
                    <h3 class="Product-head mt-5 mb-5 pt-5 pb-5 text-light text-center">Plates & Plate Carriers</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-9" class="single-product">
                                <div class="part-1">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                        <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                data-title="BALLISTIC Plate Carrier (Black)" data-price="$9,000"
                                                data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Vest/Covert%20Overvests/TAC-II%20(FR)-228x228.png">
                                                <i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title text-light">BALLISTIC Plate Carrier</h3>
                                    <h3 class="text-light">(Black)</h3>
                                    <h4 class="product-price text-light">$9,000</h4>
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
                                                data-bs-target="#productModal"
                                                data-title="BALLISTIC Plate Carrier (Olive Green)" data-price="$9,500"
                                                data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Vest/Tactical%20Overvests/PLATE%20CARRIER/Plate_Carrier_Side-228x228.png">
                                                <i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title text-light">BALLISTIC Plate Carrier</h3>
                                    <h3 class="text-light">(Olive Green)</h3>
                                    <h4 class="product-price text-light">$9,500</h4>
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
                                                data-bs-target="#productModal"
                                                data-title="BALLISTIC Plate Carrier (Desert Tan)" data-price="$90,000"
                                                data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Vest/Special%20Purpose%20Vest/EXTRA%20PROTECTION%20VEST/Extra_Portection_Vest-1-228x228.png">
                                                <i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title text-light">BALLISTIC Plate Carrier</h3>
                                    <h3 class="text-light">(Desert Tan)</h3>
                                    <h4 class="product-price text-light">$90,000</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-12" class="single-product">
                                <div class="part-1">
                                    <span class="new">new</span>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                        <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                data-title="BALLISTIC Plate Carrier (Blue)" data-price="$8,000"
                                                data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Vest/Protech%20Overvests/FRONT%20OPENING%20OVER%20VEST/Left_Opening_OverVest-228x228.png">
                                                <i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title text-light">BALLISTIC Plate Carrier</h3>
                                    <h3 class="text-light">(Blue)</h3>
                                    <h4 class="product-price text-light">$8,000</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-13" class="single-product">
                                <div class="part-1">
                                    <span class="discount">15% off</span>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                        <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                data-title="BALLISTIC Plate Carrier (With Plate)" data-price="$8,500"
                                                data-image="https://www.mku.com/image/cache/catalog/Kavro-TAC-I-IIA+_mood-shot-228x228.png">
                                                <i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title text-light">BALLISTIC Plate Carrier</h3>
                                    <h3 class="text-light">(With Plate)</h3>
                                    <h4 class="product-old-price text-light">$10,000</h4>
                                    <h4 class="product-price text-light">$8,500</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-14" class="single-product">
                                <div class="part-1">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                        <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                data-title="BALLISTIC Plate Carrier (With Plate)" data-price="$8,000"
                                                data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Vest/Tactical%20Overvests/FRONT%20OPENING%20VEST/front-image-228x228.png">
                                                <i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title text-light">BALLISTIC Plate Carrier</h3>
                                    <h3 class="text-light">(With Plate)</h3>
                                    <h4 class="product-price text-light">$8,000</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-15" class="single-product">
                                <div class="part-1">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                        <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                data-title="BALLISTIC Plate Carrier (With Plate)" data-price="$8,300"
                                                data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Vest/Tactical%20Overvests/BODY%20ARMOUR%20WITH%20UPPER%20BODY%20EXO/KAVRO-TAC-I-IIB+_Product-image-228x228.png">
                                                <i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title text-light">BALLISTIC Plate Carrier</h3>
                                    <h3 class="text-light">(With Plate)</h3>
                                    <h4 class="product-price text-light">$8,300</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-16" class="single-product">
                                <div class="part-1">
                                    <span class="new">new</span>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                        <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                data-bs-target="#productModal" data-title="BALLISTIC Plate Carrier"
                                                data-price="$10,000"
                                                data-image="https://www.mku.com/image/cache/catalog/Kavro%20Ballistic%20Vest/Kavro%20Ballistic%20Vest-228x228.png">
                                                <i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title text-light">BALLISTIC Plate Carrier</h3>
                                    <h4 class="product-price text-light">$10,000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!------------------------------------------- BALLISTIC SHIELD SECTION  --------------------------------------------->
                <div class="product-container">
                    <h3 class="Product-head pb-5 text-light text-center">SHIELDS</h3>
                </div>
                <section class="section-products">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-8 col-lg-6">
                            </div>
                        </div>
                        <div class="row">
                            <!-- Single Product -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-17" class="single-product">
                                    <div class="part-1">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                    data-bs-target="#productModal" data-title="BALLISTIC Briefcase"
                                                    data-price="$11,000"
                                                    data-image="https://www.mku.com/image/cache/catalog/SHIELDS/SOFT%20SHIELD/BALLISTIC%20BRIEFCASE_SPB-I-IA/Ballistic_%20briefcase_SPB_Side-463x463.png">
                                                    <i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title text-light">BALLISTIC Briefcase</h3>
                                        <h4 class="product-price text-light">$11,000</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-18" class="single-product">
                                    <div class="part-1">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                    data-bs-target="#productModal"
                                                    data-title="Hand Held Shield (MSH-11)" data-price="$8,500"
                                                    data-image="https://www.mku.com/image/cache/catalog/SHIELDS/HARD%20SHIELD/MSH-11-Shield-Side-228x228.png">
                                                    <i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title text-light">Hand Held Shield (MSH-11)</h3>
                                        <h4 class="product-price text-light">$8,500</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-19" class="single-product">
                                    <div class="part-1">
                                        <span class="new">new</span>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                    data-bs-target="#productModal"
                                                    data-title="BALLISTIC Plate Carrier (MSH-08)" data-price="$9,500"
                                                    data-image="https://www.mku.com/image/cache/catalog/SHIELDS/HARD%20SHIELD/MSH-08-228x228.png">
                                                    <i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title text-light">Hand Held Shield (MSH-08)</h3>
                                        <h4 class="product-price text-light">$9,500</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-20" class="single-product">
                                    <div class="part-1">
                                        <span class="discount">20% off</span>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                    data-bs-target="#productModal"
                                                    data-title="Hand Held Shield (MSH-03)" data-price="$12,000"
                                                    data-image="https://www.mku.com/image/cache/catalog/SHIELDS/HARD%20SHIELD/HARD%20SHIELDS_MHS-03/HARD-SHIELDS-MSH-03-228x228.png">
                                                    <i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title text-light">Hand Held Shield (MSH-03)</h3>
                                        <h4 class="product-old-price text-light">$15,000</h4>
                                        <h4 class="product-price text-light">$12,000</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-21" class="single-product">
                                    <div class="part-1">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                    data-bs-target="#productModal"
                                                    data-title="Hand Held Shield (MSH-04A)" data-price="$11,500"
                                                    data-image="https://www.mku.com/image/cache/catalog/SHIELDS/HARD%20SHIELD/HARD%20SHIELDS_MHS-04/HARD%20SHIELDS_MHS-04%20(2)-228x228.png">
                                                    <i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title text-light">Hand Held Shield (MSH-04A)</h3>
                                        <h4 class="product-price text-light">$11,500</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-22" class="single-product">
                                    <div class="part-1">
                                        <span class="discount">10% off</span>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                    data-bs-target="#productModal"
                                                    data-title="Hand Held Shield (MSH-01)" data-price="$7,500"
                                                    data-image="https://www.mku.com/image/cache/catalog/SHIELDS/HARD%20SHIELD/HARD%20SHIELDS_MHS-01/HARD%20SHIELDS_MHS-01%20(2)-228x228.png">
                                                    <i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title text-light">Hand Held Shield (MSH-01)</h3>
                                        <h4 class="product-old-price text-light">$8,500</h4>
                                        <h4 class="product-price text-light">$7,500</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-23" class="single-product">
                                    <div class="part-1">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                    data-bs-target="#productModal" data-title="BALLISTIC Plate Carrier"
                                                    data-price="$8,500"
                                                    data-image="https://www.mku.com/image/cache/catalog/SHIELDS/HARD%20SHIELD/HARD%20SHIELDS_MHS-02/HARD%20SHIELDS_MHS-02%20(2)-228x228.png">
                                                    <i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title text-light">Hand Held Sheild (MSH-06)</h3>
                                        <h4 class="product-price text-light">$8,500</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-24" class="single-product">
                                    <div class="part-1">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#" class="expand-button" data-bs-toggle="modal"
                                                    data-bs-target="#productModal" data-title="BALLISTIC Plate Carrier"
                                                    data-price="$20,000"
                                                    data-image="https://www.mku.com/image/cache/catalog/SHIELDS/SOFT%20SHIELD/MULTI%20PURPOSE%20SHIELD_SPS-FD-1A/MULTI%20PURPOSE%20SHIELD_SPS-FD-1A%20(4)-228x228.png">
                                                    <i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title text-light">BALLISTIC Bagpack</h3>
                                        <h4 class="product-price text-light">$20,000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
                <x-footer />

                <script src="../../JS/PRODUCTS/PROTECTIVE-GEARS.js"></script>
                <script src="../../JS/navbar.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>