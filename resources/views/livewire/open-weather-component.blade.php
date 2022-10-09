<div wire:poll.10000ms="refreshWeather" class="w-full max-w-full p-3 bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <div>
        <div class="text-center"><span class="font-bold">TODAY:</span> {{ now()->timezone('Asia/Manila')->toDayDateTimeString() }}</div>
    </div>

    <div class="m-4 grid gap-5 sm:grid-cols-3 mx-auto max-w-screen-lg">
        <div class="px-4 py-6 shadow-lg shadow-blue-100 border border-stone-400 border-opacity-30 bg-slate-50 duration-200 hover:-translate-y-4 rounded-lg hover:shadow-2xl">
            <div class="h-20 w-20 rounded-xl border border-blue-600 bg-gray-900 p-1" viewBox="0 0 20 20" fill="currentColor">
                @if($weather_icon != null)
                    <img class="filter drop-shadow-2xl" src="{{ asset('http://openweathermap.org/img/wn/'. $weather_icon . '@2x.png') }}" alt="">
                @else
                    <img class="p-3 filter drop-shadow-2xl" src="{{ asset('images/season.png') }}" alt="">
                @endif
            </div>
            <p class="mt-4 font-medium">Weather Today</p>
            <p class="mt-2 text-xl font-semibold">
                {{ $weather_main }}
                <span class="text-base font-light">
                - {{ $weather_desc }}
                </span>
            </p>
            <span class="text-xs text-gray-400">Last Update: {{ $time }}</span>
        </div>

        <div class="px-4 py-6 shadow-lg shadow-blue-100 border border-stone-400 border-opacity-30 bg-slate-50 duration-200 hover:-translate-y-4 rounded-lg hover:shadow-2xl">
            <div class="h-20 w-20 rounded-xl border border-blue-600 bg-gray-900 p-1" viewBox="0 0 20 20" fill="currentColor">
                <img class="p-3 filter drop-shadow-2xl" src="{{ asset('images/humidity.png') }}" alt="">
            </div>
            <p class="mt-4 font-medium">Humidity Today</p>
            <p class="mt-2 text-xl font-semibold">
                {{ $humid_num }}
                <span class="text-sm">
                    %
                </span>
            </p>
            <span class="text-xs text-gray-400">Last Update: {{ $time }}</span>
        </div>

        <div class="px-4 py-6 shadow-lg shadow-blue-100 border border-stone-400 border-opacity-30 bg-slate-50 duration-200 hover:-translate-y-4 rounded-lg hover:shadow-2xl">
            <div class="h-20 w-20 rounded-xl border border-blue-600 bg-gray-900 p-1" viewBox="0 0 20 20" fill="currentColor">
                <img class="p-3 filter drop-shadow-2xl" src="{{ asset('images/temperature.png') }}" alt="">
            </div>
            <p class="mt-4 font-medium">Temperature Today</p>
            <p class="mt-2 text-xl font-semibold">
                {{ $temp_num }}
                <span class="text-sm">
                    °C
                </span>
            </p>
            <span class="text-xs text-gray-400">Last Update: {{ $time }}</span>
        </div>
    </div>

</div>
