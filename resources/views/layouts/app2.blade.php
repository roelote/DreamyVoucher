<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dreamy Tours - @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('css')
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        @yield('js-top')
        <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script> -->
        
    </head>
    <body>
        <nav class="bg-gray-200 shadow-md">
            <div class="container mx-auto p-3">
                <img src="{{ asset('img/logo-grande.png') }}" alt="logo dreamy" width="150" >
            </div>
        </nav>
        <section>
           
                 @yield('content')
            
        </section>
        @yield('scripts')
    </body>
</html>
