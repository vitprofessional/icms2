<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
    <!-- Mirrored from themesbrand.com/velzon/html/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Oct 2024 18:08:30 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>ICMS | @yield('title')</title>
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
        
        <link href="{{asset('/public/admin/default/')}}/assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        <!-- custom css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
<body>
    <div class="row form-box">
    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
        <div class="col-12  text-center border-0">
            <div class="">
                <div id="btn"></div>
                <img src="{{asset('/public/admin/default/')}}/assets/images/faq-img.png" alt="" class="w-50" />
            </div>
        </div>
        <div class="col-12 card card-body  rounded-0 border-0">
            <form method="POST" class="form" action="">
                @csrf
                <div class="mb-2">
                    <label for="userId" class="form-label">User Id</label>
                    <input type="text" class="form-control input-field" id="userId"  name="userId"  placeholder="Enter admin id " required />
                </div>
                <div class="mb-2">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control input-field" id="pass" name="pass" placeholder="Enter login password" required />
                </div>
                <div class="text-center mt-4">
                <button type="submit" class="btn btn-sm btn-info text-white">Login</button>
                </div>
            </form>
        </div>
    </div>
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
