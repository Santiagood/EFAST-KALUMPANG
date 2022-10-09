<div class="w-full max-w-full p-3 text-left bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <p class="font-bold text-center">Kalumpang Street Control</p>
    <div class="grid grid-flow-col-dense gap-4 sm:flex-nowrap">
        <div class="col-span-2">
            <x-jet-input id="search" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.debounce.800ms="search" placeholder="Search a street Street name|Priority" />
        </div>
        <div class="col-span-1 justify-self-end">
            <button wire:click='createShowModal' type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('New Street') }}
            </button>
        </div>
    </div>

    <div class="relative mt-2 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 border border-indigo-400 dark:text-gray-400">
            <thead class="text-slate-600 font-light bg-slate-100 text-xs dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-2 text-center">
                        Street Name
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Priority Level
                    </th>
                    <th scope="col" class="px-2 py-2 text-center">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($allStreets->count())
                    @foreach ($allStreets as $street)
                        <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-2 py-2 text-center">
                                {{ $street -> Street_name }}
                            </td>
                            <td class="px-2 py-2 text-center">
                                Priority level: {{ $street -> Priority }}
                            </td>
                            <td class="px-2 py-2 md:whitespace-nowrap text-center">
                                <button wire:click='updateShowModal( {{ $street -> id }})' type="submit" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    {{ __('Update') }}
                                </button>
                                <button wire:click='deleteShowModal({{ $street -> id }})' type="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
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
            {{ $allStreets->links() }}
        </div>



    {{-- create/ update modal --}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Create New Street') }}
        </x-slot>

        <x-slot name="content">
            {{-- Input fields Title --}}
            <div class="w-full mx-auto my-1 mt-4">
                <x-jet-label for="Street_name" value="{{ __('Street name') }}" />
                <x-jet-input id="Street_name" class="block w-full mt-1" type="text" wire:model.debounce.800ms="Street_name" required/>
                @error('Street_name')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
            </div>

            {{-- input order --}}
            <div class="w-full mx-auto my-1 mt-4">
                <x-jet-label for="Priority" value="{{ __('Select the priority of the street') }}" />
                <select id="Priority" name="Priority" wire:model="Priority" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value=null>Select Priority Level</option>
                    <option value="1">First Priority / Closest to river</option>
                    <option value="2">Second Priority / Close to river</option>
                    <option value="3">Third Priority / Furthest to river</option>
                </select>
                @error('Priority')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled" type="submit" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Cancel') }}
            </button>
            @if ($street_Target_ID != null)
                <button wire:click="update" wire:loading.attr="disabled" type="submit" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Update') }}
                </button>
            @else
                <button wire:click="store" wire:loading.attr="disabled" type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Create') }}
                </button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
        <x-slot name="title">
            {{ __('Delete Street') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this Street? Once this street is deleted, this record will be permanently deleted.') }}
        </x-slot>

        <x-slot name="footer">
            <button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled" type="submit" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Cancel') }}
            </button>

            <button wire:click='delete' wire:loading.attr="disabled" type="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Delete') }}
            </button>
        </x-slot>
    </x-jet-dialog-modal>

</div>