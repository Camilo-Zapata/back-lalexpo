<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 relative">
            <div class="flex justify-center items-center pt-8 sm:justify-start sm:pt-0 relative">
                <img src="{{ asset('storage/fondo.png') }}" style="width: 100%;" alt="Descripción de la imagen">
                <div class="absolute top-0 right-0 px-6 py-4 sm:block">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <button type="button" class="btn btn-success"> <a href="{{ url('/home') }}" >Home</a></button>
                            @else
                            <button type="button" class="btn btn-success">  <a href="{{ route('login') }}" >Log in</a></button>
        
                                @if (Route::has('register'))
                                <button type="button" class="btn btn-success">    <a href="{{ route('register') }}" >Register</a></button>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
