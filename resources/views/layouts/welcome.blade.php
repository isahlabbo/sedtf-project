<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <!-- style -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/welcome/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/welcome/fontawesome-free-5.0.1/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/welcome/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/welcome/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/welcome/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/elements_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/elements_responsive.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/news_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/news_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/contact_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/contact_responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('css/welcome/main_styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/welcome/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/custom_styles.css')}}">
    <!--styles -->
</head>
<body  style="background-color: #FDF5F5">
@include('include.menu.welcome.nav-bar')
    <main>
    	@yield('page-content')
    </main>
    <!-- footer -->
    @include('include.pages.welcome.footer')
    <!-- scripts -->
   <script src="{{asset('js/welcome/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('css/welcome/bootstrap4/popper.js')}}"></script>
<script src="{{asset('css/welcome/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/welcome/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/welcome/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/welcome/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/welcome/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/welcome/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/welcome/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/welcome/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/welcome/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/welcome/easing/easing.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('js/welcome/custom.js')}}"></script>
<script src="{{asset('js/welcome/elements_custom.js')}}"></script>
<script src="{{asset('js/welcome/contact_custom.js')}}"></script>

    <!-- scripts -->
</body>
</html>