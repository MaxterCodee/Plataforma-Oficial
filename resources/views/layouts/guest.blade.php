<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="BgLogin">
    
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="">
            <div class="row justify-content-center">
                <div class="card bg-white rounded-4 border border-black">
                    <div class="card-body d-flex flex-column mb-3 text-center">
                        <a> <img class="ImagenLogin img-fluid mb-5 mt-4" src="img/logo.png" style="height:auto; width:320px"/> </a>
                        
                        @yield('content')
                        
                    </div>
                </div>
            </div>
        </div>
        
        
    <div>
        
    
</body>
</html>
