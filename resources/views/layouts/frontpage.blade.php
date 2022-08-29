<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body class="font-sans antialiased">
        <header>
            @include('includes.header')
        </header>
        <main class="min-h-screen bg-white ">
            @yield('contents')
        </main>
        <footer>
            @include('includes.footer')
        </footer>
        @stack('modals')
        @livewireScripts
    </body>
</html>
