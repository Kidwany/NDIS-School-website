<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NDIS - @yield('title')</title>

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <link rel="icon" href="{{asset('img')}}">
    {{--<link rel="stylesheet" href="{{asset('website/css/libs/reset-min.css')}}" type="text/css">--}}

    <!-- CSS ============================================ -->

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('website/css/libs/animate.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website/css/libs/bootstrap.min.css')}}">
    <!-- Stepper Style -->
    @yield('stepperStyle')
    {{--<link rel="stylesheet" href="{{asset('website/css/libs/magnific-popup.css')}}">--}}
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('website/css/pages/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('website/css/pages/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('website/css/pages/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/pages/styleUpdates.css')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('website/js/vendor/modernizr-2.8.3.min.js')}}"></script>

<!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>


<div id="app">
    <main class="py-4" style="padding-top: 0 !important; padding-bottom: 0 !important;">
        @yield('content')
    </main>
</div>



<!-- JS ============================================ -->
<!-- Scripts -->
{{--
<script src="{{ asset('js/app.js') }}" defer></script>
--}}
<!-- jQuery JS -->
<script src="{{asset('website/js/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- jQuery JS -->
<script src="{{asset('website/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('website/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('website/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('website/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('website/js/main.js')}}"></script>

@yield('stepperScripts')

</body>
</html>
