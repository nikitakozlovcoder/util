<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="{{ asset('/logo.jpg') }}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet"> -->
    <!--Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <!-- Styles-->

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/docs.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">-->
    <link href="{{ asset('assets/js/google-code-prettify/prettify.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sequence.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/color/default.css') }}" rel="stylesheet">
    <link href="{{ asset('owl/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('owl/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootbase.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    
</head>
<body>
      @include('header')
      
        @yield('content')
      

      @include('footer')
</body>

<script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
<script>
$( ".tiny-text").find('table').wrap( "<div class='table-responsive'></div>" );
  $('table').each(function() {
    $(this).addClass('table')
  })
</script>
</html>
