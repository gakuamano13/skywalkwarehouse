<html lang="{{ app()->getLocale() }}">
    <head>
        @component('components.head')@endcomponent
    </head>
    <body>
        <div id="app">
            <header>
                @component('components.header')@endcomponent
            </header>
            <main class="py-4">
                @yield('content')
            </main>
            <footer>
                @component('components.footer')@endcomponent
            </footer>
        </div>
    </body>
</html>
