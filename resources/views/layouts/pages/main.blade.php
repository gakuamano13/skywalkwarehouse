<html lang="{{ app()->getLocale() }}">
    <head>
        @component('components.head')@endcomponent
    </head>
    <body>
        <div id="app">

            <main>
                @yield('content')
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </body>
</html>
