<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Report Generator') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-2 overflow-hidden shadow-xl hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 sm:rounded-lg">
                <div class="p-3 w-full max-w-full bg-white rounded-lg border border-gray-200 shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="font-bold text-center">River Levels Report Generator</h2>
                    @livewire('river-level-power-grid')
                </div>
            </div>
            <x-jet-section-border />
            <div class="p-2 overflow-hidden shadow-xl hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 sm:rounded-lg">
                <div class="p-3 w-full max-w-full bg-white rounded-lg border border-gray-200 shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="font-bold text-center">SMS Logs Report Generator</h2>
                    @livewire('sms-log-power-grid')
                </div>
            </div>
            <x-jet-section-border />
            <div class="p-2 overflow-hidden shadow-xl hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 sm:rounded-lg">
                <div class="p-3 w-full max-w-full bg-white rounded-lg border border-gray-200 shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="font-bold text-center">SMS Templates Report Generator</h2>
                    @livewire('sms-template-power-grid')
                </div>
            </div>
            <x-jet-section-border />
            <div class="p-2 overflow-hidden shadow-xl hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 sm:rounded-lg">
                <div class="p-3 w-full max-w-full bg-white rounded-lg border border-gray-200 shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="font-bold text-center">Kalumpang Streets Report Generator</h2>
                    @livewire('kalumpang-street-power-grid')
                </div>
            </div>
            <x-jet-section-border />
            <div class="p-2 overflow-hidden shadow-xl hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 sm:rounded-lg">
                <div class="p-3 w-full max-w-full bg-white rounded-lg border border-gray-200 shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="font-bold text-center">Efast Accounts Report Generator</h2>
                    @livewire('user-power-grid')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
