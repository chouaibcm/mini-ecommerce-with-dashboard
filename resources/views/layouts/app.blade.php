<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COFFAAPP</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('blog/images/logo1.png') }}">
    <link rel="icon" href="{{ asset('blog/images/logo1.png') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href={{ asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href={{ asset('dashboard/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    {{-- morris --}}
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/morris/morris.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/jqvmap/jqvmap.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('dashboard/dist/css/adminlte.min.css') }}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- summernote -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/summernote/summernote-bs4.min.css') }}>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href={{ asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- Select2 -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/select2/css/select2.min.css') }}>
    <link rel="stylesheet" href={{ asset('dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}>
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href={{ asset('dashboard/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}>
    <!-- BS Stepper -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/bs-stepper/css/bs-stepper.min.css') }}>
    <!-- dropzonejs -->
    <link rel="stylesheet" href={{ asset('dashboard/plugins/dropzone/min/dropzone.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('dashboard/dist/css/adminlte.min.css') }}>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');

    </script>
    {{-- {{--<!-- jQuery 3 --> --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    {{-- noty --}}
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard/plugins/noty/noty.min.js') }}"></script>
    {{-- <!-- iCheck --> --}}
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck/all.css') }}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>


            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-link dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if (Auth()
        ->user()
        ->isAdmin())
                            <a class="dropdown-item" href="{{ route('home') }}">
                                Coffeapp Acceuil
                            </a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </nav>


        @include('layouts._aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid mb-20">

                    @yield('content')
                </div><!-- /.container-fluid -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0-rc
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('partials._session')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- icheck --}}

    {{-- <!-- FastClick --> --}}
    <script src="{{ asset('js/fastclick.js') }}"></script>

    {{-- <!-- AdminLTE App --> --}}
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

    {{-- ckeditor standard --}}
    <script src="{{ asset('dashboard/plugins/ckeditor/ckeditor.js') }}"></script>

    {{-- jquery number --}}
    <script src="{{ asset('js/jquery.number.min.js') }}"></script>

    {{-- print this --}}
    <script src="{{ asset('js/printThis.js') }}"></script>

    {{-- morris --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ asset('dashboard/plugins/morris/morris.min.js') }}"></script>

    {{-- custom js --}}
    <script src="{{ asset('dashboard/js/custom/image_preview.js') }}"></script>




    {{-- icheck --}}
    <script src="{{ asset('dashboard/plugins/icheck/icheck.min.js') }}"></script>

    {{-- <!-- jQuery -->
    <script src={{ asset('dashboard/plugins/jquery/jquery.min.js') }}></script>
    <!-- jQuery UI 1.11.4 -->
    <script src={{ asset('dashboard/plugins/jquery-ui/jquery-ui.min.js') }}></script> --}}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- ChartJS -->
    <script src={{ asset('dashboard/plugins/chart.js/Chart.min.js') }}></script>
    {{-- <!-- Sparkline -->
    <script src={{ asset('dashboard/plugins/sparklines/sparkline.js') }}></script> --}}
    <!-- JQVMap -->
    <script src={{ asset('dashboard/plugins/jqvmap/jquery.vmap.min.js') }}></script>
    <script src={{ asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>
    <!-- jQuery Knob Chart -->
    {{-- <script src={{ asset('dashboard/plugins/jquery-knob/jquery.knob.min.js') }}></script> --}}
    <!-- daterangepicker -->
    <script src={{ asset('dashboard/plugins/moment/moment.min.js') }}></script>
    <script src={{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}>
    </script>
    <!-- Summernote -->
    <script src={{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}></script>
    <!-- overlayScrollbars -->
    <script src={{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('dashboard/dist/js/adminlte.js') }}></script>
    <!-- AdminLTE for demo purposes -->
    <script src={{ asset('dashboard/dist/js/demo.js') }}></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src={{ asset('dashboard/dist/js/pages/dashboard.js') }}></script>
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

            CKEDITOR.config.language = "{{ app()->getLocale() }}";
        }); //end of ready

    </script>

</body>

</html>
