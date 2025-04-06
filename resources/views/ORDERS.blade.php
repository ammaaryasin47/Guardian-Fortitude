<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDERS</title>
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

    
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: black;
            border:2px solid white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .search-filter {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .search-box {
            padding: 8px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .filter-dropdown {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #000;
            position: sticky;
            top: 0;
        }
        tr:hover {
            background-color: white;
            color:black;
        }
        .status-pending {
            color: #ff9800;
            font-weight: bold;
        }
        .status-shipped {
            color: #4caf50;
            font-weight: bold;
        }
        .status-cancelled {
            color: #f44336;
            font-weight: bold;
        }
        .action-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
        }
        .view-btn {
            background-color: #2196F3;
            color: white;
        }
        .edit-btn {
            background-color: #ffc107;
            color: black;
        }
        .delete-btn {
            background-color: #f44336;
            color: white;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination a {
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }
        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
        .card-number {
            font-family: monospace;
        }
        .masked {
            letter-spacing: 2px;
        }
    </style>

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
<!-------------------------------------------------------ORDER TABLE_----------------------------------------------------------->

<div class="container text-light fs-4">
    <h1 class="text-center text-light">YOUR ORDERS</h1>
    
    <div class="search-filter">
        <input type="text" style="background:#000;" class="text-light search-box" placeholder="Search Orders">
        <select style="background-color:black; color:#fff;" class="filter-dropdown">
            <option>All Status</option>
            <option>Pending</option>
            <option>Shipped</option>
            <option>Cancelled</option>
        </select>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Products</th>
                <th>Shipping Address</th>
                <th>Email</th>
                <th>Card Name</th>
                <th>Card Number</th>
                <th>Card Expiry</th>
                <th>Card CVC</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>#{{ $order->id }}</td>
                <td>
                    <ul style="margin: 0; padding-left: 20px;">
                        @if(isset($order->products))
                            @foreach(json_decode($order->products, true) as $product)
                                <li>{{ $product['name'] }} (x{{ $product['quantity'] }})</li>
                            @endforeach
                        @else
                            <li>No products information available</li>
                        @endif
                    </ul>
                </td>
                <td>{{ $order->shipping_address }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->card_name }}</td>
                <td class="card-number">•••• •••• •••• {{ substr($order->card_number, -4) }}</td>
                <td>{{ $order->card_expiry }}</td>
                <td>•••</td>
                <td>${{ number_format($order->total_amount, 2) }}</td>
                <td class="status-{{ strtolower($order->status) }}">{{ ucfirst($order->status) }}</td>
                <td>
                    <button class="action-btn view-btn">View</button>
                    <button class="action-btn edit-btn">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="pagination">
        {{ $orders->links() }}
    </div>
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