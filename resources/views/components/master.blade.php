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
        <section class="px-8 py-6 mb-4">
            <header class="flex justify-between container mx-auto ">
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
                            <p>
                                {{ Auth::user()->email }}
                            </p>

                            <div class="text-right text-sm text-gray-500 hover:text-gray-300 hover:underline">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-action').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-action" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                    @endguest
                </div>
            </header>
        </section>
      {{ $slot }}
    </div>
</body>
</html>

