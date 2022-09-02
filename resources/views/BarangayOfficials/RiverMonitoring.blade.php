<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Barangay River Monitoring') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-10 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                RIVER MONITOR MUST HAVE A DYNAMIC CHARTS SYNC IN WITH THE TABLE, AND CAN EMIT A MODAL COMPONENT FOR
                QUICK SMS ALERT DURING WARNING RIVER LEVEL IN TABLE
            </div>
            <x-jet-section-border />
        </div>
    </div>
</x-app-layout>
