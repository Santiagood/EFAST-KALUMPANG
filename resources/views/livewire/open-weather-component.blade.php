<div class="w-fullmax-w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-3 md:p-5 dark:bg-gray-800 dark:border-gray-700">
    <div class="text-center" wire:poll.30000ms>
        <div><span class="font-bold">TODAY:</span> {{ now()->timezone('Asia/Manila')->toDayDateTimeString() }}</div>
        <button wire:click="try" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm p-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"><img class="max-h-3" src="{{ asset('images/refresh.png') }}" alt=""></button>
    </div>
    <div class="m-10 grid gap-5 sm:grid-cols-3 mx-auto max-w-screen-lg">
        {{-- Weather Today --}}
        <div class="px-4 py-6 shadow-lg shadow-blue-100 border border-stone-400 border-opacity-30 bg-white duration-200 hover:-translate-y-4 rounded-lg hover:shadow-2xl">
            <div class="h-14 w-14 rounded-xl border border-blue-600 bg-neutral-900" viewBox="0 0 20 20" fill="currentColor">
                <img class="" src="{{ asset('images/thunder.png') }}" alt="">
            </div>
            <p class="mt-4 font-medium">Weather Today</p>
            <p class="mt-2 text-xl font-semibold">
                (description here)
            </p>
            <span class="text-xs text-gray-400">Last Update: {{  now()->format('g:i a') }}</span>
        </div>

        {{-- Humidity Today --}}
        <div class="px-4 py-6 shadow-lg shadow-blue-100 border border-stone-400 border-opacity-30 bg-white duration-200 hover:-translate-y-4 rounded-lg hover:shadow-2xl">
            <div class="h-14 w-14 rounded-xl border border-blue-600 bg-neutral-900 p-1" viewBox="0 0 20 20" fill="currentColor">
                <img class="" src="{{ asset('images/humidity.png') }}" alt="">
            </div>
            <p class="mt-4 font-medium">Humidity Today</p>
            <p class="mt-2 text-xl font-semibold">
                (humid here)
                <span class="text-sm">
                    %
                </span>
            </p>
            <span class="text-xs text-gray-400">Last Update: {{  now()->format('g:i a') }}</span>
        </div>

        {{-- Temperature Today --}}
        <div class="px-4 py-6 shadow-lg shadow-blue-100 border border-stone-400 border-opacity-30 bg-white duration-200 hover:-translate-y-4 rounded-lg hover:shadow-2xl">
            <div class="h-14 w-14 rounded-xl border border-blue-600 bg-neutral-900 p-1" viewBox="0 0 20 20" fill="currentColor">
                <img class="" src="{{ asset('images/temperature.png') }}" alt="">
            </div>
            <p class="mt-4 font-medium">Temperature Today</p>
            <p class="mt-2 text-xl font-semibold">
                (temp here)
                <span class="text-sm">
                    °C
                </span>
            </p>
            <span class="text-xs text-gray-400">Last Update: {{  now()->format('g:i a') }}</span>
        </div>
    </div>
</div>
