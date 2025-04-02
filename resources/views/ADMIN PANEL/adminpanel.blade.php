<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <script>
        fetch('/admin/users/b4393740-c758-4e1d-a4da-05fef3f8678f/approve', {
    method: 'PATCH',
    headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    }
}).then(r => r.json()).then(console.log)
    </script>
    <link href="../CSS/ABOUTUS.css" rel="stylesheet">
    <!---- FAVICONS ---->
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
    <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">
    <style>
        /* Loading spinner */
.fa-spinner {
    margin-right: 5px;
}

/* Alert positioning */
.alert {
    transition: all 0.3s ease;
}

/* Table styling */
.table-responsive {
    overflow-x: auto;
}

/* Button spacing */
.btn-group .btn {
    margin-right: 5px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .table td, .table th {
        padding: 0.5rem;
        font-size: 0.875rem;
    }
    
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
}
    </style>
    <script>
// 1. First make sure we can find elements
console.log("=== STARTING TAB SETUP ===");

const buttons = document.querySelectorAll('div.bg-dark button.tab-button');
const tabs = document.querySelectorAll('div[id$="-tab"]');

console.log(`Found ${buttons.length} buttons and ${tabs.length} tabs`);

// 2. Show tab function with maximum debugging
function showTab(targetId) {
    console.log(`Attempting to show tab: ${targetId}`);
    
    // Hide all tabs
    tabs.forEach(tab => {
        console.log(`Hiding tab: ${tab.id}`);
        tab.style.display = 'none';
        tab.classList.remove('active');
    });
    
    // Show selected tab
    const targetTab = document.getElementById(targetId);
    if (targetTab) {
        console.log(`Showing tab: ${targetTab.id}`);
        targetTab.style.display = 'block';
        targetTab.classList.add('active');
    } else {
        console.error(`Tab not found: ${targetId}`);
    }
    
    // Update button states
    buttons.forEach(btn => {
        btn.classList.remove('active');
        if (btn.getAttribute('data-target') === targetId) {
            btn.classList.add('active');
        }
    });
}

// 3. Add click handlers with event delegation as fallback
document.body.addEventListener('click', function(event) {
    if (event.target.closest('.tab-button')) {
        const button = event.target.closest('.tab-button');
        console.log("Tab button clicked via delegation:", button);
        showTab(button.getAttribute('data-target'));
    }
});

// 4. Initialize - show first tab
if (buttons.length > 0) {
    console.log("Initializing first tab");
    buttons[0].classList.add('active');
    showTab(buttons[0].getAttribute('data-target'));
} else {
    console.error("No tab buttons found!");
}

console.log("=== TAB SETUP COMPLETE ===");
</script>
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


<!--------------------------------------------------------------SUB NAVBAR ------------------------------------------------------->
<div class="bg-dark d-flex justify-content-around align-items-center p-3 fs-2 tab-buttons-container">
    <button class="tab-button active" data-tab="users-tab">USERS</button>
    <button class="tab-button" data-tab="services-tab">SERVICES</button>
    <button class="tab-button" data-tab="orders-tab">ORDERS</button>
</div>

<div id="users-tab" class="table-tab table-container mt-4 fs-3" data-tab-content>
    <h2 class="text-center p-5 text-light">USER MANAGEMENT</h2>
    
    <!-- Success/Error Messages -->
    <div id="alert-container" class="position-fixed top-0 end-0 p-3" style="z-index: 9999"></div>
    
    <div class="table-responsive">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PROFILE</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>CONTACT</th>
                    <th>TYPE</th>
                    <th>STATUS</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr data-user-id="{{ $user->user_id }}">
                    <td>{{ $user->user_id }}</td>
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
        <span class="badge {{ $user->status === 'approved' ? 'bg-success' : ($user->status === 'rejected' ? 'bg-danger' : 'bg-warning') }}">
            {{ ucfirst($user->status ?? 'pending') }}
        </span>
    </td>
    <td>
        <div class="btn-group">
            @if($user->status != 'approved')
            <button class="btn btn-success btn-sm approve-btn" 
                    data-user-id="{{ $user->user_id }}">
                <i class="fas fa-check"></i> Approve
            </button>
            @endif
            
            @if($user->status != 'rejected')
            <button class="btn btn-danger btn-sm reject-btn" 
                    data-user-id="{{ $user->user_id }}">
                <i class="fas fa-times"></i> Reject
            </button>
            @endif
        </div>
    </td>
    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="d-flex justify-content-center mt-3">
        {{ $users->links() }}
    </div>
</div>
@push('scripts')
<script>
   async function handleStatusChange(userId, action) {
    const button = document.querySelector(`.${action}-btn[data-user-id="${userId}"]`);
    const row = document.querySelector(`tr[data-user-id="${userId}"]`);
    
    if (!button || !row) return;

    const originalHtml = button.innerHTML;
    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
    button.disabled = true;

    try {
        const response = await fetch(`/admin/users/${userId}/${action}`, {
            method: 'PATCH',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }
        });

        const data = await response.json();
        
        if (!response.ok) throw new Error(data.message || 'Action failed');

        // Update the UI immediately
        updateUserRowUI(row, data.new_status);
        
        // Show success feedback
        showAlert(data.message, 'success');

    } catch (error) {
        console.error('Error:', error);
        showAlert(error.message, 'danger');
        button.innerHTML = originalHtml;
        button.disabled = false;
    }
}

function updateUserRowUI(row, newStatus) {
    // Update status badge
    const statusBadge = row.querySelector('.badge');
    if (statusBadge) {
        statusBadge.className = newStatus === 'approved' 
            ? 'badge bg-success' 
            : 'badge bg-danger';
        statusBadge.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
    }

    // Update action buttons
    const buttonGroup = row.querySelector('.btn-group');
    if (buttonGroup) {
        if (newStatus === 'approved') {
            // Remove approve button, keep reject if needed
            const approveBtn = buttonGroup.querySelector('.approve-btn');
            if (approveBtn) approveBtn.remove();
        } else if (newStatus === 'rejected') {
            // Remove reject button, keep approve if needed
            const rejectBtn = buttonGroup.querySelector('.reject-btn');
            if (rejectBtn) rejectBtn.remove();
        }
    }
}

function showAlert(message, type = 'success') {
    const alertHtml = `
        <div class="alert alert-${type} alert-dismissible fade show position-fixed top-0 end-0 m-3">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    `;
    
    const alertContainer = document.getElementById('alert-container') || document.body;
    alertContainer.insertAdjacentHTML('afterbegin', alertHtml);
    
    // Auto-dismiss after 5 seconds
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if (alert) alert.remove();
    }, 5000);
}
</script>
@endpush
<!----------------------------------------------------------------SERVICES TAB ------------------------------------------------------->
<div id="services-tab" class="table-tab d-none table-container mt-4 fs-3" data-tab-content>
    <h2 class="text-center p-5 text-light">USER SERVICES MANAGEMENT</h2>
    
    <div id="alert-container" class="position-fixed top-0 end-0 p-3" style="z-index: 9999"></div>
    
    <div class="table-responsive">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>USER</th>
                    <th>PROFILE</th>
                    <th>NAME</th>
                    <th>Personal Protection</th>
                    <th>Asset Protection</th>
                    <th>Surveillance Monitoring</th>
                    <th>Site Security</th>
                    <th>Training Consultation</th>
                    <th>Emergency Extraction</th>
                    <th>Special Assault Team</th>
                    <th>Emergency Crisis Management</th>
                    <th>Cyber Security</th>
                    <th>Private Detectives</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr data-user-id="{{ $user->user_id }}">
                    <td>{{ $user->user_id }}</td>
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
                    
                    <!-- Service Checkboxes -->
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="personal_protection"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->personal_protection ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="asset_protection"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->asset_protection ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="surveillance_monitoring"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->surveillance_monitoring ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="site_security"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->site_security ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="training_consultation"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->training_consultation ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="emergency_extraction"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->emergency_extraction ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="special_assault_team"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->special_assault_team ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="emergency_crisis_management"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->emergency_crisis_management ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="cyber_security"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->cyber_security ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input service-checkbox" type="checkbox" 
                                   data-service="private_detectives"
                                   data-user-id="{{ $user->user_id }}"
                                   {{ $user->subscription && $user->subscription->private_detectives ? 'checked' : '' }}>
                        </div>
                    </td>
                    
                    <td>
                        <button class="btn btn-primary btn-sm save-services-btn"
                                data-user-id="{{ $user->user_id }}">
                            <i class="fas fa-save"></i> Save
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="d-flex justify-content-center mt-3">
        {{ $users->links() }}
    </div>
</div>

@push('styles')
<style>
    .service-checkbox {
        width: 20px;
        height: 20px;
        cursor: pointer;
    }
    .save-services-btn {
        font-size: 0.875rem;
        padding: 0.25rem 0.5rem;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle checkbox changes
    document.querySelectorAll('.service-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const userId = this.getAttribute('data-user-id');
            const saveBtn = document.querySelector(`.save-services-btn[data-user-id="${userId}"]`);
            if (saveBtn) {
                saveBtn.classList.add('btn-warning');
                saveBtn.innerHTML = '<i class="fas fa-exclamation-circle"></i> Save Changes';
            }
        });
    });

    // Handle save button clicks
    document.querySelectorAll('.save-services-btn').forEach(button => {
        button.addEventListener('click', async function() {
            const userId = this.getAttribute('data-user-id');
            const checkboxes = document.querySelectorAll(`.service-checkbox[data-user-id="${userId}"]`);
            
            const services = {};
            checkboxes.forEach(checkbox => {
                services[checkbox.getAttribute('data-service')] = checkbox.checked;
            });

            try {
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Saving...';
                this.disabled = true;
                
                const response = await fetch(`/admin/users/${userId}/services`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ services })
                });

                const data = await response.json();
                
                if (!response.ok) throw new Error(data.message || 'Failed to save services');

                this.classList.remove('btn-warning');
                this.classList.add('btn-success');
                this.innerHTML = '<i class="fas fa-check"></i> Saved!';
                
                setTimeout(() => {
                    this.classList.remove('btn-success');
                    this.innerHTML = '<i class="fas fa-save"></i> Save';
                    this.disabled = false;
                }, 2000);

            } catch (error) {
                console.error('Error:', error);
                this.innerHTML = '<i class="fas fa-times"></i> Error';
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-save"></i> Save';
                    this.disabled = false;
                }, 2000);
            }
        });
    });
});
</script>
@endpush

<!----------------------------------------------------------------ORDERS TAB ------------------------------------------------------->
<div id="orders-tab" class="table-tab d-none" data-tab-content>
    <!-- Your orders table HTML would go here -->
    <div class="table-container mt-4 fs-3">
        <h2 class="text-center p-5 text-light">ORDERS MANAGEMENT</h2>
        <p class="text-center text-light">Orders table content would go here</p>
    </div>
</div>

    @push('styles')
<style>
    /* Tab buttons styling */
    .tab-button {
        background: none;
        border: none;
        color: #aaa;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }
    
    .tab-button.active {
        color: white;
        border-bottom: 3px solid #0d6efd;
        font-weight: bold;
    }
    
    .tab-button:hover:not(.active) {
        color: #ddd;
    }
    
    /* Tab content visibility */
    [data-tab-content] {
        display: none;
    }
    
    [data-tab-content].active {
        display: block;
    }
    
    /* Override Bootstrap's d-none if needed */
    [data-tab-content].active.d-none {
        display: block !important;
    }
</style>
@endpush

@push('scripts') 
<script>
console.log("SIMPLEST POSSIBLE TEST - DELETE ME LATER");
alert("JavaScript is loading!");
</script>

   
@endpush

    <script src="../JS/navbar.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->
</body>

</html>