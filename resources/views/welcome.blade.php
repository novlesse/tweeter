<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Tweeter') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body class="antialiased">
        <div class="flex h-screen">
            <div class="m-auto text-center">
                <h1 class="tracking-widest bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-red-300 text-3xl">Tweeter</h1>
                <hr class="my-2" />
                @if (Route::has('login'))
                    <div class="flex justify-around">
                        @auth
                            <a href="{{ url('/tweets') }}" class="text-sm text-gray-500 hover:text-gray-300 hover:underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-500 hover:text-gray-300 hover:underline">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm text-gray-500 hover:text-gray-300 hover:underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
