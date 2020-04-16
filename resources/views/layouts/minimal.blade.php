<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- style -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tuner/css/colorpicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('tuner/css/styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!--styles -->
</head>
<body  style="background-color: #effacd">
    <main>
    	@yield('page-content')
    </main>
    <!-- footer -->
    <!-- scripts -->
   <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/elements_custom.js')}}"></script>
<script src="{{asset('js/contact_custom.js')}}"></script>

    <!-- scripts -->
</body>
</html>