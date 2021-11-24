<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{asset('login1/css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('login1/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('login1/img/logo-zakem-2.png')}}">
    <link rel="icon" href="{{asset('login1/img/logo-zakem.png')}}">
  </head>

  <body>
    @yield('header')

    @yield('content')

    <script src="{{asset('login1/js/page.min.js')}}"></script>
    <script src="{{asset('login1/js/script.js')}}"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ec131ceffee777f"></script>
  </body>
</html>