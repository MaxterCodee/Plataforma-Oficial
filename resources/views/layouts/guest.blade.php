<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="BgLogin">
    
        <div class="position-absolute top-50 start-50 translate-middle">
            <div>
                <div class="row justify-content-center">
                    <div class="card bg-white rounded-4 border border-black">
                        <div class="card-body d-flex flex-column text-center">
                            <a> <img class="ImagenLogin img-fluid mb-2 mt-2" src="img/logo.png" style="height:auto; width:320px"/> </a>
                            
                            {{$slot}}
                            
                        </div>
                    </div>
                </div>
            </div>
            
            
        <div>

        @livewireScripts
    </body>
</html>
