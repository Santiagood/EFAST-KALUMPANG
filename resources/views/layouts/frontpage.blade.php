<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body class="font-sans antialiased bg-gradient-to-b from-transparent via-gray-300 to-white">
        <header>
            @include('includes.header')
        </header>
        <main class="min-h-screen ">
            @yield('contents')
        </main>
        <footer>
            @include('includes.footer')
        </footer>
        @stack('modals')
        @livewireScripts
    </body>
</html>
