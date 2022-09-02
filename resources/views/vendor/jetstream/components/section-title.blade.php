<div class="flex justify-between md:col-span-1">
    <div class="px-4 sm:px-0">
        {{-- <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>

        <p class="mt-1 text-sm text-gray-600">
            {{ $description }}
        </p> --}}

        <div class="block max-w-sm p-6 text-center bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-2xl hover:border-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $description }}</p>
        </div>
    </div>


    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
