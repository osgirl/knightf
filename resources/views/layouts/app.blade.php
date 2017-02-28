<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="icon" href="{{url('/webimg/knight-logo.png')}}">
   <title>{{ config('app.name', 'Knights of Columbus') }}</title>
 


<!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
    integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
    crossorigin="anonymous"></script>

    <!-- BOOTSTRAP-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!--link for date picker on event create-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}?8" rel="stylesheet">





   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/custom.css') }}?7" rel="stylesheet">

   <!-- Scripts -->
   <script>
       window.Laravel = {!! json_encode([
           'csrfToken' => csrf_token(),
       ]) !!};
   </script>


</head>


<body>
   <div id="app">
     @include('_include.nav')
     @yield('content')
   </div>
</body>



<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('customscripts')
</html>
