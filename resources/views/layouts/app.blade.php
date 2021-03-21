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
                <h1 class="tracking-widest bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-red-300 text-3xl">
                    Tweeter
                </h1>
            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
                @yield('content')
            </main>
        </section>
    </div>
</body>
</html>
