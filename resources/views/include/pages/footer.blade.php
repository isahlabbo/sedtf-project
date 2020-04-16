
    
    <!-- / footer -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox_packed.js"></script>
    <script type='text/javascript' src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.min.js')}}"></script>
    <script src="{{asset('js/TweenMax.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>     
    <script src="{{ asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jflickrfeed.min.js')}}"></script>
    <script src="{{ asset('js/jquery.tweet.js')}}"></script>
    <script src="{{asset('tuner/js/colorpicker.js')}}"></script>
    <script type='text/javascript' src="{{asset('tuner/js/scripts.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox-media.js')}}"></script>
    <script src="{{ asset('js/retina.min.js')}}"></script>
    @auth
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @endauth
    @yield('scripts')
</html>