<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>CPI – Engineer's Reunion 2024 (Session10-11)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Reunion 2024 is going to be held on 25th December 2024 in the joint initiative of all departments of Comilla Polytechnic Institute for the session 2010-11." name="description" />
    <meta content="Virtua IT Professional" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/front/html/') }}/images/favicon-cpi.png">

    <!-- Layout config Js -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('public/admin/velzon/html/default/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/admin/velzon/html/default/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/admin/velzon/html/default/') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('public/admin/velzon/html/default/') }}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center mt-sm-2 mb-2 text-white-50">
                                            <div>
                                                <a href="{{ url('/') }}" class="d-inline-block auth-logo">
                                                    <img src="{{ asset('public/front/') }}/adminLogo.png" alt="" height="120">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Super Admin !</h5>
                                    <p class="text-muted">Sign Up a modarator.</p>
                                </div>
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                                @endif
                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{ route('confirmAdminSignup') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="fullName" placeholder="Enter admin fullname" name="fullName">
                                        </div>
                                        <div class="mb-3">
                                            <label for="dept" class="form-label">Department(*)</label>
                                            <select id="dept" class="form-select" required name="dept">
                                                <option selected>Choose...</option>
                                                <option>Civil Technology</option>
                                                <option>Electrical Technology</option>
                                                <option>Mechanical Technology</option>
                                                <option>Power Technology</option>
                                                <option>Eelectronics Technology</option>
                                                <option>Computer Technology</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="shift" class="form-label">Shift(*)</label>
                                            <select id="shift" class="form-select" required name="shift">
                                                <option selected>Choose...</option>
                                                <option>1st</option>
                                                <option>2nd</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="adminRule" class="form-label">Rules(*)</label>
                                            <select id="adminRule" class="form-select" required name="adminRule">
                                                <option value="" selected>Choose...</option>
                                                <option>Admin</option>
                                                <option>Modarator</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="session" class="form-label">Batch/Session</label>
                                            <input type="text" class="form-control" id="session" name="batch" placeholder="Enter admin batch/session">
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">User ID/Email</label>
                                            <input type="email" class="form-control" id="username" placeholder="Enter admin email" required name="emailAddress">
                                        </div>

                                        <div class="mb-3">
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password" name="password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <label for="confirmPass" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Confirm password" id="confirmPass" name="confirmPass">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> CPI Reunion | All rights reserved. Development by <i class="mdi mdi-heart text-danger"></i> Virtual IT Professional
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/pages/password-addon.init.js"></script>
</body>
</html>