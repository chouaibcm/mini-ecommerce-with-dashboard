<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coffeapp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Blog/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Blog/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Blog/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('Blog/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Blog/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Blog/css/bootstrap-datepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('Blog/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('Blog/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('Blog/css/jquery.fancybox.min.css') }}">


    <link rel="stylesheet" href="{{ asset('Blog/css/style.css') }}">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <div class="site-navbar-wrap">

            <div class="site-navbar site-navbar-target js-sticky-header">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-6 col-lg-6">

                            <h1 class="site-logo"><a href="{{route('welcome')}}">
                                    <img src="{{ asset('blog/images/logo1.png') }}" width="70" height="70"
                                        alt="logo"></a></h1>

                        </div>
                        <div class="col-6 col-lg-6">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">

                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3 "><a href="#"
                                            class="site-menu-toggle js-menu-toggle text-black">
                                            <span class="icon-menu h3"></span>
                                        </a></div>

                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                        <li><a href="{{ route('welcome') }}" class="nav-link">Home</a></li>
                                        <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route('login') }}">Login</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('register') }}">Registre</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="navbarDropdown">
                                                    @if (Auth()->user()->isAdmin())
                                                    <a class="dropdown-item" href="{{ route('welcomeA') }}">
                                                        Dashboard
                                                    </a>
                                                    @endif
                                                    <a class="dropdown-item" href="{{ route('home') }}">
                                                        Faire une commande
                                                    </a>                                                    
                                                    <a class="dropdown-item" href="{{ route('commandes', auth()->user()->id) }}">
                                                        Mes Commandes
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .site-navbar-wrap -->


        @yield('content')


        <footer class="footer">
            <div class="container">

                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('Blog/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('Blog/js/popper.min.js') }}"></script>
    <script src="{{ asset('Blog/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Blog/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Blog/js/aos.js') }}"></script>
    <script src="{{ asset('Blog/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('Blog/js/stickyfill.min.js') }}"></script>
    <script src="{{ asset('Blog/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('Blog/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('Blog/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('Blog/js/main.js') }}"></script>


</body>

</html>
