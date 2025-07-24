<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- meta tag -->
    <title>{{env('SITENAME')}} - Heavy Industries, Building and Construction, Mining, Highways and Distilleries </title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="#">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav.png')}}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"> 
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
</head>
<body class="defult-home">

    <div class="main-content">
        @include('frontend.layout.header')
        @yield('content')
    </div>
    @include('frontend.layout.footer')

    

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Menu js -->
    <script src="{{ asset('assets/js/rsmenu-main.js')}}"></script> 
    <!-- op nav js -->
    <script src="{{ asset('assets/js/jquery.nav.js')}}"></script>
    <!-- Time Circle js -->
    <script src="{{ asset('assets/js/time-circle.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('assets/js/skill.bars.jquery.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script> 
        <!-- counter top js -->
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets/js/swiper.min.js')}}"></script>   
    <!-- particles js -->
    <script src="{{ asset('assets/js/particles.min.js')}}"></script>  
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>      
    <script src="{{ asset('assets/js/jquery.easypiechart.min.js')}}"></script>      
    <!-- plugins js -->
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <!-- pointer js -->
    <script src="{{ asset('assets/js/pointer.js')}}"></script>
    <!-- contact form js -->
    <script src="{{ asset('assets/js/contact.form.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js')}}"></script>    
</body>
</html>