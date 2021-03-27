<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tweeter') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div id="app">
        <section class="px-8 py-3 bg-white fixed top-0 w-full border-b border-gray-300 shadow z-10">
            <header class="flex justify-between container mx-auto">
                <a 
                    href="{{ route('home') }}"
                    class="tracking-widest bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-red-300 text-3xl">
                    Tweeter
                </a>

                <div>
                    @guest
                        @if (Route::has('login'))
                            <a class="text-sm text-gray-500 hover:text-gray-300 hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                            <a class="text-sm text-gray-500 hover:text-gray-300 hover:underline ml-4" href="{{ route('register') }}">{{ __('Register') }}</a>           
                        @endif
                    @else

                    <div class="flex">
                        <img
                            src="{{ Auth::user()->avatar }}"
                            alt=""
                            class="rounded-full border h-12 w-12"
                        />    
                        <div class="text-right ml-3">
                            <p class="font-semibold">
                                {{ Auth::user()->email }}
                            </p>
                            <a class="dropdown-item text-sm text-gray-500 hover:text-gray-300 hover:underline" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-action').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-action" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>
            </header>
        </section>
        <div class="pt-24">
            {{ $slot }}
        </div>
    </div>
    
    <script src="http://unkpg.com/turbolinks"></script>
</body>
</html>

