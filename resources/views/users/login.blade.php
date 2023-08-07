<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRMS</title>
    <link rel="stylesheet" href="{{ asset('assets/custom-css/login.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/vendors.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/app.bundle.css') }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <!-- Optional: page related CSS-->
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custom-css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notifications/toastr/toastr.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('js/notifications/toastr/toastr.js') }}"></script>
    <style>
        #login-logo{
            margin-left: 70px;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    @include('alert_message')
    <div class="page-wrapper">
        <div class="page-inner bg-gradient-img">
            <div class="page-content-wrapper bg-transparent m-0">
                <div class="height-10 w-100 px-4">
                    <div class="d-flex align-items-center container p-0">
                        <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                {{-- <img src="img/logo.png" alt="HRMS" aria-roledescription="logo">
                                <span class="page-logo-text mr-1 text-dark"><strong>HRMS</strong></span> --}}
                            </a>
                        </div>
                        {{-- <a href="page_register.html" class="btn-link text-white ml-auto">
                            Create Account
                        </a> --}}
                    </div>
                </div>
                <div class="flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                        <div class="row">
                            <div class="col col-md-6 col-lg-7 hidden-sm-down">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                                <div class="card p-4 rounded-plus bg-faded">
                                    <div id="login-logo">
                                        @include('includes.login-logo')
                                    </div>
                                    <form id="js-login" novalidate="" action="{{ route('savelogin') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" value="{{ old('username') }}" autocomplete="off" autocomplete="off" required>
                                            <div class="invalid-feedback">No, you missed this one.</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control form-control-lg" autocomplete="off" placeholder="password"  required>
                                            <div class="invalid-feedback">Sorry, you missed this one.</div>
                                            <div class="help-block">Your password</div>
                                        </div>
                                        <div class="form-group text-left">

                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 my-2">
                                                <button id="js-login-btn" type="submit" class="btn btn-info btn-sm"><i class="fa fa-sign-in"></i>&nbsp; Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-dark">
                            @php echo date('Y') @endphp © HRMS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/vendors.bundle.js') }}"></script>
    <script src="{{ asset('js/app.bundle.js') }}"></script>
    <script>
        $("#js-login-btn").click(function(event)
        {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false)
            {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });

    </script>
</body>
</html>
