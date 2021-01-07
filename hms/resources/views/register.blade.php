<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href={{ asset('dist/css/style.min.css') }} rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
            <div>
                <div class="text-center p-t-10 p-b-20">
                    <h2>Hospital Management System</h2>
                </div>
                <!-- Form -->
                <form class="form-horizontal m-t-20" action="welcome" method="post">
                    @csrf
                    <div class="row p-b-30">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <!-- email -->
                                    <span class="alert text-danger">
                                        @error('email'){{$message}}@enderror
                                    </span>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                        </div>
                                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <span class="alert text-danger">
                                        @error('phone_number'){{$message}}@enderror
                                    </span>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" name="phone_number" class="form-control form-control-lg" placeholder="phone_number" aria-label="phone_number" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <span class="alert text-danger">
                                        @error('password'){{$message}}@enderror
                                    </span>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                    </div>

                                </div>
                                <div class="col-6">
                                    <span class="alert text-danger">
                                        @error('password_confirmation'){{$message}}@enderror
                                    </span>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder=" Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="p-t-20">
                                    <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="p-t-20">
                                    <a href="{{url('index')}}" class="text-white">Already have an account? Sign in</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
</script>
</body>

</html>


