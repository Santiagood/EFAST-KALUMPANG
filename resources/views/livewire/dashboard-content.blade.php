<div class="w-full max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center max-w-xl mx-auto">
            <h1 class="text-3xl md:text-6xl font-bold mb-5 text-gray-600">Read the latest <br>Infographs.</h1>
            <h3 class="text-sm mb-3 font-light md:text-lg">"The Lord is good, a strong refuge when trouble comes. He is close to those who trust in him."<br>
                <h4 class="text-xs md:text-base mb-2 font-light">Nahum 1:7 - NLT</h4>
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
                <div class="mx-auto my-10 grid max-w-screen-xl gap-y-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($showAllInfographs as $infograph)
                        <div class="group cursor mx-4 overflow-hidden rounded-2xl bg-white shadow-xl duration-200 hover:-translate-y-4">
                        <div class="flex h-60 flex-col justify-between overflow-hidden">
                            <img src="{{ asset('storage/infograph_pictures/' . $infograph->infograph_image) }}" />
                        </div>
                        <div class="flex-1 overflow-hidden bg-white px-6 py-8">
                            <h5 class="group-hover:text-indigo-600 mb-4 text-xl font-bold">{{ $infograph->infograph_title }}</h5>
                            <p class="mb-8 text-gray-600">{{ Illuminate\Support\Str::limit($infograph->infograph_message, 82) }}</p>
                            <div class="flex justify-between">
                            {{-- <a href="#" class="group text-lg font-bold focus:text-indigo-600 hover:text-indigo-600"> --}}
                            <button class="group text-lg font-bold focus:text-indigo-600 hover:text-indigo-600" wire:click='viewShowModal({{ $infograph->id }})' class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span>▷</span>
                                <span class="underline">View the content</span>
                            </button>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="mx-auto my-10 grid max-w-screen-xl gap-y-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="group cursor mx-4 overflow-hidden rounded-2xl bg-white shadow-xl duration-200 hover:-translate-y-4">
                        <div class="flex h-60 flex-col justify-between overflow-hidden">
                            <img src="{{ asset('images/emptyIcon.jpg') }}" />
                        </div>
                        <div class="flex-1 overflow-hidden bg-white px-6 py-8">
                            <h5 class="group-hover:text-indigo-600 mb-4 text-xl font-bold">No Result Found!</h5>
                            <p class="mb-8 text-gray-600">We currently do not have an infograph about {{ $search }}. You may suggest this to the barangay official. Use the chat at the bottom right of your screen.</p>
                            <div class="flex justify-between">
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="mt-4">
            {{ $showAllInfographs->links() }}
        </div>
    </div>


    <x-jet-dialog-modal wire:model="modalViewInfographVisible">
        <x-slot name="title">
            <div class="text-center font-bold py-2">
                {{ $infograph_title }}
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <figure class="mx-auto">
                    <img class="mx-auto max-w-full h-full rounded-lg" src="{{ asset('storage/infograph_pictures/' . $infograph_image) }}">
                    <figcaption class="mt-2 text-lg font-semibold text-center text-black">{{ $infograph_title }}</figcaption>
                    <figcaption class="mt-2 text-base font-normal text-center text-gray-500">{{ $infograph_message }}</figcaption>
                </figure>
            </div>
        </x-slot>

        <x-slot name="footer">
            <button wire:click="$toggle('modalViewInfographVisible')" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Close') }}
            </button>
            <button wire:click="export" wire:loading.attr="disabled" type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Download Infograph') }}
            </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>


