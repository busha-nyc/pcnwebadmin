<?php
    use Carbon\Carbon;
    $current_time = \Carbon\Carbon::now()->toDateTimeString();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('custom/vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('custom/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('custom/vendors/flatpickr/flatpickr.min.css') }}" />
        <!-- App styles -->
        <link rel="stylesheet" href="{{ asset('custom/css/app.min.css') }}">
       
    </head>

    <body data-ma-theme="blue">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                    <div class="navigation-trigger__inner">
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                    </div>
                </div>

                <div class="header__logo hidden-sm-down">
                    <h1><a href="{{ ('/home')}}">PCNAdminPortal</a></h1>
                </div>

                {{--  <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                    </div>
                </form>  --}}

                
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                            <div>

                                <div class="user__name">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</div>
                                <div class="user__email">{{{ isset(Auth::user()->name) ? Auth::user()->email : Auth::user()->name }}}</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">View Profile</a>
                            <a class="dropdown-item" href="">Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>

                    <ul class="navigation">
                        <li><a href="{{ ('/home') }}"><i class="zmdi zmdi-home navigation__active"></i> Home</a></li>
                        <li><a href="#"><i class="zmdi zmdi-widgets"></i> Students</a></li>
                        <li><a href="#"><i class="zmdi zmdi-widgets"></i> Grades</a></li>
                        <li><a href="#"><i class="zmdi zmdi-widgets"></i> Contacts</a></li>
                        <li><a href="#"><i class="zmdi zmdi-widgets"></i> Calendar</a></li>
                        <li><a href="#"><i class="zmdi zmdi-widgets"></i> Templates</a></li>
                        
            </aside>

            <section class="content">
                <header class="content__title">
                    <h1></h1>

                    <div class="actions">
                        <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                        <a href="" class="actions__item zmdi zmdi-check-all"></a>

                        <div class="dropdown actions__item">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="dropdown-item">Refresh</a>
                                <a href="" class="dropdown-item">Manage Widgets</a>
                                <a href="" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                </header>

                    <div class="card-block">
                        @yield('content')
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© PCN-Kids, Inc.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="{{ ('home')}}">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="{{ asset('custom/img/browsers/chrome.png') }}" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="{{ asset('custom/img/browsers/firefox.png') }}" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="{{ asset('custom/img/browsers/opera.png') }}" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="{{ asset('custom/img/browsers/safari.png') }}" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="{{ asset('custom/img/browsers/edge.png') }}" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="{{ asset('custom/img/browsers/ie.png') }}" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{ asset('custom/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('custom/vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('custom/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('custom/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('custom/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>
        <script src="{{ asset('custom/vendors/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('custom/vendors/flatpickr/flatpickr.min.js') }}"></script>

        <!-- App functions and actions -->
        <script src="{{ asset('custom/js/app.min.js') }}"></script>
    </body>
</html>