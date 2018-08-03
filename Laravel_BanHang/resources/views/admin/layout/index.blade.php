<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin-Fuco Shop</title>
    <base href="{{ asset('') }}">
    <!-- Favicon-->
    <link rel="icon" href="admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="admin/plugins/animate-css/animate.css" rel="stylesheet" />

    @yield('linkcssTren')

    <!-- Custom Css -->
    <link href="admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="admin/css/themes/all-themes.css" rel="stylesheet" />

    @yield('linkcssDuoi')

</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <div class="overlay"></div>

    @include('admin.layout.topbar')

    

    <section>
        @include('admin.layout.leftsidebar')
        @include('admin.layout.rightsidebar')
    </section>

    @yield('content')

    <!-- Jquery Core Js -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="admin/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="admin/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="admin/js/demo.js"></script>

    <!-- Thông báo Js -->
    <script src="admin/js/sweetalert.min.js"></script>


    @yield('script')
    
</body>

</html>