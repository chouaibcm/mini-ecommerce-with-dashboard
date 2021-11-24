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
    <!-- data table csss-->

    <link rel="stylesheet" type="text/css" href="{{ asset('js/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/datatables/responsive.bootstrap4.min.css') }}">


    <link rel="stylesheet" href="{{ asset('Blog/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('Blog/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('Blog/css/jquery.fancybox.min.css') }}">


    <link rel="stylesheet" href="{{ asset('Blog/css/style.css') }}">
    {{-- noty --}}
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard/plugins/noty/noty.min.js') }}"></script>
    <script>
        function myFunction() {
            alert("Contactez Nous sur Notre Page Instagram");
        }

    </script>

    <style>
        .icon-button {
            background-color: white;
            border-radius: 3.6rem;
            cursor: pointer;
            display: inline-block;
            font-size: 2.0rem;
            height: 3.6rem;
            line-height: 3.6rem;
            margin: 0 5px;
            position: relative;
            text-align: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 3.6rem;
        }

        /* Circle */
        .icon-button span {
            border-radius: 0;
            display: block;
            height: 0;
            left: 50%;
            margin: 0;
            position: absolute;
            top: 50%;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            width: 0;
        }

        .icon-button:hover span {
            width: 3.6rem;
            height: 3.6rem;
            border-radius: 3.6rem;
            margin: -1.8rem;
        }

        .twitter span {
            background-color: #4099ff;
        }

        .facebook span {
            background-color: #3B5998;
        }

        .google-plus span {
            background-color: #db5a3c;
        }

        /* Icons */
        .icon-button i {
            background: none;
            color: white;
            height: 3.6rem;
            left: 0;
            line-height: 3.6rem;
            position: absolute;
            top: 0;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            width: 3.6rem;
            z-index: 10;
        }

        .icon-button .icon-instagram {
            color: #4099ff;
        }

        .icon-button .icon-facebook {
            color: #3B5998;
        }

        .icon-button .icon-google-plus {
            color: #db5a3c;
        }

        .icon-button:hover .icon-instagram,
        .icon-button:hover .icon-facebook,
        .icon-button:hover .icon-google-plus {
            color: white;
        }

        .display-4 {
            font-size: 3rem;
            font-weight: 200;
            line-height: 1.5;
        }

        .fw-400,
        .font-weight-400 {
            font-weight: 400 !important;
        }

        .fw-500,
        .font-weight-500 {
            font-weight: 500 !important;
        }

        .pl-2,
        .px-2 {
            padding-left: 0.5rem !important;
        }

    </style>


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

                            <h1 class="site-logo"><a href="{{ route('home') }}">
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

                                        <li><a onclick="myFunction()" href="#" class="nav-link">Poche:
                                                {{ auth()->user()->poche }} DA</a></li>
                                        <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                                        <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">Registre</a>
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
                                                    @if (Auth()
            ->user()
            ->isAdmin())
                                                        <a class="dropdown-item" href="{{ route('welcomeA') }}">
                                                            Dashboard
                                                        </a>
                                                    @endif
                                                    <a class="dropdown-item"
                                                        href="{{ route('commandes', auth()->user()->id) }}">
                                                        Mes Commandes
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
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
                        <a href="" class="icon-button twitter"><i class="icon-instagram"></i><span></span></a>
                        <a href="" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                        <a href="" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        {{-- <div class="mb-4">
                            <a href="#" class="pl-0 pr-3" style="color: red"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3" style="color: red"><span class="icon-instagram"></span></a>
                        </div> --}}
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved by <a href="#" target="_blank">Zeghoum Et Mahboubi</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    @include('partials._session')

    <script src="{{ asset('Blog/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('Blog/js/popper.min.js') }}"></script>
    <script src="{{ asset('Blog/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Blog/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Blog/js/aos.js') }}"></script>
    <script src="{{ asset('Blog/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('Blog/js/stickyfill.min.js') }}"></script>
    <script src="{{ asset('Blog/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('Blog/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/order.js') }}"></script>

    <script src="{{ asset('Blog/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('Blog/js/main.js') }}"></script>


    <script>
        $(document).ready(function() {

            $('.sidebar-menu').tree();

            //icheck
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });

            //delete
            $('.delete').click(function(e) {

                var that = $(this)

                e.preventDefault();

                var n = new Noty({
                    text: "confirmer la suppression !",
                    type: "warning",
                    killer: true,
                    buttons: [
                        Noty.button("Oui", 'btn btn-success mr-2', function() {
                            that.closest('form').submit();
                        }),

                        Noty.button("Non", 'btn btn-primary mr-2', function() {
                            n.close();
                        })
                    ]
                });

                n.show();

            }); //end of delete

            // // image preview
            // $(".image").change(function () {
            //
            //     if (this.files && this.files[0]) {
            //         var reader = new FileReader();
            //
            //         reader.onload = function (e) {
            //             $('.image-preview').attr('src', e.target.result);
            //         }
            //
            //         reader.readAsDataURL(this.files[0]);
            //     }
            //
            // });


        }); //end of ready

    </script>



</body>

</html>
