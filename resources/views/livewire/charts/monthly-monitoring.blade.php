<div wire:poll.5000ms class="w-full max-w-full p-3 text-center bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <center>
        <p class="font-bold">Monthly Average River Level</p>
        <select id="year" name="year" wire:model='year' wire:change="yearChange" class="block w-1/4 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value={{ now()->year }}>Select monthly for year: </option>
            @foreach (\App\Models\RiverLevel::select('year')->orderBy('created_at','desc')->distinct()->get(); as $years)
                <option value="{{ $years->year }}">Monthly Report for year: {{ $years->year }}</option>
            @endforeach
        </select>
    </center>
    <div class="h-96">
        <livewire:livewire-column-chart
            key="{{ $monthlyColumnChartModel->reactiveKey() }}"
            :column-chart-model="$monthlyColumnChartModel"
        />
    </div>
</div>
