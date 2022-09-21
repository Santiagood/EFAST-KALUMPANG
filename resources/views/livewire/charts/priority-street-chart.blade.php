<div wire:poll class="w-full max-w-full p-3 text-center bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <span class="font-bold">TODAY:</span> {{ now()->timezone('Asia/Manila')->toDayDateTimeString() }}
    <div class="flex flex-wrap sm:flex-nowrap">
        <div class="w-full h-96">
            <livewire:livewire-pie-chart
                key="{{ $PriorityStreetChartModel->reactiveKey() }}"
                :pie-chart-model="$PriorityStreetChartModel"
            />
        </div>
        <div class="w-full h-96">
            <livewire:livewire-pie-chart
                key="{{ $ResidentsPerStreetChartModel->reactiveKey() }}"
                :pie-chart-model="$ResidentsPerStreetChartModel"
            />
        </div>
        <div class="w-full h-96">
            <livewire:livewire-column-chart
                key="{{ $RegisteredAsChartModel->reactiveKey() }}"
                :column-chart-model="$RegisteredAsChartModel"
            />
        </div>
    </div>
</div>
