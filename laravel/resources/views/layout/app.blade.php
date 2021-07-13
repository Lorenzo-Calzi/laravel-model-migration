<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>@yield('title', 'Travels')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
       
    </head>
    <body>
        
        @include('partials.header')
        
        <main id="site_main">
            @yield('main_content')
        </main>

        @include('partials.footer')
    </body>
</html>