<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{   asset('favicon.ico') }}">
    <link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
     
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-950 font-poppins relative">
    @include('cookie-consent::index')

    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')

    @include('includes.success-message')   

    @stack('modals')
</body>
</html>