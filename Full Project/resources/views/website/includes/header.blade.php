<div class="responsive-navigation visible-sm visible-xs">
    <a href="#" class="menu-toggle-btn">
        <i class="fa fa-bars"></i>
    </a>
    <div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="{!! url('/') !!}">Home</a></li>
            <li><a href="{!! url('/service') !!}">Services</a></li>
            <li><a href="{!! url('/alumni') !!}">Meet Our Alumni</a></li>
            <li><a href="{!! url('/student') !!}">Our Students</a></li>
            <li><a href="{!! url('/event') !!}">Events</a></li>
            <li><a href="{!! url('/contact') !!}">Contact</a></li>
        </ul> <!-- /.main_menu -->
        <ul class="social_icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul> <!-- /.social_icons -->
    </div> <!-- /.responsive_menu -->
</div> <!-- /responsive_navigation -->


<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 header-left">
                <p><i class="fa fa-phone"></i> +880-2-55668200</p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:admin@northsouth.edu">admin@northsouth.edu</a></p>
            </div> <!-- /.header-left -->

            <div class="col-md-4">
                <div class="logo">
                    <a href="{!! url('/') !!}" title="NSUECEAA" rel="home">
                        <img src="{!! asset('front/') !!}/images/logo.png" alt="Universe">
                    </a>
                </div> <!-- /.logo -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 header-right">
                <ul class="small-links">
                    @if(Auth::guard('alumni')->check())
                        <li class="nav-item dropdown">
                            <a href="{!! url('/alumni/dashboard') !!}">
                                <span>Hello..!  </span>{{ Auth::guard('alumni')->user()->first_name }}
                            </a>
                        </li>
                        <li>(<a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>)
                        </li>
                    @elseif(Auth::guard('student')->check())
                        <li class="nav-item dropdown">
                            <a href="{!! url('/student/dashboard') !!}">
                                <span>Hello..!  </span>{{ Auth::guard('student')->user()->first_name }}
                            </a>
                        </li>
                        <li>(<a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>)
                        </li>
                    @else
                        <li><a href="{!! url('/alumni/signup') !!}">Signup As Alumni</a></li>
                        <li><a href="{!! url('/student/signup') !!}">Signup As Student</a></li>
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @endif
                </ul>
                <div class="search-form">
                    <form name="search" method="get" action="{!! 'userSearch' !!}" class="search_form">
                        <input type="text" name="search" placeholder="Search the site..." title="Search the site..." class="field_search">
                    </form>
                </div>
            </div> <!-- /.header-right -->
        </div>
    </div> <!-- /.container -->

    <div class="nav-bar-main" role="navigation">
        <div class="container">
            <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                <ul class="main-menu sf-menu">
                    <li class="{!! Request::is('/') ? 'active' : '' !!}"><a href="{!! url('/') !!}">Home</a></li>
                    <li class="{!! Request::is('service*') ? 'active' : '' !!}"><a href="{!! url('/service') !!}">Services</a></li>
                    <li class="{!! Request::is('alumni*') ? 'active' : '' !!}"><a href="{!! url('/alumni') !!}">Meet Our Alumni</a></li>
                    <li class="{!! Request::is('student*') ? 'active' : '' !!}"><a href="{!! url('/student') !!}">Our Students</a></li>
                    <li class="{!! Request::is('event*') ? 'active' : '' !!}"><a href="{!! url('/event') !!}">Events</a></li>
                    <li class="{!! Request::is('contact') ? 'active' : '' !!}"><a href="{!! url('/contact') !!}">Contact</a></li>
                </ul> <!-- /.main-menu -->
                <!-- /.social-icons -->
            </nav> <!-- /.main-navigation -->
        </div> <!-- /.container -->
    </div> <!-- /.nav-bar-main -->

</header>