<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Admin Dashboard | Sistem Informasi Program Studi Informatika</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Admin Dashboard | Sistem Informasi Program Studi Informatika">
    <meta name="author" content="ColorlibHQ">
    <link rel="icon" href="{{ asset('images/prodi1.png') }}" type="image/png">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                    <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li> <!--end::Navbar Search--> <!--begin::Messages Dropdown Menu-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="{{ asset('images/prodi1.png') }}" alt="Admin Informatika" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                        </h3>
                                        <p class="fs-7">Call me whenever you can...</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="{{ asset('images/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i> </span>
                                        </h3>
                                        <p class="fs-7">I got your message bro</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"> <img src="{{ asset('images/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i> </span>
                                        </h3>
                                        <p class="fs-7">The subject goes here</p>
                                        <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div> <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li> <!--end::Messages Dropdown Menu--> <!--begin::Notifications Dropdown Menu-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                                <span class="float-end text-secondary fs-7">3 mins</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                                <span class="float-end text-secondary fs-7">12 hours</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                                <span class="float-end text-secondary fs-7">2 days</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
                                See All Notifications
                            </a>
                        </div>
                    </li> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="{{ asset('images/user2-160x160.jpg')}}" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Alexander Pierce</span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="{{ asset('images/user2-160x160.jpg')}}" class="rounded-circle shadow" alt="User Image">
                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2023</small>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                            <li class="user-body"> <!--begin::Row-->
                                <div class="row">
                                    <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                                </div> <!--end::Row-->
                            </li> <!--end::Menu Body--> <!--begin::Menu Footer-->
                            <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="light"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="{{ asset('images/prodi1.png') }}" alt="Admin Informatika" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">Admin Informatika</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item "> <a href="{{ route('admin.dashboard') }}" class="nav-link "> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>

                        </li>
                        
                        <li class="nav-item"> <a href="{{ route('admin.pengumuman') }}" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                                <p>
                                    Kelola Pengumuman
                                    <span class="nav-badge badge text-bg-secondary me-1"></span> 
                                </p>
                            </a>
                            
                        </li>
                        <li class="nav-item"> <a href="{{ route('admin.berita') }}" class="nav-link"> <i class="nav-icon bi bi-tree-fill"></i>
                                <p>
                                    Kelola Berita
                                </p>
                            </a>
                            
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link "> <i class="nav-icon bi bi-tree-fill"></i>
                            <p>
                                Kelola Persuratan
                                <i class="nav-arrow bi bi-chevron-right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./index.html" class="nav-link "> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Pengantar</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./index2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Izin</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Keterangan</p>
                                </a> </li>
                                <li class="nav-item"> <a href="./index.html" class="nav-link "> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Permohonan</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./index2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Undangan</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Tugas</p>
                                </a> </li>
                                <li class="nav-item"> <a href="./index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Rekomendasi</p>
                                </a> </li>
                                <li class="nav-item"> <a href="./index.html" class="nav-link "> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Panggilan</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./index2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Keputusan (SK)</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Dispensasi</p>
                                </a> </li>
                                <li class="nav-item"> <a href="./index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Surat Penolakan</p>
                                </a> </li>
                        </ul>
                    </li>
                        <li class="nav-item"> <a href="{{ route('admin.data_user') }}" class="nav-link"> <i class="nav-icon bi bi-table"></i>
                                <p>
                                    Kelola Data User
                                </p>
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>Logout</p>
                            </a>
                            <!-- Hidden form for logout -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard Admin</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard Admin
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div>
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"> <span class="info-box-icon text-bg-primary shadow-sm"> <i class="bi bi-gear-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">CPU Traffic</span> <span class="info-box-number">
                                        10
                                        <small>%</small> </span> </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"> <span class="info-box-icon text-bg-danger shadow-sm"> <i class="bi bi-hand-thumbs-up-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Likes</span> <span class="info-box-number">41,410</span> </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col --> <!-- fix for small devices only --> <!-- <div class="clearfix hidden-md-up"></div> -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"> <span class="info-box-icon text-bg-success shadow-sm"> <i class="bi bi-cart-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Sales</span> <span class="info-box-number">760</span> </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"> <span class="info-box-icon text-bg-warning shadow-sm"> <i class="bi bi-people-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">New Members</span> <span class="info-box-number">2,000</span> </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row --> <!--begin::Row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Monthly Recap Report</h5>
                                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button>
                                        <div class="btn-group"> <button type="button" class="btn btn-tool dropdown-toggle" data-bs-toggle="dropdown"> <i class="bi bi-wrench"></i> </button>
                                            <div class="dropdown-menu dropdown-menu-end" role="menu"> <a href="#" class="dropdown-item">Action</a> <a href="#" class="dropdown-item">Another action</a> <a href="#" class="dropdown-item">
                                                    Something else here
                                                </a> <a class="dropdown-divider"></a> <a href="#" class="dropdown-item">Separated link</a> </div>
                                        </div> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button>
                                    </div>
                                </div> <!-- /.card-header -->
                                <div class="card-body"> <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="text-center"> <strong>Sales: 1 Jan, 2023 - 30 Jul, 2023</strong> </p>
                                            <div id="sales-chart"></div>
                                        </div> <!-- /.col -->
                                        <div class="col-md-4">
                                            <p class="text-center"> <strong>Goal Completion</strong> </p>
                                            <div class="progress-group">
                                                Add Products to Cart
                                                <span class="float-end"><b>160</b>/200</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar text-bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div> <!-- /.progress-group -->
                                            <div class="progress-group">
                                                Complete Purchase
                                                <span class="float-end"><b>310</b>/400</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar text-bg-danger" style="width: 75%"></div>
                                                </div>
                                            </div> <!-- /.progress-group -->
                                            <div class="progress-group"> <span class="progress-text">Visit Premium Page</span> <span class="float-end"><b>480</b>/800</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar text-bg-success" style="width: 60%"></div>
                                                </div>
                                            </div> <!-- /.progress-group -->
                                            <div class="progress-group">
                                                Send Inquiries
                                                <span class="float-end"><b>250</b>/500</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar text-bg-warning" style="width: 50%"></div>
                                                </div>
                                            </div> <!-- /.progress-group -->
                                        </div> <!-- /.col -->
                                    </div> <!--end::Row-->
                                </div> <!-- ./card-body -->
                                <div class="card-footer"> <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-md-3 col-6">
                                            <div class="text-center border-end"> <span class="text-success"> <i class="bi bi-caret-up-fill"></i> 17%
                                                </span>
                                                <h5 class="fw-bold mb-0">$35,210.43</h5> <span class="text-uppercase">TOTAL REVENUE</span>
                                            </div>
                                        </div> <!-- /.col -->
                                        <div class="col-md-3 col-6">
                                            <div class="text-center border-end"> <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 0%
                                                </span>
                                                <h5 class="fw-bold mb-0">$10,390.90</h5> <span class="text-uppercase">TOTAL COST</span>
                                            </div>
                                        </div> <!-- /.col -->
                                        <div class="col-md-3 col-6">
                                            <div class="text-center border-end"> <span class="text-success"> <i class="bi bi-caret-up-fill"></i> 20%
                                                </span>
                                                <h5 class="fw-bold mb-0">$24,813.53</h5> <span class="text-uppercase">TOTAL PROFIT</span>
                                            </div>
                                        </div> <!-- /.col -->
                                        <div class="col-md-3 col-6">
                                            <div class="text-center"> <span class="text-danger"> <i class="bi bi-caret-down-fill"></i> 18%
                                                </span>
                                                <h5 class="fw-bold mb-0">1200</h5> <span class="text-uppercase">GOAL COMPLETIONS</span>
                                            </div>
                                        </div>
                                    </div> <!--end::Row-->
                                </div> <!-- /.card-footer -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!--end::Row--> <!--begin::Row-->
                    <div class="row"> <!-- Start col -->
                        <div class="col-md-8"> <!--begin::Row-->
                            <div class="row g-4 mb-4">
                                <div class="col-md-6"> <!-- DIRECT CHAT -->
                                    <div class="card direct-chat direct-chat-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Direct Chat</h3>
                                            <div class="card-tools"> <span title="3 New Messages" class="badge text-bg-warning">
                                                    3
                                                </span> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> <button type="button" class="btn btn-tool" title="Contacts" data-lte-toggle="chat-pane"> <i class="bi bi-chat-text-fill"></i> </button> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button> </div>
                                        </div> <!-- /.card-header -->
                                        <div class="card-body"> <!-- Conversations are loaded here -->
                                            <div class="direct-chat-messages"> <!-- Message. Default to the start -->
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-start">
                                                            Alexander Pierce
                                                        </span> <span class="direct-chat-timestamp float-end">
                                                            23 Jan 2:00 pm
                                                        </span> </div> <!-- /.direct-chat-infos --> <img class="direct-chat-img" src="{{ asset('images/user1-128x128.jpg')}}" alt="message user image"> <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        Is this template really for free? That's
                                                        unbelievable!
                                                    </div> <!-- /.direct-chat-text -->
                                                </div> <!-- /.direct-chat-msg --> <!-- Message to the end -->
                                                <div class="direct-chat-msg end">
                                                    <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-end">
                                                            Sarah Bullock
                                                        </span> <span class="direct-chat-timestamp float-start">
                                                            23 Jan 2:05 pm
                                                        </span> </div> <!-- /.direct-chat-infos --> <img class="direct-chat-img" src="{{ asset('images/user3-128x128.jpg')}}" alt="message user image"> <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        You better believe it!
                                                    </div> <!-- /.direct-chat-text -->
                                                </div> <!-- /.direct-chat-msg --> <!-- Message. Default to the start -->
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-start">
                                                            Alexander Pierce
                                                        </span> <span class="direct-chat-timestamp float-end">
                                                            23 Jan 5:37 pm
                                                        </span> </div> <!-- /.direct-chat-infos --> <img class="direct-chat-img" src="{{ asset('images/user1-128x128.jpg')}}" alt="message user image"> <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        Working with AdminLTE on a great new app! Wanna
                                                        join?
                                                    </div> <!-- /.direct-chat-text -->
                                                </div> <!-- /.direct-chat-msg --> <!-- Message to the end -->
                                                <div class="direct-chat-msg end">
                                                    <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-end">
                                                            Sarah Bullock
                                                        </span> <span class="direct-chat-timestamp float-start">
                                                            23 Jan 6:10 pm
                                                        </span> </div> <!-- /.direct-chat-infos --> <img class="direct-chat-img" src="{{ asset('images/user3-128x128.jpg')}}" alt="message user image"> <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">I would love to.</div> <!-- /.direct-chat-text -->
                                                </div> <!-- /.direct-chat-msg -->
                                            </div> <!-- /.direct-chat-messages--> <!-- Contacts are loaded here -->
                                            <div class="direct-chat-contacts">
                                                <ul class="contacts-list">
                                                    <li> <a href="#"> <img class="contacts-list-img" src="{{ asset('images/user1-128x128.jpg')}}" alt="User Avatar">
                                                            <div class="contacts-list-info"> <span class="contacts-list-name">
                                                                    Count Dracula
                                                                    <small class="contacts-list-date float-end">
                                                                        2/28/2023
                                                                    </small> </span> <span class="contacts-list-msg">
                                                                    How have you been? I was...
                                                                </span> </div> <!-- /.contacts-list-info -->
                                                        </a> </li> <!-- End Contact Item -->
                                                    <li> <a href="#"> <img class="contacts-list-img" src="{{ asset('images/user7-128x128.jpg')}}" alt="User Avatar">
                                                            <div class="contacts-list-info"> <span class="contacts-list-name">
                                                                    Sarah Doe
                                                                    <small class="contacts-list-date float-end">
                                                                        2/23/2023
                                                                    </small> </span> <span class="contacts-list-msg">
                                                                    I will be waiting for...
                                                                </span> </div> <!-- /.contacts-list-info -->
                                                        </a> </li> <!-- End Contact Item -->
                                                    <li> <a href="#"> <img class="contacts-list-img" src="{{ asset('images/user3-128x128.jpg')}}" alt="User Avatar">
                                                            <div class="contacts-list-info"> <span class="contacts-list-name">
                                                                    Nadia Jolie
                                                                    <small class="contacts-list-date float-end">
                                                                        2/20/2023
                                                                    </small> </span> <span class="contacts-list-msg">
                                                                    I'll call you back at...
                                                                </span> </div> <!-- /.contacts-list-info -->
                                                        </a> </li> <!-- End Contact Item -->
                                                    <li> <a href="#"> <img class="contacts-list-img" src="{{ asset('images/user5-128x128.jpg')}}" alt="User Avatar">
                                                            <div class="contacts-list-info"> <span class="contacts-list-name">
                                                                    Nora S. Vans
                                                                    <small class="contacts-list-date float-end">
                                                                        2/10/2023
                                                                    </small> </span> <span class="contacts-list-msg">
                                                                    Where is your new...
                                                                </span> </div> <!-- /.contacts-list-info -->
                                                        </a> </li> <!-- End Contact Item -->
                                                    <li> <a href="#"> <img class="contacts-list-img" src="{{ asset('images/user6-128x128.jpg')}}" alt="User Avatar">
                                                            <div class="contacts-list-info"> <span class="contacts-list-name">
                                                                    John K.
                                                                    <small class="contacts-list-date float-end">
                                                                        1/27/2023
                                                                    </small> </span> <span class="contacts-list-msg">
                                                                    Can I take a look at...
                                                                </span> </div> <!-- /.contacts-list-info -->
                                                        </a> </li> <!-- End Contact Item -->
                                                    <li> <a href="#"> <img class="contacts-list-img" src="{{ asset('images/user8-128x128.jpg')}}" alt="User Avatar">
                                                            <div class="contacts-list-info"> <span class="contacts-list-name">
                                                                    Kenneth M.
                                                                    <small class="contacts-list-date float-end">
                                                                        1/4/2023
                                                                    </small> </span> <span class="contacts-list-msg">
                                                                    Never mind I found...
                                                                </span> </div> <!-- /.contacts-list-info -->
                                                        </a> </li> <!-- End Contact Item -->
                                                </ul> <!-- /.contacts-list -->
                                            </div> <!-- /.direct-chat-pane -->
                                        </div> <!-- /.card-body -->
                                        <div class="card-footer">
                                            <form action="#" method="post">
                                                <div class="input-group"> <input type="text" name="message" placeholder="Type Message ..." class="form-control"> <span class="input-group-append"> <button type="button" class="btn btn-warning">
                                                            Send
                                                        </button> </span> </div>
                                            </form>
                                        </div> <!-- /.card-footer-->
                                    </div> <!-- /.direct-chat -->
                                </div> <!-- /.col -->
                                <div class="col-md-6"> <!-- USERS LIST -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Latest Members</h3>
                                            <div class="card-tools"> <span class="badge text-bg-danger">
                                                    8 New Members
                                                </span> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button> </div>
                                        </div> <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <div class="row text-center m-1">
                                                <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('images/user1-128x128.jpg')}}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                        Alexander Pierce
                                                    </a>
                                                    <div class="fs-8">Today</div>
                                                </div>
                                                <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('images/user1-128x128.jpg')}}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                        Norman
                                                    </a>
                                                    <div class="fs-8">Yesterday</div>
                                                </div>
                                                <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('images/user7-128x128.jpg')}}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                        Jane
                                                    </a>
                                                    <div class="fs-8">12 Jan</div>
                                                </div>
                                                <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('images/user6-128x128.jpg')}}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                        John
                                                    </a>
                                                    <div class="fs-8">12 Jan</div>
                                                </div>
                                                <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('images/user2-160x160.jpg')}}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                        Alexander
                                                    </a>
                                                    <div class="fs-8">13 Jan</div>
                                                </div>
                                                <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('images/user5-128x128.jpg')}}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                        Sarah
                                                    </a>
                                                    <div class="fs-8">14 Jan</div>
                                                </div>
                                                <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('images/user4-128x128.jpg')}}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                        Nora
                                                    </a>
                                                    <div class="fs-8">15 Jan</div>
                                                </div>
                                                <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('images/user3-128x128.jpg')}}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                        Nadia
                                                    </a>
                                                    <div class="fs-8">15 Jan</div>
                                                </div>
                                            </div> <!-- /.users-list -->
                                        </div> <!-- /.card-body -->
                                        <div class="card-footer text-center"> <a href="javascript:" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View All Users</a> </div> <!-- /.card-footer -->
                                    </div> <!-- /.card -->
                                </div> <!-- /.col -->
                            </div> <!--end::Row--> <!--begin::Latest Order Widget-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Latest Orders</h3>
                                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button> </div>
                                </div> <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Item</th>
                                                    <th>Status</th>
                                                    <th>Popularity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a> </td>
                                                    <td>Call of Duty IV</td>
                                                    <td> <span class="badge text-bg-success">
                                                            Shipped
                                                        </span> </td>
                                                    <td>
                                                        <div id="table-sparkline-1"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a> </td>
                                                    <td>Samsung Smart TV</td>
                                                    <td> <span class="badge text-bg-warning">Pending</span> </td>
                                                    <td>
                                                        <div id="table-sparkline-2"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a> </td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td> <span class="badge text-bg-danger">
                                                            Delivered
                                                        </span> </td>
                                                    <td>
                                                        <div id="table-sparkline-3"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a> </td>
                                                    <td>Samsung Smart TV</td>
                                                    <td> <span class="badge text-bg-info">Processing</span> </td>
                                                    <td>
                                                        <div id="table-sparkline-4"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a> </td>
                                                    <td>Samsung Smart TV</td>
                                                    <td> <span class="badge text-bg-warning">Pending</span> </td>
                                                    <td>
                                                        <div id="table-sparkline-5"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a> </td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td> <span class="badge text-bg-danger">
                                                            Delivered
                                                        </span> </td>
                                                    <td>
                                                        <div id="table-sparkline-6"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a> </td>
                                                    <td>Call of Duty IV</td>
                                                    <td> <span class="badge text-bg-success">Shipped</span> </td>
                                                    <td>
                                                        <div id="table-sparkline-7"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-responsive -->
                                </div> <!-- /.card-body -->
                                <div class="card-footer clearfix"> <a href="javascript:void(0)" class="btn btn-sm btn-primary float-start">
                                        Place New Order
                                    </a> <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-end">
                                        View All Orders
                                    </a> </div> <!-- /.card-footer -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                        <div class="col-md-4"> <!-- Info Boxes Style 2 -->
                            <div class="info-box mb-3 text-bg-warning"> <span class="info-box-icon"> <i class="bi bi-tag-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Inventory</span> <span class="info-box-number">5,200</span> </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                            <div class="info-box mb-3 text-bg-success"> <span class="info-box-icon"> <i class="bi bi-heart-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Mentions</span> <span class="info-box-number">92,050</span> </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                            <div class="info-box mb-3 text-bg-danger"> <span class="info-box-icon"> <i class="bi bi-cloud-download"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Downloads</span> <span class="info-box-number">114,381</span> </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                            <div class="info-box mb-3 text-bg-info"> <span class="info-box-icon"> <i class="bi bi-chat-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Direct Messages</span> <span class="info-box-number">163,921</span> </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Browser Usage</h3>
                                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button> </div>
                                </div> <!-- /.card-header -->
                                <div class="card-body"> <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="pie-chart"></div>
                                        </div> <!-- /.col -->
                                    </div> <!--end::Row-->
                                </div> <!-- /.card-body -->
                                <div class="card-footer p-0">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item"> <a href="#" class="nav-link">
                                                United States of America
                                                <span class="float-end text-danger"> <i class="bi bi-arrow-down fs-7"></i>
                                                    12%
                                                </span> </a> </li>
                                        <li class="nav-item"> <a href="#" class="nav-link">
                                                India
                                                <span class="float-end text-success"> <i class="bi bi-arrow-up fs-7"></i> 4%
                                                </span> </a> </li>
                                        <li class="nav-item"> <a href="#" class="nav-link">
                                                China
                                                <span class="float-end text-info"> <i class="bi bi-arrow-left fs-7"></i> 0%
                                                </span> </a> </li>
                                    </ul>
                                </div> <!-- /.footer -->
                            </div> <!-- /.card --> <!-- PRODUCT LIST -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Recently Added Products</h3>
                                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button> </div>
                                </div> <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="px-2">
                                        <div class="d-flex border-top py-2 px-1">
                                            <div class="col-2"> <img src="{{ asset('images/default-150x150.png')}}" alt="Product Image" class="img-size-50"> </div>
                                            <div class="col-10"> <a href="javascript:void(0)" class="fw-bold">
                                                    Samsung TV
                                                    <span class="badge text-bg-warning float-end">
                                                        $1800
                                                    </span> </a>
                                                <div class="text-truncate">
                                                    Samsung 32" 1080p 60Hz LED Smart HDTV.
                                                </div>
                                            </div>
                                        </div> <!-- /.item -->
                                        <div class="d-flex border-top py-2 px-1">
                                            <div class="col-2"> <img src="{{ asset('images/default-150x150.png')}}" alt="Product Image" class="img-size-50"> </div>
                                            <div class="col-10"> <a href="javascript:void(0)" class="fw-bold">
                                                    Bicycle
                                                    <span class="badge text-bg-info float-end">
                                                        $700
                                                    </span> </a>
                                                <div class="text-truncate">
                                                    26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                                </div>
                                            </div>
                                        </div> <!-- /.item -->
                                        <div class="d-flex border-top py-2 px-1">
                                            <div class="col-2"> <img src="{{ asset('images/default-150x150.png')}}" alt="Product Image" class="img-size-50"> </div>
                                            <div class="col-10"> <a href="javascript:void(0)" class="fw-bold">
                                                    Xbox One
                                                    <span class="badge text-bg-danger float-end">
                                                        $350
                                                    </span> </a>
                                                <div class="text-truncate">
                                                    Xbox One Console Bundle with Halo Master Chief
                                                    Collection.
                                                </div>
                                            </div>
                                        </div> <!-- /.item -->
                                        <div class="d-flex border-top py-2 px-1">
                                            <div class="col-2"> <img src="{{ asset('images/default-150x150.png')}}" alt="Product Image" class="img-size-50"> </div>
                                            <div class="col-10"> <a href="javascript:void(0)" class="fw-bold">
                                                    PlayStation 4
                                                    <span class="badge text-bg-success float-end">
                                                        $399
                                                    </span> </a>
                                                <div class="text-truncate">
                                                    PlayStation 4 500GB Console (PS4)
                                                </div>
                                            </div>
                                        </div> <!-- /.item -->
                                    </div>
                                </div> <!-- /.card-body -->
                                <div class="card-footer text-center"> <a href="javascript:void(0)" class="uppercase">
                                        View All Products
                                    </a> </div> <!-- /.card-footer -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
        <footer class="app-footer"> <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div> <!--end::To the end--> <!--begin::Copyright--> <strong>
                Progam Studi Informatika Copyright &copy;2024&nbsp;
                <a href="https://adminlte.io" class="text-decoration-none">Admin Informatika</a>
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('assets/js/adminlte.js') }}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        const visitors_chart_options = {
            series: [{
                    name: "High - 2023",
                    data: [100, 120, 170, 167, 180, 177, 160],
                },
                {
                    name: "Low - 2023",
                    data: [60, 80, 70, 67, 80, 77, 100],
                },
            ],
            chart: {
                height: 200,
                type: "line",
                toolbar: {
                    show: false,
                },
            },
            colors: ["#0d6efd", "#adb5bd"],
            stroke: {
                curve: "smooth",
            },
            grid: {
                borderColor: "#e7e7e7",
                row: {
                    colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
                    opacity: 0.5,
                },
            },
            legend: {
                show: false,
            },
            markers: {
                size: 1,
            },
            xaxis: {
                categories: ["22th", "23th", "24th", "25th", "26th", "27th", "28th"],
            },
        };

        const visitors_chart = new ApexCharts(
            document.querySelector("#visitors-chart"),
            visitors_chart_options
        );
        visitors_chart.render();

        const sales_chart_options = {
            series: [{
                    name: "Net Profit",
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
                },
                {
                    name: "Revenue",
                    data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
                },
                {
                    name: "Free Cash Flow",
                    data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
                },
            ],
            chart: {
                type: "bar",
                height: 200,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "55%",
                    endingShape: "rounded",
                },
            },
            legend: {
                show: false,
            },
            colors: ["#0d6efd", "#20c997", "#ffc107"],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                show: true,
                width: 2,
                colors: ["transparent"],
            },
            xaxis: {
                categories: [
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                ],
            },
            fill: {
                opacity: 1,
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands";
                    },
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector("#sales-chart"),
            sales_chart_options
        );
        sales_chart.render();
    </script> <!--end::Script-->
</body><!--end::Body-->

</html>