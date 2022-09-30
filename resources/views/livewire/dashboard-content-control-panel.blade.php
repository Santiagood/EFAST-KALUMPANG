<div class="w-full max-w-full p-3 text-left bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <p class="font-bold text-center">Infograph Control</p>
    <div class="grid grid-flow-col-dense gap-4 sm:flex-nowrap">
        <div class="col-span-2">
            <x-jet-input id="search" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.debounce.800ms="search" placeholder="Search an infograph..." />
        </div>
        <div class="col-span-1 justify-self-end">
            <button wire:click='createShowModal' type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('New infograph') }}
            </button>
        </div>
    </div>


        {{-- this is the table --}}
    <div class="relative mt-2 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 border border-indigo-400 dark:text-gray-400">
        <thead class="text-slate-600 font-light bg-slate-100 text-xs dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-2 py-2 text-center">
                    Infograph Title
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Infograph Description
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Infograph Image
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Order
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($allInfographs->count())
                @foreach ($allInfographs as $infograph)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-2 py-2 text-center">
                            {{ $infograph -> infograph_title }}
                        </td>
                        <td class="px-2 py-2 text-left">
                            @if ($infograph->infograph_message != null )
                                {{-- {{ $infograph -> infograph_message }} --}}
                                {{ Illuminate\Support\Str::limit($infograph -> infograph_message, 190) }}
                            @else
                                empty description
                            @endif
                        </td>
                        <td class="px-2 py-2 text-left">
                            <img src="{{ asset('storage/infograph_pictures/' . $infograph -> infograph_image) }}" class="h-20 mx-auto" alt="">
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $infograph -> infograph_order }}
                        </td>
                        <td class="px-2 py-2 md:whitespace-nowrap text-center">
                            <button wire:click='updateShowModal( {{ $infograph -> id }})' type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                {{ __('Update') }}
                            </button>
                            <button wire:click='deleteShowModal({{ $infograph -> id }})' type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                {{ __('Delete') }}
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
        {{ $allInfographs->links() }}
    </div>

    {{-- this is the modal we use in the store and update method that we will fired up --}}
        <x-jet-dialog-modal wire:model="modalFormVisible">
            <x-slot name="title">
                {{ __('Create New Infograph Post') }}
            </x-slot>

            <x-slot name="content">
                {{-- Input fields Title --}}
                <div class="grid grid-flow-row-dense grid-cols-2 gap-2">
                    <div class="w-full mx-auto my-1 mt-4">
                        <x-jet-label for="infograph_title" value="{{ __('Infograph Title') }}" />
                        <x-jet-input id="infograph_title" class="block w-full mt-1" type="text" wire:model.debounce.800ms="infograph_title" required placeholder="What to include in your first aid kit?"/>
                        @error('infograph_title')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                    </div>

                    {{-- input order --}}
                    <div class="w-full mx-auto my-1 mt-4">
                        <x-jet-label for="infograph_order" value="{{ __('Select Infograph Order') }}" />
                        <select id="infograph_order" name="infograph_order" wire:model="infograph_order" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        {{-- <select id="infograph_order" name="infograph_order" wire:model="infograph_order" class="block p-2 mb-6 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> --}}
                            <option value="1">First in the lists of infograph</option>
                            <option value="2">Second in the lists of infograph</option>
                            <option value="3">Third in the lists of infograph</option>
                            <option value="4">Fourth in the lists of infograph</option>
                            <option value="5">Fifth in the lists of infograph</option>
                        </select>
                        @error('infograph_order')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="w-full mx-auto my-1 mt-4">
                    <x-jet-label for="infograph_message" value="{{ __('Infograph Description') }}" />
                    <textarea id="infograph_message" wire:model="infograph_message" rows="4" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Infographic Description..."></textarea>
                    @error('infograph_message')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>

                {{-- Input fields image --}}
                <div class="mt-4">
                    <x-jet-label for="infograph_image" value="{{ __('Upload your Kalumpang ID') }}" />
                    <input wire:model="infograph_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="infograph_image" name="infograph_image" type="file">
                    <div wire:loading wire:target="infograph_image">Uploading...</div>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Image must be PNG, JPG, or JPEG (MAX: 20 MB).</p>
                    @error('infograph_image')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>
                @if ($infograph_image_preloaded)
                    Infographic uploaded:
                    <img src="{{ asset('storage/infograph_pictures/' . $infograph_image_preloaded) }}">
                @endif
                @if ($infograph_image)
                    Infographic Preview:
                    <img src="{{ $infograph_image->temporaryUrl() }}">
                @endif

            </x-slot>

            <x-slot name="footer">
                <button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Cancel') }}
                </button>
                @if ($infograph_Target_ID != null)

                    <button wire:click="update" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        {{ __('Update') }}
                    </button>
                @else
                    <button wire:click="store" wire:loading.attr="disabled" type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        {{ __('Create') }}
                    </button>
                @endif
            </x-slot>
        </x-jet-dialog-modal>

        <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
            <x-slot name="title">
                {{ __('Delete Infograph') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete this Infograph? Once this SMS Template is deleted, this record will be permanently deleted.') }}
            </x-slot>

            <x-slot name="footer">
                <button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Cancel') }}
                </button>

                <button wire:click='delete' wire:loading.attr="disabled" type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Delete') }}
                </button>
            </x-slot>
        </x-jet-dialog-modal>

</div>
