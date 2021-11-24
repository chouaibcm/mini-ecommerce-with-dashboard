<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>COFFAAPP</title>

    <!-- Styles -->
    <link href="{{ asset('blog3/css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('blog3/css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('blog/images/logo1.png') }}">
    <link rel="icon" href="{{ asset('blog/images/logo1.png') }}">
    {{-- noty --}}
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard/plugins/noty/noty.min.js') }}"></script>

</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
        <div class="container">

            <div class="navbar-left">
                <button class="navbar-toggler" type="button">&#9776;</button>
                <a class="navbar-brand " href="{{ route('home') }}" style="color: white">
                    <img src="{{ asset('blog/images/logo1.png') }}" width="70" height="70" alt="logo">COFFEAPP</a>


            </div>

            <section class="navbar-mobile">
                <span class="navbar-divider d-mobile-none"></span>

                <ul class="nav nav-navbar ">
                    @if (Auth()->user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">HOME </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">HOME </a>
                    </li>                    
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">CONTACT </a>
                    </li>
                    @if (Auth()->user())
                    <li class="nav-item ">
                        <a class="nav-link" href="#"> POCHE : {{ auth()->user()->poche }} €</a>
                    </li>
                    @endif
                    @if (Auth()->user())
                    <li class="nav-item ">
                        <a class="nav-link" href="#"> ID : {{ auth()->user()->id_c }}</a>
                    </li>
                    @endif
                </ul>
                <ul class="nav nav-navbar ml-auto">
                    @guest
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registre</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item " style="float: right;">
                            <a class="nav-link active" href="#">{{ Auth::user()->name }} <span class="arrow"></span></a>
                            <nav class="nav">
                                @if (Auth()->user()->isAdmin())
                                    <a class="nav-link" href="{{ route('welcomeA') }}">
                                        Dashboard
                                    </a>
                                @endif
                                <a class="nav-link" href="{{ route('commandes', auth()->user()->id) }}">
                                    Mes Commandes
                                </a>
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </nav>
                        </li>
                    @endguest
                </ul>
            </section>


        </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
    @yield('header')



    <!-- Main Content -->
    <main class="main-content">

        <section class="section" style="background-color: rgb(235, 235, 235)">
            <div class="container">
                @yield('content')

            </div>
        </section>

    </main>


    <!-- Footer -->
    <div class="pg-footer">
        <footer class="footer">
                <h3 class="display-4 text-center">
                    <a class="social-facebook" href="https://www.facebook.com/coffaapp/?ref=py_c"><i class="fa fa-facebook"></i></a>
                    - - 
                    <a class="social-instagram" href="https://www.instagram.com/coffaapp/"><i class="fa fa-instagram"></i></a>
                </h3>
    </footer>
    </div>
    
    @include('partials._session')


    <!-- Scripts -->
    <script src="{{ asset('blog3/js/page.min.js') }}"></script>
    <script src="{{ asset('blog3/js/script.js') }}"></script>
    <script src="{{ asset('js/order.js') }}"></script>  
	<script src="{{asset('js/printThis.js')}}"></script>

</body>

</html>
