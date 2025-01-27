<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | SPK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/css/icons.min.css" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/css/app.min.css" rel="stylesheet"
        type="text/css" />

</head>

<body class="bg-primary bg-pattern">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
    </div>

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        {{-- <a href="index.html" class="logo"><img
                                src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/images/logo-light.png"
                                height="24" alt="logo"></a> --}}
                        <h5 class="font-size-16 text-white-50 mb-4">SELAMAT DATANG DI HALAMAN LOGIN</h5>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">Sign in to continue to SPK.</h5>
                                <form class="form-horizontal" action="{{ url('login') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username" id="username"
                                                    placeholder="Enter username">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="userpassword">Password</label>
                                                <input type="password" class="form-control" name="password" id="userpassword"
                                                    placeholder="Enter password">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlInline">
                                                        <label class="custom-control-label"
                                                            for="customControlInline">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="text-md-right mt-3 mt-md-0">
                                                        <a href="auth-recoverpw.html" class="text-muted"><i
                                                                class="mdi mdi-lock"></i> Forgot your password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-success btn-block waves-effect waves-light">Log In</button>
                                            </div>
                                            {{-- <div class="mt-4 text-center">
                                                <a href="auth-register.html" class="text-muted"><i
                                                        class="mdi mdi-account-circle mr-1"></i> Create an account</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end Account pages -->

    <!-- JAVASCRIPT -->
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/node-waves/waves.min.js"></script>

    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/js/app.js"></script>

</body>

</html>
