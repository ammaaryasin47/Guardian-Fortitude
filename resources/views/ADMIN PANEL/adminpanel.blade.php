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
                    <li><a class="dropdown-item" href="{{ route('logout') }}">LOGOUT</a></li>
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


<!--------------------------------------------------------------SUB NAVBAR ------------------------------------------------------->

    <div class="subnavbar fs-2 text-light ">
        <ul class="list-unstyled d-flex justify-content-around align-items-center gap-5" style="border-bottom: 1px solid #fff; padding:1rem;">
            <li><a href="{{URL::to('/aboutus')}}"></a>USERS</li>
            <li><a href="{{URL::to('/services')}}"></a>SERVICES</li>
            <li><a href="{{URL::to('/products')}}"></a>ORDERS</li>
        </ul>
    </div>

    <div id="users" class="content-div">
    <div class="container mt-4">
        <h2>User Approval Dashboard</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>User ID</th>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ Str::limit($user->user_id, 8) }}</td>
                                <td>
                                    @if($user->picture)
                                        <img src="{{ Storage::disk('public')->url($user->picture) }}" 
                                             class="rounded-circle" width="40" height="40" alt="Profile">
                                    @else
                                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center" 
                                             style="width:40px;height:40px;">
                                            <i class="fas fa-user text-white"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->countrycode }} {{ $user->contact }}</td>
                                <td>{{ ucfirst($user->type) }}</td>
                                <td>
                                    <span class="badge 
                                        @if($user->status === 'approved') bg-success
                                        @elseif($user->status === 'rejected') bg-danger
                                        @else bg-warning text-dark @endif">
                                        {{ ucfirst($user->status ?? 'pending') }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        @if($user->status !== 'approved')
                                        <form action="{{ route('users.approve', $user->user_id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm btn-success">
                                                <i class="fas fa-check"></i> Approve
                                            </button>
                                        </form>
                                        @endif
                                        
                                        @if($user->status !== 'rejected')
                                        <form action="{{ route('users.reject', $user->user_id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm btn-danger ms-1">
                                                <i class="fas fa-times"></i> Reject
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                @if($users->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $users->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    .table th {
        white-space: nowrap;
    }
    .badge {
        font-size: 0.85em;
        padding: 0.35em 0.65em;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.765rem;
    }
</style>
@endpush

    <div id="services"  class="content-div" style="display: none;"></div>
    <div id="orders"  class="content-div" style="display: none;"></div> 
    <!------------------------------------------------------------ FOOTER ------------------------------------------------------->
    <x-footer />

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Add click event to each link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the target div ID
            const targetId = this.getAttribute('data-target');
            
            // Hide all content divs
            document.querySelectorAll('.content-div').forEach(div => {
                div.style.display = 'none';
            });
            
            // Show the target div
            document.getElementById(targetId).style.display = 'block';
        });
    });
    
    // Show users div by default
    document.getElementById('users').style.display = 'block';
});
</script>

    <script src="../JS/navbar.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>