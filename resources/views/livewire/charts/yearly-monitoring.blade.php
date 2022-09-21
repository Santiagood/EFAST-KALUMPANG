<div wire:poll class="w-full max-w-full p-3 text-center bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <span class="font-bold">TODAY:</span> {{ now()->timezone('Asia/Manila')->toDayDateTimeString() }}
    <div class="h-96">
        <livewire:livewire-column-chart
            key="{{ $yearlyColumnChartModel->reactiveKey() }}"
            :column-chart-model="$yearlyColumnChartModel"
        />
    </div>
</div>
