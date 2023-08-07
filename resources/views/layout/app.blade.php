<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SPK | Dinas Pendidikan KKU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/css/icons.min.css" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/css/app.min.css" rel="stylesheet"
        type="text/css" />

    @stack('style')

</head>

<body data-topbar="dark" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('layout.header')

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    <i class="mdi mdi-storefront mr-2"></i>Dashboard
                                </a>
                            </li> --}}

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('daftar-tenaga-honor') }}">
                                    <i class="mdi mdi-account-box-multiple"></i>Daftar Tenaga honor
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('komponen') }}">
                                    <i class="mdi mdi-book"></i>Komponen
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('aturan') }}">
                                    <i class="mdi mdi-book-plus"></i>Aturan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('seleksi') }}">
                                    <i class="mdi mdi-book-plus"></i>Seleksi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('hasil_seleksi') }}">
                                    <i class="mdi mdi-book-plus"></i>Hasil Seleksi
                                </a>
                            </li>
                            {{-- <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-format-underline mr-2"></i>UI Elements <div class="arrow-down">
                                    </div>
                                </a>
                                <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="topnav-uielement">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div>
                                                <a href="ui-alerts.html" class="dropdown-item">Alerts</a>
                                                <a href="ui-badge.html" class="dropdown-item">Badge</a>
                                                <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                                <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                                <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                                <a href="ui-navs.html" class="dropdown-item">Navs</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <a href="ui-tabs-accordions.html" class="dropdown-item">Tabs &amp;
                                                    Accordions</a>
                                                <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                                <a href="ui-images.html" class="dropdown-item">Images</a>
                                                <a href="ui-progressbars.html" class="dropdown-item">Progress Bars</a>
                                                <a href="ui-pagination.html" class="dropdown-item">Pagination</a>
                                                <a href="ui-popover-tooltips.html" class="dropdown-item">Popover &
                                                    Tooltips</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <a href="ui-spinner.html" class="dropdown-item">Spinner</a>
                                                <a href="ui-carousel.html" class="dropdown-item">Carousel</a>
                                                <a href="ui-video.html" class="dropdown-item">Video</a>
                                                <a href="ui-typography.html" class="dropdown-item">Typography</a>
                                                <a href="ui-grid.html" class="dropdown-item">Grid</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li> --}}

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-cloud-print-outline mr-2"></i>Components <div class="arrow-down">
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-email" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Email <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                            <a href="email-inbox.html" class="dropdown-item">Inbox</a>
                                            <a href="email-read.html" class="dropdown-item">Email Read</a>
                                            <a href="email-compose.html" class="dropdown-item">Email Compose</a>
                                        </div>
                                    </div>
                                    <a href="calendar.html" class="dropdown-item">Calendar</a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-icon" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Icons <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-icon">
                                            <a href="icons-materialdesign.html" class="dropdown-item">Material
                                                Design</a>
                                            <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                            <a href="icons-fontawesome.html" class="dropdown-item">Font awesome 5</a>
                                            <a href="icons-themify.html" class="dropdown-item">Themify</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-table" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Tables <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-table">
                                            <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                            <a href="tables-datatable.html" class="dropdown-item">Data Tables</a>
                                            <a href="tables-responsive.html" class="dropdown-item">Responsive
                                                Table</a>
                                            <a href="tables-editable.html" class="dropdown-item">Editable Table</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-form" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Forms <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                                            <a href="form-elements.html" class="dropdown-item">Form Elements</a>
                                            <a href="form-validation.html" class="dropdown-item">Form Validation</a>
                                            <a href="form-advanced.html" class="dropdown-item">Form Advanced</a>
                                            <a href="form-editors.html" class="dropdown-item">Form Editors</a>
                                            <a href="form-uploads.html" class="dropdown-item">Form File Upload</a>
                                            <a href="form-mask.html" class="dropdown-item">Form Mask</a>
                                            <a href="form-summernote.html" class="dropdown-item">Summernote</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-table" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Charts <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-table">
                                            <a href="charts-morris.html" class="dropdown-item">Morris</a>
                                            <a href="charts-apex.html" class="dropdown-item">Apex</a>
                                            <a href="charts-chartist.html" class="dropdown-item">Chartist</a>
                                            <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a>
                                            <a href="charts-flot.html" class="dropdown-item">Flot</a>
                                            <a href="charts-sparkline.html" class="dropdown-item">Sparkline</a>
                                            <a href="charts-knob.html" class="dropdown-item">Jquery Knob</a>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-advancedui"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-package-variant-closed mr-2"></i>Advanced UI <div
                                        class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-advancedui">
                                    <a href="advanced-alertify.html" class="dropdown-item">Alertify</a>
                                    <a href="advanced-rating.html" class="dropdown-item">Rating</a>
                                    <a href="advanced-nestable.html" class="dropdown-item">Nestable</a>
                                    <a href="advanced-rangeslider.html" class="dropdown-item">Range Slider</a>
                                    <a href="advanced-sweet-alert.html" class="dropdown-item">Sweet-Alert</a>
                                    <a href="advanced-lightbox.html" class="dropdown-item">Lightbox</a>
                                    <a href="advanced-maps.html" class="dropdown-item">Maps</a>
                                </div>
                            </li> --}}

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-file-document-box-multiple-outline mr-2"></i>Extra pages <div
                                        class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-auth" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Authentication <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                            <a href="auth-login.html" class="dropdown-item">Login</a>
                                            <a href="auth-register.html" class="dropdown-item">Register</a>
                                            <a href="auth-recoverpw.html" class="dropdown-item">Recover Password</a>
                                            <a href="auth-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-utility" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Utility <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                            <a href="pages-comingsoon.html" class="dropdown-item">Coming Soon</a>
                                            <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                            <a href="pages-gallery.html" class="dropdown-item">Gallery</a>
                                            <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                            <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                            <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-flip-horizontal mr-2"></i>Daftar Tenaga Honor <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                    <a href="layouts-topbar-light.html" class="dropdown-item">Topbar light</a>
                                    <a href="layouts-boxed-width.html" class="dropdown-item">Boxed width</a>
                                    <a href="layouts-colored-header.html" class="dropdown-item">Colored Header</a>
                                </div>
                            </li> --}}

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
@yield('content')
                    <!-- end page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            @include('layout.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <!-- Nav tabs -->
            {{-- <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-message-text font-size-22"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                        <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                        <i class="mdi mdi-settings font-size-22"></i>
                    </a>
                </li>
            </ul> --}}

            <!-- Tab panes -->
            {{-- <div class="tab-content text-muted">
                <div class="tab-pane active" id="chat-tab" role="tabpanel">

                    <form class="search-bar py-4 px-3">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>

                    <h6 class="font-weight-medium px-4 mt-2 text-uppercase">Group Chats</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                            <span class="mb-0 mt-1">App Development</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                            <span class="mb-0 mt-1">Office Work</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                            <span class="mb-0 mt-1">Personal Group</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                            <span class="mb-0 mt-1">Freelance</span>
                        </a>
                    </div>

                    <h6 class="font-weight-medium px-4 mt-4 text-uppercase">Favourites</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Rory Dalyell</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">To an English person, it will seem like
                                            simplified</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Jaxon Dunhill</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <h6 class="font-weight-medium px-4 mt-4 text-uppercase">Other Chats</h6>

                    <div class="p-2 pb-4">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Jackson Therry</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Charles Deakin</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Ryan Salting</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">If several languages coalesce the grammar of the
                                            resulting.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Sean Howse</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Dean Coward</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1">Hayley East</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0 text-truncate">One could refuse to pay expensive translators.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="tab-pane" id="tasks-tab" role="tabpanel">
                    <h6 class="font-weight-medium px-3 mb-0 mt-4">Working Tasks</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                    aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"
                                    aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <h6 class="font-weight-medium px-3 mb-0 mt-4">Upcoming Tasks</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 12%"
                                    aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"
                                    aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 84%"
                                    aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <div class="p-3 mt-2">
                        <a href="javascript: void(0);"
                            class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                    </div>

                </div>
                <div class="tab-pane" id="settings-tab" role="tabpanel">
                    <h6 class="font-weight-medium px-4 py-3 text-uppercase bg-light">General Settings</h6>

                    <div class="p-4">
                        <h6 class="font-weight-medium">Online Status</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check1"
                                name="settings-check1" checked="">
                            <label class="custom-control-label font-weight-normal" for="settings-check1">Show your
                                status to all</label>
                        </div>

                        <h6 class="font-weight-medium mt-4">Auto Updates</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check2"
                                name="settings-check2" checked="">
                            <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to
                                date</label>
                        </div>

                        <h6 class="font-weight-medium mt-4">Backup Setup</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check3"
                                name="settings-check3">
                            <label class="custom-control-label font-weight-normal" for="settings-check3">Auto
                                backup</label>
                        </div>

                    </div>

                    <h6 class="font-weight-medium px-4 py-3 mt-2 text-uppercase bg-light">Advanced Settings</h6>

                    <div class="p-4">
                        <h6 class="font-weight-medium">Application Alerts</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check4"
                                name="settings-check4" checked="">
                            <label class="custom-control-label font-weight-normal" for="settings-check4">Email
                                Notifications</label>
                        </div>

                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check5"
                                name="settings-check5">
                            <label class="custom-control-label font-weight-normal" for="settings-check5">SMS
                                Notifications</label>
                        </div>

                        <h6 class="font-weight-medium mt-4">API</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check6"
                                name="settings-check6">
                            <label class="custom-control-label font-weight-normal" for="settings-check6">Enable
                                access</label>
                        </div>

                    </div>
                </div>
            </div> --}}

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/node-waves/waves.min.js"></script>

    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/js/app.js"></script>
@stack('scripts')
</body>

</html>
