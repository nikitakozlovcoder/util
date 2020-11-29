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
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <!-- Styles-->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
      .btn-primary {
        background-color: #81ab35;
        border-color: #81ab35;
      }
      .btn-primary:hover{
        background-color: #749a2f;
        border-color: #749a2f;
      }
      .form-control:focus{
        box-shadow: 0 0 0 0.2rem #81ab3533;
        border-color: #81ab35;
      }
      .custom-control-input-green:focus~.custom-control-label::before {
        border-color: #28a745 !important;
        box-shadow: 0 0 0 0.2rem #81ab3533 !important;
      }

      .custom-control-input-green:checked~.custom-control-label::before {
        border-color: #81ab35 !important;
        background-color: #81ab35 !important;
      }

      .custom-control-input-green:focus:not(:checked)~.custom-control-label::before {
        border-color: #81ab35 !important;
      }

      .custom-control-input-green:not(:disabled):active~.custom-control-label::before {
        background-color: #81ab35 !important;
        border-color: #81ab35 !important;
      }
    </style>
</head>
<body>

      <main style="">
        @yield('content')
      </main>


</body>

</html>
