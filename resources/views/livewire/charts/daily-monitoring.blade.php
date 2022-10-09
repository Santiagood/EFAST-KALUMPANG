<div wire:poll.5000ms class="w-full max-w-full p-3 text-center bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <center>
        <p class="font-bold">Daily Average River Level</p>
        <select id="day" name="day" wire:model='day' wire:change="dayChange" class="block  mt-1 w-1/3 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value={{ now()->timezone('Asia/Manila')->format('Y-m-d') }}>Select Date</option>
            @foreach (\App\Models\RiverLevel::select('date')->orderBy('created_at','desc')->distinct()->get(); as $days)
                <option value="{{ $days->date }}">{{  \Carbon\Carbon::parse($days->date)->format('M. d, Y') . ' | ' . \Carbon\Carbon::parse($days->date)->englishDayOfWeek  . ' | ' . \Carbon\Carbon::parse($days->date)->diffForHumans(['options' => \Carbon\Carbon::ONE_DAY_WORDS])}}</option>
            @endforeach
        </select>
    </center>
    <div class="h-96">
        <livewire:livewire-area-chart
            key="{{ $dailyAreaChartModel->reactiveKey() }}"
            :area-chart-model="$dailyAreaChartModel"
        />
    </div>
</div>
