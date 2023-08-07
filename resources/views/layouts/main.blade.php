<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HRMS</title>
        <meta name="description" content="Page Titile">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="{{ asset('css/vendors.bundle.css') }}">
        <link rel="stylesheet" media="screen, print" href="{{ asset('css/app.bundle.css') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <link rel="stylesheet" href="{{ asset('css/themes/cust-theme-7.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/custom-css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/notifications/toastr/toastr.css') }}">
        <link rel="stylesheet" href="{{ asset('css/datagrid/datatables/datatables.bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/custom-css/common.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/all.min.js') }}"></script>
        <script src="{{ asset('js/notifications/toastr/toastr.js') }}"></script>
        <script src="{{ asset('js/vendors.bundle.js') }}"></script>
        <script src="{{ asset('js/app.bundle.js') }}"></script>
        <script src="{{ asset('js/datagrid/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    </head>
    <body class="mod-bg-1 nav-function-fixed mod-nav-link header-function-fixed">
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                @include('elements.sidebar')
                <!-- END Left Aside -->
                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    @include('elements.header')
                    <!-- END Page Header -->
                    <!-- BEGIN Page Content -->
                    <main id="js-page-content" role="main" class="page-content">
                        @yield('content')
                    </main>
                    <!-- this overlay is activated only when mobile menu is triggered -->
                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                    <footer class="page-footer" role="contentinfo">
                        <div class="d-flex align-items-center flex-1 text-muted">
                            <span class="hidden-md-down fw-700">2019 © HRMS by&nbsp;<a href='{{ route('dashboard') }}' class='text-primary fw-500' title='hrms' target='_blank'>hrms</a></span>
                        </div>
                        <div>
                            <ul class="list-table m-0">
                                <li><a href="intel_introduction.html" class="text-secondary fw-700">About</a></li>
                                <li class="pl-3"><a href="info_app_licensing.html" class="text-secondary fw-700">License</a></li>
                                <li class="pl-3"><a href="info_app_docs.html" class="text-secondary fw-700">Documentation</a></li>
                                <li class="pl-3 fs-xl"><a href="https://wrapbootstrap.com/user/MyOrange" class="text-secondary" target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/vendors.bundle.js') }}"></script>
        <script src="{{ asset('js/app.bundle.js') }}"></script>
    </body>
</html>
