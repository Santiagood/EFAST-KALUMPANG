<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Efast-Kalumpang') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @powerGridStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        {{-- <div class="min-h-screen bg-gradient-to-b from-transparent to-sky-600"> --}}
        <div class="min-w-full min-h-screen bg-fixed bg-no-repeat bg-cover" style="background-image: url('{{ asset('/images/EFAST-Wallpaper.jpg') }}');">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow rounded-b-3xl">
                    <div class="px-4 py-3 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


        @stack('modals')
        @livewire('livewire-ui-modal')
        @livewireScripts
        @livewireChartsScripts
        {{-- @powerGridScripts --}}
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
    </body>
</html>
