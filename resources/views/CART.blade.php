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
  <link href="../CSS/INDEX.css" rel="stylesheet">
  <!---- FAVICONS ---->
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">
  <style>
                

.space{
    letter-spacing: 0.8px !important;
}

.second a:hover {
    color: rgb(92, 92, 92) ;
}

.active-2 {
    color: rgb(92, 92, 92) 
}


.breadcrumb>li+li:before {
    content: "" !important
}

.breadcrumb {
    padding: 0px;
    font-size: 10px;
    color: #aaa !important;
}

.first {
    background-color: white ;
}

a {
    text-decoration: none !important;
    color: #aaa ;
}

.btn-lg,.form-control-sm:focus,
.form-control-sm:active,
a:focus,a:active {
    outline: none !important;
    box-shadow: none !important
}

.form-control-sm:focus{
    border:1.5px solid #4bb8a9 ; 
}

.btn-group-lg>.btn, .btn-lg {
    padding: .5rem 0.1rem;
    font-size: 1rem;
    border-radius: 0;
    color: white !important;
    background-color: #4bb8a9;
    height: 2.8rem !important;
    border-radius: 0.2rem !important;
}

.btn-group-lg>.btn:hover, .btn-lg:hover {
    background-color: #800000;
}

.btn-outline-primary{
    background-color: #fff !important;
    color:#4bb8a9 !important;
    border-radius: 0.2rem !important;   
    border:1px solid #4bb8a9;
}

.btn-outline-primary:hover{
    background-color:#4bb8a9  !important;
    color:#fff !important;
    border:1px solid #4bb8a9;
}

.card-2{
    margin-top: 40px !important;
}

.card-header{
    background-color: #fff;
    border-bottom:0px solid #aaaa !important;
}

p{
    font-size: 13px ;
}
        
.small{
    font-size: 9px !important;
}

.form-control-sm {
    height: calc(2.2em + .5rem + 2px);
    font-size: .875rem;
    line-height: 1.5;
    border-radius: 0;   
}

.cursor-pointer{
    cursor: pointer;
}

.boxed {
    padding: 0px 8px 0 8px ;
    background-color: #4bb8a9;
    color: white;
}

.boxed-1{
    padding: 0px 8px 0 8px ;
    color: black !important;
    border: 1px solid #aaaa;
}

.bell{
    opacity: 0.5;
    cursor: pointer;
}

  </style>
</head>

<body>
  <!--------------------------------------------- NAVBAR ----------------------------------------------------->
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
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">CART</a></li>
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

<!----------------------------------------------- CART ---------------------------------------------------------------->

<div class=" container-fluid my-5 ">
    <div class="row justify-content-center ">
        <div class="col-xl-10">
            <div style="background:#000;" class="card shadow-lg">
                <div class="row justify-content-evenly">
                    <div style="border-right:2px solid white;" class="pe-5 col-md-5">
                        <div class="card border-0">
                            <div style="background:#000; color:#fff;" class="text-center fs-2 card-header pb-0">
                                <h2 style="color:maroon;" class="card-title space">CHECKOUT</h2>
                                <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p>
                                <hr class="my-0">
                            </div>
                            <div style="background:#000; color:#fff;" class=" card-body">
                                <div class="fs-4 row justify-content-between">
                                    <div class="col-auto mt-0"><p><b>{{ $address }}</b></p></div>
                                    <div class="col-auto"><p><b>{{ $email }}</b> </p></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col"><p style="color:maroon;" class="text-center fs-3 mb-2">PAYMENT DETAILS</p><hr class="mt-0"></div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="NAME" class="fs-5 text-muted mb-1">NAME ON CARD</label>
                                    <input type="text" class="form-control form-control-sm fs-5" name="NAME" id="NAME" aria-describedby="helpId" placeholder="" requireq>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="NAME" class="fs-5 text-muted mb-1">CARD NUMBER</label>
                                    <input type="text" class="form-control form-control-sm fs-5" name="NAME" id="NAME" aria-describedby="helpId" placeholder="XXXX XXXX XXXX XXXX" required>
                                </div>
                                <br>
                                <div class="row no-gutters">
                                    <div class="col-sm-6 pr-sm-2">
                                        <div class="form-group">
                                            <label for="NAME" class="fs-5 text-muted mb-1">VALID THROUGH</label>
                                            <input type="text" class="form-control form-control-sm fs-5" name="NAME" id="NAME" aria-describedby="helpId" placeholder="XX/XX" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="NAME" class="fs-5 text-muted mb-1">CVC CODE</label>
                                            <input type="text" class="form-control form-control-sm fs-5" name="NAME" id="NAME" aria-describedby="helpId" placeholder="XXX" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center row mb-md-5">
                                <div class="col">
                                    <a style="background:maroon; outline:none; border:0;" href="{{URL::to('/paymentcomplete')}}" class="px-3 fs-5 btn-lg btn-block text-decoration-none text-white d-inline-block text-center">PURCHASE</a>
                                </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <div style="background:#000; color:#fff;" class="card border-0">
                        <div style="background:#000;" class="card-header card-2">
                            <p style="color:maroon;" class="text-center card-text mt-md-4 fs-4 mb-2 card-title space">
                                YOUR ORDERS <br>
                                <span class="fs-6 text-muted ml-2 cursor-pointer">SHOPPING CART</span>
                            </p>
                            <hr class="my-2">
                        </div>
                        <div class="card-body pt-0">
                            @foreach($cartItems as $item)
                            <div class="row d-flex justify-content-center align-items-center text-center mb-3">
                                <div class="fs-3 col-auto col-md-7">
                                    <div class="media d-flex flex-column flex-md-row align-items-center justify-content-center text-center">
                                    <img class="img-fluid" src="{{ asset($item->product->image_url) }}" width="800" height="800">
                                    <p class="mb-0"><b>{{ $item->product->name }}</b></p>
                                        <div class="media-body my-auto">
                                            <p class="fs-3 mb-0"><b>{{ $item->name }}</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity-container d-flex justify-content-center align-items-center text-center">
                                    <input style="background:#000; width:max-content; color:#fff;" 
                                        type="number" class="fs-5 form-control form-control-sm text-center quantity-input" 
                                        value="{{ $item->quantity }}" min="1">
                                </div>
                                <div class="pl-0 flex-sm-col col-auto my-auto">
                                    <p><b>${{ number_format($item->price * $item->quantity, 2) }}</b></p>
                                </div>
                                <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="outline:none; background:#000; border:0;" 
                                            class="text-center text-light fs-6 pl-0 flex-sm-col col-auto my-5">
                                        REMOVE
                                    </button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
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