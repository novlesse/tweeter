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
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <a 
                    href="{{ route('home') }}"
                    class="tracking-widest bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-red-300 text-3xl">
                    Tweeter
                </a>
            </header>
        </section>

        <section class="px-8 pb-8">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">
                    <div class="lg:w-1/6">
                        @include('_sidebar-links')
                    </div>
                    
                    <div class="lg:flex-1 lg:mx-10">
                        @yield('content')
                    </div>

                    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                        @include('_friends-list')
                    </div>
                </div>
            </main>
        </section>
    </div>
</body>
</html>
