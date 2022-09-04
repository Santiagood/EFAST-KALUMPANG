<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Manage SMS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-10 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                SEND SMS TO RESIDENTS
            </div>
            <x-jet-section-border />
            <div class="p-10 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                SENT MESSAGE LOG
            </div>
            <x-jet-section-border />
            <div class="p-5 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="pb-2">
                    @livewire('sms-template-creator')
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
