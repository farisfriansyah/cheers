<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/img/favicon/alkaline/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/img/favicon/alkaline/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/img/favicon/alkaline/favicon-16x16.png')}}">
<link rel="manifest" href="{{ asset('public/assets/img/favicon/alkaline/site.webmanifest')}}">
<link rel="mask-icon" href="{{ asset('public/assets/img/favicon/alkaline/safari-pinned-tab.svg')}}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.alkalineheader')

    @yield('content')

    @include('includes.footer')

    @include('includes.javalist')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>