<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-2 overflow-hidden shadow-xl hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 sm:rounded-lg">
                @livewire('dashboard-content')
            </div>
            @if(auth()->user()->roles_id != 2)
            <div class="p-2 overflow-hidden shadow-xl hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 sm:rounded-lg">
                @livewire('dashboard-content-control-panel')
            </div>
            @endif
            <x-jet-section-border />
            <div class="p-2 overflow-hidden shadow-xl hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 sm:rounded-lg">
                @livewire('twitter-news')
            </div>
        </div>
    </div>
</x-app-layout>
