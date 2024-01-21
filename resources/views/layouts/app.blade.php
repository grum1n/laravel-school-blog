<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{   asset('favicon.ico') }}">

    <link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
      <!-- google font css -->
   

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 tracking-normal">
    @include('layouts.partials.nav')
    
    @yield('content')

    @include('layouts.partials.footer')

    @stack('modals')
</body>
</html>