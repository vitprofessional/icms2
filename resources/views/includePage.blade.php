<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
    <!-- Mirrored from themesbrand.com/velzon/html/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Oct 2024 18:08:30 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/public/admin/default/')}}/assets/images/favicon.ico" />

        <!-- jsvectormap css -->
        <link href="{{asset('/public/admin/default/')}}/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="{{asset('/public/admin/default/')}}/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

        <!-- Layout config Js -->
        <script src="{{asset('/public/admin/default/')}}/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('/public/admin/default/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('/public/admin/default/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('/public/admin/default/')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('/public/admin/default/')}}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        <!-- custom css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="index-2.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{asset('/public/admin/default/')}}/assets/images/logo-sm.png" alt="" height="22" />
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('/public/admin/default/')}}/assets/images/logo-dark.png" alt="" height="17" />
                                    </span>
                                </a>

                                <a href="index-2.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{asset('/public/admin/default/')}}/assets/images/logo-sm.png" alt="" height="22" />
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('/public/admin/default/')}}/assets/images/logo-light.png" alt="" height="17" />
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <!-- App Search-->
                            <form class="app-search d-none d-md-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="" />
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                    <div data-simplebar style="max-height: 320px;">
                                        <!-- item-->
                                        <div class="dropdown-header">
                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                        </div>

                                        <div class="dropdown-item bg-transparent text-wrap">
                                            <a href="index-2.html" class="btn btn-soft-secondary btn-sm rounded-pill">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                            <a href="index-2.html" class="btn btn-soft-secondary btn-sm rounded-pill">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                                        </div>
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Analytics Dashboard</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Help Center</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                            <span>My account settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="{{asset('/public/admin/default/')}}/assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <h6 class="m-0">Angela Bernier</h6>
                                                        <span class="fs-11 mb-0 text-muted">Manager</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="{{asset('/public/admin/default/')}}/assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <h6 class="m-0">David Grasso</h6>
                                                        <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="{{asset('/public/admin/default/')}}/assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <h6 class="m-0">Mike Bunch</h6>
                                                        <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="text-center pt-3 pb-1">
                                        <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="dropdown d-md-none topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-search fs-22"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class=" ms-sm-3 header-item">
                                <a class="align-middle" href="#">
                                    <i class="fa-solid fa-left-from-bracket fa-flip-horizontal fa-xl"></i> 
                                    <span class="" data-key="t-logout">Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width: 100px; height: 100px;"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index-2.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('/public/admin/default/')}}/assets/images/logo-sm.png" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('/public/admin/default/')}}/assets/images/logo-dark.png" alt="" height="17" />
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index-2.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('/public/admin/default/')}}/assets/images/logo-sm.png" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('/public/admin/default/')}}/assets/images/logo-light.png" alt="" height="17" />
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">
                        <div id="two-column-menu"></div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Dashboard</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="fa-solid fa-user-plus"></i> <span data-key="t-dashboards">Addmission</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarDashboards">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('newAdmission')}}" class="nav-link" data-key="t-analytics">New Addmission </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-crm">Student List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class="fa-regular fa-money-bills"></i> <span data-key="t-apps">Tuition Fees</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('tutionFee')}}" class="nav-link" data-key="t-chat"> Collect Fees </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-file-manager.html" class="nav-link"> <span data-key="t-file-manager">Check Data</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="fa-solid fa-calculator-simple"></i> <span data-key="t-layouts">Cash Calculas</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLayouts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('cashCalculas')}}" class="nav-link" data-key="t-horizontal">Debit/Credit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layouts-detached.html"  class="nav-link" data-key="t-detached">Get Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- end Dashboard Menu -->

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="fa-solid fa-file"></i><span data-key="t-pages">Reports</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> Gallery </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search Results </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-privacy-policy.html" class="nav-link" data-key="t-privacy-policy">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-term-conditions.html" class="nav-link" data-key="t-term-conditions">Term & Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                                <i class="fa-sharp-duotone fa-light fa-gear"></i> <span data-key="t-base-ui">Settings</span>
                                </a>
                                <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-links.html" class="nav-link"><span data-key="t-links">Links</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('body')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                Institutaion control management system.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by  Virtual IT Professional
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('/public/admin/default/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/public/admin/default/')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('/public/admin/default/')}}/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('/public/admin/default/')}}/assets/libs/feather-icons/feather.min.js"></script>
        <script src="{{asset('/public/admin/default/')}}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="{{asset('/public/admin/default/')}}/assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="{{asset('/public/admin/default/')}}/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="{{asset('/public/admin/default/')}}/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="{{asset('/public/admin/default/')}}/assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="{{asset('/public/admin/default/')}}/assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="{{asset('/public/admin/default/')}}/assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="{{asset('/public/admin/default/')}}/assets/js/app.js"></script>
    </body>
</html>
@yield('adminContent')