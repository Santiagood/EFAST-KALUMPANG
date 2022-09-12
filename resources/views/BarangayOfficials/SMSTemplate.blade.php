<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Manage SMS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-wrap sm:flex-nowrap">
                <div class="p-2 overflow-hidden hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 shadow-xl sm:rounded-lg">
                    @livewire('sms-compose-message')
                </div>

                <div class="p-2 overflow-hidden hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 shadow-xl sm:rounded-lg">
                    @livewire('sms-sent-log-table')
                </div>
            </div>
            <x-jet-section-border />
            <div class="p-2 overflow-hidden hover:bg-gradient-to-r from-red-400 hover:to-yellow-200 shadow-xl sm:rounded-lg">
                @livewire('sms-template-creator')
            </div>
        </div>

    </div>
</x-app-layout>
