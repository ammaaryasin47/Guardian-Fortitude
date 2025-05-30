<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!---- FAVICONS ---->
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-16x16.png" type="image/x-icon">
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/favicon-32x32.png" type="image/png">
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-192x192.png" type="image/svg+xml">
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/android-chrome-512x512.png" type="image/svg+xml">
  <link rel="icon" href="../../IMAGES/HOME/favicon_io/apple-touch-icon.png" type="image/svg+xml">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="ADMIN/https://fonts.gstatic.com" rel="preconnect">
  <link href="ADMIN/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="ADMIN/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="ADMIN/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="ADMIN/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="ADMIN/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="ADMIN/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="ADMIN/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="ADMIN/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../CSS/Navbar&Footer.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="ADMIN/css/style.css" rel="stylesheet">
</head>

<body style="200%">

  <!-- ======= Header ======= -->
  <header style="background:#000;" id="header" class="text-light header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="../IMAGES/HOME/Logo.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav  class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="ADMIN/#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="ADMIN/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="ADMIN/users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="ADMIN/users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="ADMIN/pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="ADMIN/#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="ADMIN/index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="ADMIN/components-alerts.html">
            <i class="bi bi-circle"></i><span>Alerts</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-accordion.html">
            <i class="bi bi-circle"></i><span>Accordion</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-badges.html">
            <i class="bi bi-circle"></i><span>Badges</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-breadcrumbs.html">
            <i class="bi bi-circle"></i><span>Breadcrumbs</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-buttons.html">
            <i class="bi bi-circle"></i><span>Buttons</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-cards.html">
            <i class="bi bi-circle"></i><span>Cards</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-carousel.html">
            <i class="bi bi-circle"></i><span>Carousel</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-list-group.html">
            <i class="bi bi-circle"></i><span>List group</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-modal.html">
            <i class="bi bi-circle"></i><span>Modal</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-tabs.html">
            <i class="bi bi-circle"></i><span>Tabs</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-pagination.html">
            <i class="bi bi-circle"></i><span>Pagination</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-progress.html">
            <i class="bi bi-circle"></i><span>Progress</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-spinners.html">
            <i class="bi bi-circle"></i><span>Spinners</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/components-tooltips.html">
            <i class="bi bi-circle"></i><span>Tooltips</span>
          </a>
        </li>
      </ul>
    </li>End Components Nav -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="ADMIN/#">
        <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="ADMIN/forms-elements.html">
            <i class="bi bi-circle"></i><span>Form Elements</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/forms-layouts.html">
            <i class="bi bi-circle"></i><span>Form Layouts</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/forms-editors.html">
            <i class="bi bi-circle"></i><span>Form Editors</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/forms-validation.html">
            <i class="bi bi-circle"></i><span>Form Validation</span>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="ADMIN/#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="ADMIN/tables-general.html">
            <i class="bi bi-circle"></i><span>General Tables</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/tables-data.html">
            <i class="bi bi-circle"></i><span>Data Tables</span>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="ADMIN/#">
        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="ADMIN/charts-chartjs.html">
            <i class="bi bi-circle"></i><span>Chart.js</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/charts-apexcharts.html">
            <i class="bi bi-circle"></i><span>ApexCharts</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/charts-echarts.html">
            <i class="bi bi-circle"></i><span>ECharts</span>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="ADMIN/#">
        <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="ADMIN/icons-bootstrap.html">
            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/icons-remix.html">
            <i class="bi bi-circle"></i><span>Remix Icons</span>
          </a>
        </li>
        <li>
          <a href="ADMIN/icons-boxicons.html">
            <i class="bi bi-circle"></i><span>Boxicons</span>
          </a>
        </li>
      </ul>
    </li> -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="ADMIN/users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="ADMIN/pages-faq.html">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li> -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="ADMIN/pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li> -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="ADMIN/pages-register.html">
        <i class="bi bi-card-list"></i>
        <span>Register</span>
      </a>
    </li> -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="ADMIN/pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li> -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="ADMIN/pages-error-404.html">
        <i class="bi bi-dash-circle"></i>
        <span>Error 404</span>
      </a>
    </li> -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="ADMIN/pages-blank.html">
        <i class="bi bi-file-earmark"></i>
        <span>Blank</span>
      </a>
    </li> -->

  </ul>

</aside><!-- End Sidebar-->
<main id="main" class="bg-dark text-light main">

    

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="ADMIN/#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="ADMIN/#">Today</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Month</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="ADMIN/#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="ADMIN/#">Today</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Month</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="ADMIN/#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="ADMIN/#">Today</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Month</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="ADMIN/#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="ADMIN/#">Today</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Month</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

           <!-- ----------------------------------------------------- USER LIST ---------------------------------------------------------------------------------------->
            <div style="width:100%;" class="col-12 ">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="ADMIN/#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="ADMIN/#">Today</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Month</a></li>
                    <li><a class="dropdown-item" href="ADMIN/#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title"><span>| Today</span></h5>

                   <table class="table custom-table bg-dark table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">PICTURE</th>
                        <th scope="col">COUNTRYCODE</th>
                        <th scope="col">CONTACT</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">SECTOR</th>
                        <th scope="col">NATURE</th>
                        <th scope="col">ARMS LISCENCE</th>
                        <th scope="col">PUBLIC PROFILE</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">LANGUAGE PREFER</th>
                        <th scope="col">COMMAND PREFER</th>
                        <th scope="col">UPDATE PREFER</th>
                        <th scope="col">PAST THREATS</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      @foreach ($users as $user)
                         <tr>
                            <th scope="row"><a href="ADMIN/#">{{ $user->id }}</a></th>
                              <td>{{ $user->name }}</td>
                               <td>
                             <a href="{{ $user->picture_url }}" class="text-primary">
                            <img src="{{ $user->picture_url }}" alt="User Picture" style="width: 50px; height: 50px;">
                                </a>
                                 </td>
                                <td>{{ $user->countrycode }}</td>
                                <td>{{ $user->contact }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>{{ $user->password }}</td>
                                  <td>{{ $user->sector }}</td>
                                  <td>{{ $user->nature }}</td>
                                  <td>{{ $user->armsliscence }}</td>
                                  <td>{{ $user->publicprofile }}</td>
                                  <td>{{ $user->address }}</td>
                                  <td>{{ $user->langprefer }}</td>
                                  <td>{{ $user->commandprefer }}</td>
                                  <td>{{ $user->updateprefer }}</td>
                                  <td>{{ $user->pastthreats }}</td>
                                  <td>
                        <span class="badge {{ $user->status === 'Approved' ? 'bg-success' : ($user->status === 'Rejected' ? 'bg-danger' : 'bg-warning') }}">
                            {{ $user->status ?? 'Pending' }}
                        </span>
                    </td>
                    <td>
                        <form action="{{ route('users.approve', $user->user_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success btn-sm">Approve</button>
                        </form>
                        <form action="{{ route('users.reject', $user->user_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                        </form>
                    </td>
                </tr>
                         @endforeach
                    </tbody>
                  </table> 
             
                </div>

              </div>
            </div>
            <!------------------------------------------------------- USER LIST END --------------------------------------------------------------------------------->

            <!------------------------------------------------------ SUBSCRIPTIONS LIST --------------------------------------------------------------------->
            
            <div style="overflow-x: scroll; width:100%;">
              <form action="{{ route('admin.subscription.update', $user->user_id) }}" method="POST">
                @csrf
              <table style="background:#000;" class="table custom-table bg-dark table-borderless datatable">
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>USER_ID</th>
                    <th>PERSONAL</th>
                    <th>ASSET</th>
                    <th>SURVEILLANCE</th>
                    <th>SITE</th>
                    <th>TRAINING</th>
                    <th>EXTRACTION</th>
                    <th>ASSAULT TEAM</th>
                    <th>CRISIS MANAGEMENT</th>
                    <th>CYBER SECURITY</th>
                    <th>DETECTIVES</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>
                    <td><input type="text" name="users[{{ $loop->index }}][name]" value="{{ $user->name }}" readonly></td>
                    <td><input type="text" name="users[{{ $loop->index }}][user_id]" value="{{ $user->user_id }}" readonly></td>

                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][personal_protection]"
                              {{ $user->subscription && $user->subscription->personal_protection ? : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][personal_protection_valid_till]" 
                                id="personal_protection_valid_till_{{ $loop->index }}" 
                                value="{{ $user->subscription ? $user->subscription->personal_protection_valid_till : '' }}">
                        <span id="remaining-days-{{ $loop->index }}"></span> 
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][asset_protection]"
                              {{ $user->subscription && $user->subscription->asset_protection ? : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][asset_protection_valid_till]" 
           id="asset_protection_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->asset_protection_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][surveillance_monitoring]"
                              {{ $user->subscription && $user->subscription->surveillance_monitoring ?  : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][surveillance_monitoring_valid_till]" 
           id="surveillance_monitoring_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->surveillance_monitoring_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][site_security]"
                              {{ $user->subscription && $user->subscription->site_security ?  : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][site_security_valid_till]" 
           id="site_security_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->site_security_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][training_consultation]"
                              {{ $user->subscription && $user->subscription->training_consultation ?  : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][training_consultation_valid_till]" 
           id="training_consultation_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->training_consultation_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][emergency_extraction]"
                              {{ $user->subscription && $user->subscription->emergency_extraction ? : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][emergency_extraction_valid_till]" 
           id="emergency_extraction_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->emergency_extraction_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][special_assault_team]"
                              {{ $user->subscription && $user->subscription->special_assault_team ? : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][special_assault_team_valid_till]" 
           id="special_assault_team_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->special_assault_team_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>      
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][emergency_crisis_management]"
                              {{ $user->subscription && $user->subscription->emergency_crisis_management ?  : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][emergency_crisis_management_valid_till]" 
           id="emergency_crisis_management_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->emergency_crisis_management_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][cyber_security]"
                              {{ $user->subscription && $user->subscription->cyber_security ? : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][cyber_security_valid_till]" 
           id="cyber_security_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->cyber_security_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>
                    </td>
                    <td>
                        <input type="checkbox" name="users[{{ $loop->index }}][private_detectives]"
                              {{ $user->subscription && $user->subscription->private_detectives ? : '' }}>
                              <input type="hidden" name="users[{{ $loop->index }}][private_detectives_valid_till]" 
           id="private_detectives_valid_till_{{ $loop->index }}" 
           value="{{ $user->subscription ? $user->subscription->private_detectives_valid_till : '' }}">
    <span id="remaining-days-{{ $loop->index }}"></span>
                    </td>
                </tr>

                @endforeach
                </tbody>
              </table>
              <button type="submit" style="background:maroon; color:#fff;" class="btn mt-3">Save Changes</button>
            </form>
            </div>


          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->


</div><!-- End Right side columns -->

</div>
</section>

</main><!-- End #main -->



<!-- Vendor JS Files -->
<script src="ADMIN/vendor/apexcharts/apexcharts.min.js"></script>
<script src="ADMIN/vendor/chart.js/chart.umd.js"></script>
<script src="ADMIN/vendor/echarts/echarts.min.js"></script>
<script src="ADMIN/vendor/quill/quill.js"></script>
<script src="ADMIN/vendor/simple-datatables/simple-datatables.js"></script>
<script src="ADMIN/vendor/tinymce/tinymce.min.js"></script>
<script src="ADMIN/vendor/php-email-form/validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script> <!--BOOTSTRAP JS-->

<!-- Template Main JS File -->
<script src="ADMIN/js/main.js"></script>
<script>
<script>
document.addEventListener("DOMContentLoaded", function() {

  // Function to update valid_till and remaining days
  function updateValidTill(checkbox, index, fieldName) {
    const validTillField = document.getElementById(`${fieldName}_valid_till_${index}`);
    const remainingDaysElement = document.getElementById(`remaining-days-${index}`);

    if (checkbox.checked) {
      // Set the valid_till to 1 year from now (for example)
      const validTillDate = new Date();
      validTillDate.setFullYear(validTillDate.getFullYear() + 1); // 1 year validity
      validTillField.value = validTillDate.toISOString().split('T')[0]; // Format as YYYY-MM-DD

      // Calculate remaining days
      const timeRemaining = validTillDate - new Date();
      const daysRemaining = Math.floor(timeRemaining / (1000 * 60 * 60 * 24)); // Convert to days
      remainingDaysElement.innerText = `${daysRemaining} days remaining`;
    } else {
      validTillField.value = '';
      remainingDaysElement.innerText = '';
    }
  }

  // Trigger JavaScript when the form is submitted
  const form = document.querySelector('form');
  form.addEventListener('submit', function(event) {
    // Prevent form submission to allow JavaScript to update first
    event.preventDefault();

    // Loop through each user and update the valid_till fields
    @foreach ($users as $user)
      let checkbox = document.querySelector(`input[name="users[{{ $loop->index }}][personal_protection]"]`);
      if (checkbox) {
        updateValidTill(checkbox, {{ $loop->index }}, 'personal_protection');
      }

      // Repeat for other checkboxes...
      let assetCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][asset_protection]"]`);
      if (assetCheckbox) {
        updateValidTill(assetCheckbox, {{ $loop->index }}, 'asset_protection');
      }

      let surveillanceCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][surveillance_monitoring]"]`);
      if (surveillanceCheckbox) {
        updateValidTill(surveillanceCheckbox, {{ $loop->index }}, 'surveillance_monitoring');
      }

      let siteSecurityCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][site_security]"]`);
      if (siteSecurityCheckbox) {
        updateValidTill(siteSecurityCheckbox, {{ $loop->index }}, 'site_security');
      }

      let trainingCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][training_consultation]"]`);
      if (trainingCheckbox) {
        updateValidTill(trainingCheckbox, {{ $loop->index }}, 'training_consultation');
      }

      let extractionCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][emergency_extraction]"]`);
      if (extractionCheckbox) {
        updateValidTill(extractionCheckbox, {{ $loop->index }}, 'emergency_extraction');
      }

      let assaultCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][special_assault_team]"]`);
      if (assaultCheckbox) {
        updateValidTill(assaultCheckbox, {{ $loop->index }}, 'special_assault_team');
      }

      let crisisCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][emergency_crisis_management]"]`);
      if (crisisCheckbox) {
        updateValidTill(crisisCheckbox, {{ $loop->index }}, 'emergency_crisis_management');
      }

      let cyberCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][cyber_security]"]`);
      if (cyberCheckbox) {
        updateValidTill(cyberCheckbox, {{ $loop->index }}, 'cyber_security');
      }

      let detectivesCheckbox = document.querySelector(`input[name="users[{{ $loop->index }}][private_detectives]"]`);
      if (detectivesCheckbox) {
        updateValidTill(detectivesCheckbox, {{ $loop->index }}, 'private_detectives');
      }
    @endforeach

    // After updating all fields, submit the form
    form.submit();
  });
});
</script>



</script>
</body>

</html>
