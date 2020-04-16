
    <header class="only-color">
        <div class="sticky-wrapper">
            <div class="sticky-menu">
                <div class="grid-row clear-fix">
                    <!-- logo -->
                    <a href="{{url('/')}}" class="logo">
                        <img src="{{ asset('img/logo.png') }}"  data-at2x="img/logo@2x.png" alt>
                        <h1>SEDTF</h1>
                    </a>
                    <!-- / logo -->
                    <nav class="main-nav">
                        <ul class="clear-fix">
                            <!-- menus -->
                            @if(!auth()->check())
                                <li>
                                    <a href="{{route('welcome')}}" class="active"><i class="fa fa-home"></i>Home</a>
                                </li>
                            @else
                                <li>
                                    <a href="#" class="active"><i class="fa fa-dashboard"></i> Dashboard</a>
                                </li>
                            @endif

                            @if(!auth()->check())
                            <li>
                                <a href="#">Programmes</a>
                                <!-- sub menu -->
                                <ul>
                                    <li><a href="#">Certificate In Computer Science</a></li>
                                    <li><a href="#">Diploma In Computer Science</a></li>
                                    <li><a href="#">Diploma In Engineering</a></li>
                                </ul>
                                <!-- / sub menu -->
                            </li>

                            @endif
                            <li>
                                <a href="#"><i class="fa fa-calendar"></i> Calendar</a>
                                <!-- sub menu -->
                                <ul>
                                    <li><a href="#">View Calendar</a></li> 
                                </ul>
                                <!-- / sub menu -->
                            </li>
                            @yield('nav-bar')
                            @if(!auth()->check())
                            <li>
                                <a href="{{route('student.auth.login')}}">Sign In</a>
                            </li>
                            @else
                                <li><a href="#"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-5"></i> Logout</a>
                                </li>

                                <form id="logout-form" action="{{ route(logout_route()) }}"    method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endif
                            
                            <!-- /menus -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div> 
    </header>
    