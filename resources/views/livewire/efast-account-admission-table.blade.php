<div class="w-full max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="grid grid-flow-col-dense gap-4 sm:flex-nowrap">
        <div class="col-span-2">
            <x-jet-input id="search" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.debounce.800ms="search" placeholder="Search a user..." />
        </div>
    </div>


    <div class="relative mt-2 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 border border-indigo-400 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-indigo-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-2 text-center">
                        Resident Name
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Resident Email
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Resident Number
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Resident Birthday
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Resident Gender
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Resident Address
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Resident Kalumpang ID
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($EfastAdmission->count())
                    @foreach ($EfastAdmission as $Account)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-2 py-2 text-center">
                                {{ $Account -> name }}
                            </td>
                            <td class="px-2 py-2 text-center">
                                {{ $Account -> email }}
                            </td>
                            <td class="px-2 py-2 text-center">
                                {{ $Account -> mobile_number}}
                            </td>
                            <td class="px-2 py-2 text-center">
                                {{ $Account -> birthday}}
                            </td>
                            <td class="px-2 py-2 text-center">
                                {{ $Account -> gender }}
                            </td>
                            <td class="px-2 py-2 text-center">
                                {{ $Account -> address }}
                            </td>
                            <td class="px-2 py-2 text-center items-center">
                                <img src="{{ asset('id_pictures/' . $Account -> id_picture) }}" class="h-20 mx-auto" alt="">
                            </td>
                            <td class="px-2 py-2 md:whitespace-nowrap text-center">
                                <button wire:click='accountViewShowModal( {{ $Account -> id }})' type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    {{ __('View ID') }}
                                </button>

                                <button wire:click='accept( {{ $Account -> id }})' type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    {{ __('Accept') }}
                                </button>

                                <button wire:click='deny({{ $Account -> id }})' type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    {{ __('Deny') }}
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @else
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                No Result!
                            </td>
                        </tr>
                @endif
            </tbody>
        </table>
        </div>
        <div class="mt-2">
            {{ $EfastAdmission->links() }}
        </div>


        <x-jet-dialog-modal wire:model="modalViewAccountVisible">
            <x-slot name="title">
                {{ __('Verify the authenticity of the ID') }}
            </x-slot>

            <x-slot name="content">
                <div class="mt-4">
                    <figure class="mx-auto">
                        <img class="mx-auto max-w-full h-96 rounded-lg" src="{{  asset('id_pictures/' . $Residents_ID_Picture) }}" alt="image description">
                        <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">{{ $Residents_name }}</figcaption>
                    </figure>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="$toggle('modalViewAccountVisible')" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Close') }}
                </button>
            </x-slot>

        </x-jet-dialog-modal>

</div>
