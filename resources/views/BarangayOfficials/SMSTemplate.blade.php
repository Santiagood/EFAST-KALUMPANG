<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('SMS Template Creator & Send SMS to Residents') }}
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
            <div class="p-10 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                SMS TEMPLATE CREATOR
            </div>
        </div>

    </div>
</x-app-layout>
