<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
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
    .top-bar {
        background-color: #333;
        overflow: hidden;
        display: flex;
    }
    
    .top-bar button {
        background-color: inherit;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 20px;
        color: white;
        font-size: 16px;
        flex: 1;
        transition: 0.3s;
    }
    
    .top-bar button:hover {
        background-color: maroon;
    }
    
    .top-bar button.active {
        background-color: maroon;
    }
    
    .table-container {
        padding: 20px;
        display: none;
        margin: 20px auto;
        max-width: 90%;
    }
    
    .table-wrapper {
        overflow-x: auto;
        border: 1px solid #444;
        border-radius: 4px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        background-color: #333;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 600px; /* Ensures horizontal scroll when content is wide */
    }
    
    th, td {
        font-family:'Barlow',sans-serif;
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #444;
        color: white;
        border-right:2px solid #000;
    }
    
    th {
        text-align:center;
        background-color: maroon;
        position: sticky;
        top: 0;
        font-weight: 600;
        border-right:2px solid black;
    }
    
    tr {
        text-align:center;
        background-color: #333;
       
    }
    
    /* Scrollbar styling */
    .table-wrapper::-webkit-scrollbar {
        height: 8px;
    }
    
    .table-wrapper::-webkit-scrollbar-track {
        background: #444;
        border-radius: 4px;
    }
    
    .table-wrapper::-webkit-scrollbar-thumb {
        background: maroon;
        border-radius: 4px;
    }
    
    .table-wrapper::-webkit-scrollbar-thumb:hover {
        background: #800000;
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
<!------------------------------------------------------------ADMIN PANEL ------------------------------------------------------------>
    <div class="fs-3 top-bar">
        <button onclick="showTable('users-table')">USERS</button>
        <button onclick="showTable('services-table')">SERVICES</button>
        <button onclick="showTable('orders-table')">ORDERS</button>
    </div>
    
    <div id="users-table" class=" fs-3 table-container">
        <h2 class="text-light text-center py-3" >USERS</h2>
        <div class="table-responsive">
        @isset($users)
        @if($users->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USER ID</th>
                        <th>NAME</th>
                        <th>PICTURE</th>
                        <th>CONTACT</th>
                        <th>EMAIL</th>
                        <th>TYPE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            @if($user->picture)
                                <img src="{{ asset('storage/'.$user->picture) }}" alt="User Image">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $user->countrycode }} {{ $user->contact }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type }}</td>
                        <td>{{ ucfirst($user->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>No users found in database</p>
        @endif
    @else
        <p style="color: red;">ERROR: Users data not passed to view</p>
    @endisset
    </div>
    </div>
    
    <div id="services-table" class="text-center fs-3 table-container">
        <h2 class="text-center text-light py-3">SERVICES</h2>
        <table>
            <thead>
                <tr>
                <th>USERS</th>
                <th>EDIT SUBSCRIPTION</th>
                </tr>
            </thead>
            <tbody>
        @foreach($subscriptions as $subscription)
        <tr>
            <td>{{ $subscription->user->name }}</td>
            <td class="text-center">
                <a href="{{ route('admin.subscriptions.edit', $subscription->user_id) }}" 
                   class="btn btn-sm btn-danger fs-4 text-center">
                    EDIT 
                </a>
</td>
    </td>
</tr>
@endforeach
    </tbody>   
        </table>
    </div>
    
    <div id="orders-table" class="fs-3   table-container">
        <h2 class="py-3 text-light text-center">ORDERS</h2>
        <table>
            <thead>
                <tr>
                    <th>ORDER ID</th>
                    <th>CUSTOMER</th>
                    <th>DATE</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    
    <script>
        // Show the users table by default when the page loads
        window.onload = function() {
            showTable('users-table');
            document.querySelector('.top-bar button').classList.add('active');
        };
        
        function showTable(tableId) {
            // Hide all tables
            const tables = document.getElementsByClassName('table-container');
            for (let i = 0; i < tables.length; i++) {
                tables[i].style.display = 'none';
            }
            
            // Remove active class from all buttons
            const buttons = document.querySelectorAll('.top-bar button');
            buttons.forEach(button => {
                button.classList.remove('active');
            });
            
            // Show the selected table and mark its button as active
            document.getElementById(tableId).style.display = 'block';
            event.currentTarget.classList.add('active');
        }
    </script>

<!------------------------------------------------------------ FOOTER ------------------------------------------------------->
    <x-footer />


    <script src="../JS/navbar.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>