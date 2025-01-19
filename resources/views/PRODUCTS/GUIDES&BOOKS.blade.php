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
    <link href="../../CSS/PRODUCTS/GUIDES&BOOKS.css" rel="stylesheet">
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

    <!--------------------------------------------- NAVBAR ----------------------------------------------------->
    <x-productsnavbar />

    <!--------------------------------------------------------------- BANNER --------------------------------------------------------->
    <div class="books-banner">
        <img src="https://i.pinimg.com/736x/84/15/b5/8415b57b5f1469181c28f76744d516f2.jpg"
            class="w-100 object-fit-cover">
        <div class="books-title">
            <h1 class="text-light">GUIDES & BOOKS</h1>
            <p class="books-intro text-center text-light"><span style="font-size: 4rem; color: maroon;">W</span>elcome
                To
                The Open Source Library Page , &nbsp; A Free To Read Section Of E-Books From Guardian Fortitude
                Charitable Trust,
                Where We Strive To Support The Less
                Literate By Offering Free & Accessible Resources To Empower Their Journey Towards Knowledge.
                This Library Stands As A Beacon Of Hope, Providing Books, Educational Tools, And Digital Materials That
                Cater To Diverse Needs And Learning Levels. At Guardian Fortitude, We Believe That Education Is A
                Fundamental Right, And Through This Initiative, We Aim To Bridge Gaps And Foster Lifelong Learning For
                Everyone.</p>
        </div>
    </div>

    <!--------------------------------------------------------- NEW RELEASE --------------------------------------------------------->
    <div style=" margin: 2rem; border: 2px solid grey;" class="books-container text-light">
        <div class="newrelease my-5 ps-5">
            <h6 style="display: flex; justify-content: start; letter-spacing: 6px;">NEW RELEASE</h6>
        </div>
        <div>
            <div>BOOK NAME</div>
            <div></div>
        </div>
    </div>


    <div class="popular text-light text-center">
        <h1> MOST POPULAR </h1>


        <div class="container d-flex">
            <div class="cardcontainer">
                <div class="photo">
                    <img src="https://media3.ubook.com/catalog/book-cover-image/549940/400x600/1811111245-100-deadly-skills-the-seal-operatives-guide-to-eluding-pursuers-evading-capture-and-surviving-any-dangerous-situation.jpg"
                        alt="City Lights">
                </div>
                <div class="content">
                    <p class="fs-1">100 <br> DEADLY SKILLS</p>
                    <p class="fs-3">CLINT EMERSON</p>
                    <p class="fs-5">A Practical Guide Detailing Survival Techniques Inspired By Special Forces.</p>
                </div>
                <div class="book-footer">
                    <a target="_blank" style="font-size:1.5rem; text-decoration:none; color:white; background:maroon; border-radius:0.3rem;" class="text-center px-4 py-3" href="https://drive.google.com/file/d/1IVO2CjZ3WpU99k30NPxU0j0j0bJmp4d_/view?usp=sharing">READ</a>
                </div>
            </div>
            <div class="cardcontainer">
                <div class="photo">
                    <img src="https://m.media-amazon.com/images/I/91dLDp5XzYL._UF1000,1000_QL80_.jpg" alt="City Lights">
                </div>
                <div class="content">
                    <p class="fs-1">HACKING : THE ART OF EXPLOITATION</p>
                    <p class="fs-3">ERICKSON</p>
                    <p class="fs-5">A Comprehensive Guide To Understand The Technical Foundations Of Hacking. </p>
                </div>
                <div class="book-footer">
                    <a  target="_blank" style="font-size:1.5rem; text-decoration:none; color:white; background:maroon; border-radius:0.3rem;" class="m-5 text-center px-4 py-3" href="#">READ</a>
                </div>
            </div>
            <div class="cardcontainer">
                <div class="photo">
                    <img src="data:image/jpeg;base64,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"
                        alt="City Lights">
                </div>
                <div class="content">
                    <p class="fs-1">LAW FOR THE LAYMAN</p>
                    <p class="fs-3">MINISTRY OF INFORMATION & BROADCASTING , INDIA</p>
                    <p class="fs-5">A Practical Guide That Presents Essential Legal Concepts In Accessible Language.</p>
                </div>
                <div class="book-footer">
                    <a style="font-size:1.5rem; text-decoration:none; color:white; background:maroon; border-radius:0.3rem;" class="text-center px-4 py-3 m-5" href="https://drive.google.com/file/d/1Q7_cltT-XB9O_nl9WvspnfXqAxnvga0K/view?usp=sharing"  target="_blank">READ</a>
                </div>
            </div>
        </div>

        <div class="container d-flex">
            <div class="cardcontainer">
                <div class="photo">
                    <img src="https://m.media-amazon.com/images/I/61vKRgeuSGL._AC_UF1000,1000_QL80_.jpg"
                        alt="City Lights">
                </div>
                <div class="content">
                    <p class="fs-1">THE ART OF DECEPTION</p>
                    <p class="fs-3">KELVIN D. MITNIK</p>
                    <p class="fs-5">It Explores The Psychology Of Social Engineering And How Attackers Manipulate People To Gain Sensitive Information.</p>
                </div>
                <div class="book-footer">
                    <a style="font-size:1.5rem; text-decoration:none; color:white; background:maroon; border-radius:0.3rem;" class="text-center px-4 py-3 m-5" href="https://drive.google.com/file/d/1m7coiUOY88lXM7gwXsfiF2Wv5iz2x2Do/view?usp=sharing"  target="_blank">READ</a>
                </div>
            </div>
            <div class="cardcontainer">
                <div class="photo">
                    <img src="https://m.media-amazon.com/images/I/4179SEOOobL._UF1000,1000_QL80_.jpg"
                        alt="City Lights">
                </div>
                <div class="content">
                    <p class="fs-1">HANDBOOK OF CRIME PREVENTION</p>
                    <p class="fs-3">LAWRENCE J. FENNELLY</p>
                    <p class="fs-5">A Comprehensive Resource That Offers Practical Solutions For Safeguarding Individuals And Property, Makeing A Valueable Asset.</p>
                </div>
                <div class="book-footer">
                    <a style="font-size:1.5rem; text-decoration:none; color:white; background:maroon; border-radius:0.3rem;" class="text-center px-4 py-3 m-5" href="https://drive.google.com/file/d/1m7coiUOY88lXM7gwXsfiF2Wv5iz2x2Do/view?usp=sharing"  target="_blank">READ</a>
                </div>
            </div>
            <div class="cardcontainer">
                <div class="photo">
                    <img src="https://m.media-amazon.com/images/I/91920apJNBL._UF1000,1000_QL80_.jpg"
                        alt="City Lights">
                </div>
                <div class="content">
                    <p class="fs-1">METASPLOIT : THE PENETRATION TESTER'S GUIDE</p>
                    <p class="fs-3">KELVIN D. MITNIK</p>
                    <p class="fs-5">It Explores The Psychology Of Social Engineering And How Attackers Manipulate People To Gain Sensitive Information.</p>
                </div>
                <div class="book-footer">
                    <a style="font-size:1.5rem; text-decoration:none; color:white; background:maroon; border-radius:0.3rem;" class="text-center px-4 py-3 m-5" href="https://drive.google.com/file/d/1m7coiUOY88lXM7gwXsfiF2Wv5iz2x2Do/view?usp=sharing"  target="_blank">READ</a>
                </div>
            </div>
        </div>

        <div class="container d-flex">
            <div class="cardcontainer">
                <div class="photo">
                    <img src="https://m.media-amazon.com/images/I/4179SEOOobL._UF1000,1000_QL80_.jpg"
                        alt="City Lights">
                </div>
                <div class="content">
                    <p class="fs-1">HANDBOOK OF CRIME PREVENTION</p>
                    <p class="fs-3">LAWRENCE J. FENNELLY</p>
                    <p class="fs-5">A Comprehensive Resource That Offers Practical Solutions For Safeguarding Individuals And Property.</p>
                </div>
                <div class="book-footer">
                    <a style="font-size:1.5rem; text-decoration:none; color:white; background:maroon; border-radius:0.3rem;" class="text-center px-4 py-3 m-5" href="https://drive.google.com/file/d/1m7coiUOY88lXM7gwXsfiF2Wv5iz2x2Do/view?usp=sharing"  target="_blank">READ</a>
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