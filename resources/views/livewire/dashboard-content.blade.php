<div class="w-full max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="text-center max-w-xl mx-auto">
        <h1 class="text-3xl md:text-6xl font-bold mb-5 text-gray-600">Read the latest <br>Infographs.</h1>
        <h3 class="text-lg mb-5 font-light">"The Lord is good, a strong refuge when trouble comes. He is close to those who trust in him."<br>
            <h4 class="text-lg mb-2 font-light">Nahum 1:7 - NLT</h4>
        </h3>
        <div class="text-center mb-5">
            <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
        </div>
        <div class="pb-4">
            <x-jet-input id="search" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.debounce.800ms="search" placeholder="Search an infograph..." />
        </div>
    </div>


    <div class="flex flex-wrap gap-4 h-fit justify-items-start justify-center">
        @if ($showAllInfographs->count())
        @foreach ($showAllInfographs as $infograph)
            <div class="max-w-xs max-h-fit h-fit w-72 bg-white rounded-lg border border-black hover:shadow-xl hover:shadow-slate-600 ">
                <div class="h-48">
                    <img class="rounded-t-lg object-cover object-top h-48 w-full" src="{{ asset('storage/infograph_pictures/' . $infograph->infograph_image) }}" alt="" />
                </div>
                <div class="p-5">
                    <div>
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-black">{{ $infograph->infograph_title }}</h5>
                    </div>
                    <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400">{{ Illuminate\Support\Str::limit($infograph->infograph_message, 82) }}</p>
                    <button class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Open Image
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        @endforeach
        @else
        <div class="max-w-xs bg-white rounded-lg border border-black hover:shadow-xl hover:shadow-slate-600 bg-gradient-to-tr from-blue-100 via-blue-300 to-blue-500">
            <div class="h-48">
                <img class="rounded-t-lg object-cover object-top h-48 w-full" src="{{ asset('images/emptyIcon.jpg') }}" alt="" />
            </div>
            <div class="p-5">
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">No Result Found!</h5>
                </div>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">We currently do not have an infograph about {{ $search }}. You may suggest this to the barangay official. Use the chat at the bottom right of your screen.</p>
            </div>
        </div>
        @endif
    </div>
    <div class="mt-4">
        {{ $showAllInfographs->links() }}
    </div>
</div>
</div>


<!-- component -->
{{-- <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css')</style> --}}

{{-- <div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center py-5">
    <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-16 md:py-24 text-gray-800">
        <div class="w-full max-w-6xl mx-auto">
            <div class="text-center max-w-xl mx-auto">
                <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600">Read the latest <br>Infographs.</h1>
                <h3 class="text-xl mb-5 font-light">"The Lord is good, a strong refuge when trouble comes. He is close to those who trust in him."<br>
                    <h4 class="text-lg mb-2 font-light">Nahum 1:7 - NLT</h4>
                </h3>
                <div class="text-center mb-5">
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                </div>
                <div class="pb-4">
                    <x-jet-input id="search" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.debounce.800ms="search" placeholder="Search a template..." />
                </div>
            </div>

        </div>
        <div class="flex flex-wrap gap-4 h-fit justify-items-start justify-center">
            @if ($showAllInfographs->count())
                @foreach ($showAllInfographs as $infograph)
                    <div class="max-w-xs max-h-fit h-fit w-72 bg-white rounded-lg border border-black hover:shadow-xl hover:shadow-slate-600 bg-gradient-to-tr from-blue-100 via-blue-300 to-blue-500">
                        <div class="h-48">
                            <img class="rounded-t-lg object-cover object-top h-48 w-full" src="{{ asset('storage/infograph_pictures/' . $infograph->infograph_image) }}" alt="" />
                        </div>
                        <div class="p-5">
                            <div>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">{{ $infograph->infograph_title }}</h5>
                            </div>

                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Illuminate\Support\Str::limit($infograph->infograph_message, 82) }}</p>
                            <button class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Open Image
                                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="max-w-xs bg-white rounded-lg border border-black hover:shadow-xl hover:shadow-slate-600 bg-gradient-to-tr from-blue-100 via-blue-300 to-blue-500">
                    <div class="h-48">
                        <img class="rounded-t-lg object-cover object-top h-48 w-full" src="{{ asset('images/emptyIcon.jpg') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">No Result Found!</h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">We currently do not have an infograph about {{ $search }}. You may suggest this to the barangay official. Use the chat at the bottom right of your screen.</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="mt-4">
            {{ $showAllInfographs->links() }}
        </div>
    </div>
</div> --}}

