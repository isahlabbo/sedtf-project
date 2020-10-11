<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>@yield('title')</title>

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="{{asset ('css/application/jquery.steps.css')}}" />

        <!-- App css -->
        <link href="{{asset('css/application/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/application/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/application/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/application/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/application/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/application/responsive.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/application/switchery.min.css')}}">
        <script src="{{asset('js/application/modernizr.min.js')}}"></script>

    </head>

    <body class="fixed-left" style="background-color: #effacd">
        <div id="wrapper">
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
                                @yield('page-content')
                                </div>
							</div>		
						</div>		
                    </div>
                </div>
            </div>
        </div>
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('js/application/jquery.min.js')}}"></script>
        <script src="{{asset('js/application/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/application/detect.js')}}"></script>
        <script src="{{asset('js/application/fastclick.js')}}"></script>
        <script src="{{asset('js/application/jquery.blockUI.js')}}"></script>
        <script src="{{asset('js/application/waves.js')}}"></script>
        <script src="{{asset('js/application/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/application/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('js/application/switchery.min.js')}}"></script>

        <!--Form Wizard-->
        <script src="{{asset('js/application/jquery.steps.min.js')}}"></script>
        <script src="{{asset('js/application/jquery.validate.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('js/application/jquery.core.js')}}"></script>
        <script src="{{asset('js/application/jquery.app.js')}}"></script>

        <!--wizard initialization-->
        <script src="{{asset('js/application/jquery.wizard-init.js')}}"></script>

    </body>
</html>