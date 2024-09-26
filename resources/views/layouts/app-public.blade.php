<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Find your window to the world!">
        <meta name="keywords" content="ecommerce,book">
        <meta name="author" content="Jange Book Store">

        <title>@yield('title') | Jange Book Store</title>
        <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/4/4259.png">
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor/linearicons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor/fontawesome-all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/animation.min.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/slick.min.css')}}">
        <link rel="stylesheet" type="text/css" href ="{{asset('assets/css/plugins/magnific-popup.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/easyzoom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        @yield('addition_css')
        <!-- END: CSS Assets-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <style>
            * {
                font-family: 'Roboto', sans-serif !important;
            }
            .footer-social-networks a {
                display: inline-block;
                width: 24px;
                height: 24px;
                color: #333; /* Warna ikon */
                transition: color 0.3s ease;
            }
            .footer-social-networks a:hover {
                color: #007bff; /* Warna ikon saat hover */
            }
            .footer-social-networks svg {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body class="box-home">
        <div class="page-box">
            @include('components.header')
            <div id="main-wrapper">
                @yield('content')
                @include('components.footer')
            </div>
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/axios.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/fullpage.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/countdown.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
        <script src="{{asset('assets/js/plugins/easyzoom.js')}}"></script>
        <script src="{{asset('assets/js/plugins/images-loaded.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/isotope.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/YTplayer.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        {{-- Instagramfeed JS --}}
        {{-- <script src="{{asset('assets/js/plugins/jquery.instagramfeed.min.js')}}"></script> --}}
        <script src="{{asset('assets/js/plugins/ajax.mail.js')}}"></script>
        <script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
        {{-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) --}}
        {{-- <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script> --}}
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('pages/js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @yield('addition_script')
        <!-- END: JS Assets-->
    </body>
</html>
