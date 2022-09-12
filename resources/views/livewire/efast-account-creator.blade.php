<div class="w-full max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="grid grid-flow-col-dense gap-4 sm:flex-nowrap">
        <div class="col-span-2">
            <x-jet-input id="search" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.debounce.800ms="search" placeholder="Search a user..." />
        </div>
        <div class="col-span-1 justify-self-end">
            <button wire:click='createShowModal' type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Create New Resident') }}
            </button>
        </div>
    </div>


    {{-- this is the table --}}
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
                    Resident Age
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Resident Gender
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Resident Address
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Resident Created at
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Resident Roles ID
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($EfastAccounts->count())
                @foreach ($EfastAccounts as $Account)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-2 py-2 text-center">
                            {{ $Account -> name }}
                        </td>
                        <td class="px-2 py-2 text-center">
                            @if ($Account -> email == null)
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 bg-gray-200 uppercase last:mr-0 mr-1">
                                    Account created manually
                                </span>
                            @else
                                {{ $Account -> email }}
                            @endif
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $Account -> mobile_number}}
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $Account -> age}}
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $Account -> gender }}
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $Account -> address }}
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $Account -> created_at }}
                        </td>
                        <td class="px-2 py-2 text-center">
                            @if ( $Account -> roles_id == 1)
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-blue-600 bg-blue-200  last:mr-0 mr-1">
                                    Barangay Official
                                </span>
                            @elseif($Account -> roles_id == 2)
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-yellow-600 bg-yellow-200  last:mr-0 mr-1">
                                    Resident Account
                                </span>
                            @endif
                        </td>
                        <td class="px-2 py-2 md:whitespace-nowrap text-center">
                            <button wire:click='updateShowModal( {{ $Account -> id }})' type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                {{ __('Update') }}
                            </button>

                            <button wire:click='deleteShowModal({{ $Account -> id }})' type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
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
        {{ $EfastAccounts->links() }}
    </div>




    {{-- create modal --}}
    <x-jet-dialog-modal wire:model="modalCreateVisible" >
        <x-slot name="title" class="text-center">
            {{ __('Create New Resident Account') }}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-2 grid-flow-row-dense gap-2">
                <div class="mt-4">
                    <x-jet-label for="Residents_Name" value="{{ __('Resident Name') }}" />
                    <x-jet-input id="Residents_Name" class="block w-full mt-1" type="text" wire:model.debounce.800ms="Residents_Name" required placeholder="José Rizal"/>
                    @error('Residents_Name')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="Residents_Mobile_Number" value="{{ __('Resident Number') }}" />
                    <x-jet-input id="Residents_Mobile_Number" class="block w-full mt-1" type="number" wire:model.debounce.800ms="Residents_Mobile_Number" required placeholder="09171234567"/>
                    @error('Residents_Mobile_Number')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="Residents_Age" value="{{ __('Resident Age') }}" />
                    <x-jet-input id="Residents_Age" class="block w-full mt-1" type="number" wire:model.debounce.800ms="Residents_Age" required placeholder="30"/>
                    @error('Residents_Age')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="Residents_Gender" value="{{ __('Resident Gender') }}" />
                    <select id="Residents_Gender" type="text" wire:model.debounce.800ms="Residents_Gender" name="Residents_Gender" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('Residents_Gender')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="Residents_Address" value="{{ __('Resident Address') }}" />
                    <select id="Residents_Address" wire:model.debounce.800ms="Residents_Address" name="Residents_Address" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option value="">Select Street</option>
                        @foreach (\App\Models\KalumpangStreet::all(); as $street)
                            <option value="{{ $street->Street_name }}">{{ $street->Street_name }}</option>
                        @endforeach
                    </select>
                    @error('Residents_Address')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="Residents_Roles_ID" value="{{ __('Resident Role') }}" />
                    <select id="Residents_Roles_ID" wire:model.debounce.800ms="Residents_Roles_ID" name="Residents_Roles_ID" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option value="">Select Role</option>
                        <option value="" disabled>BarangayOfficial</option>
                        <option value="2">Resident</option>
                    </select>
                    @error('Residents_Roles_ID')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <button wire:click="$toggle('modalCreateVisible')" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Cancel') }}
            </button>

            <button wire:click="create" wire:loading.attr="disabled" type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Create Account') }}
            </button>
        </x-slot>
    </x-jet-dialog-modal>



    {{-- update modal --}}
    <x-jet-dialog-modal wire:model="modalUpdateVisible">
        <x-slot name="title">
            {{ __('Update an account') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="Residents_Name" value="{{ __('Resident Name') }}" />
                <x-jet-input id="Residents_Name" class="block w-full mt-1" type="text" wire:model.debounce.800ms="Residents_Name" required placeholder="José Rizal"/>
                @error('Residents_Name')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="Residents_Mobile_Number" value="{{ __('Resident Number') }}" />
                <x-jet-input id="Residents_Mobile_Number" class="block w-full mt-1" type="number" wire:model.debounce.800ms="Residents_Mobile_Number" required placeholder="09171234567"/>
                @error('Residents_Mobile_Number')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="Residents_Address" value="{{ __('Resident Address') }}" />
                <select id="Residents_Address" wire:model.debounce.800ms="Residents_Address" name="Residents_Address" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="">Select Street</option>
                    @foreach (\App\Models\KalumpangStreet::all(); as $street)
                        <option value="{{ $street->Street_name }}">{{ $street->Street_name }}</option>
                    @endforeach
                </select>
                @error('Residents_Address')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
            </div>
            @if ($Residents_Email != null)
                <div class="mt-4">
                    <x-jet-label for="Residents_Roles_ID" value="{{ __('Resident Role') }}" />
                    <select id="Residents_Roles_ID" wire:model.debounce.800ms="Residents_Roles_ID" name="Residents_Roles_ID" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option value="">Select Role</option>
                        @foreach (\App\Models\Role::all() as $resident_role)
                            <option value="{{ $resident_role->id }}">{{ $resident_role->role }}</option>
                        @endforeach
                    </select>
                    @error('Residents_Roles_ID')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
                </div>
            @endif

        </x-slot>

        <x-slot name="footer">
            <button wire:click="$toggle('modalUpdateVisible')" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Cancel') }}
            </button>
            <button wire:click="update" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Update') }}
            </button>
        </x-slot>

    </x-jet-dialog-modal>


    <!-- Delete User Confirmation Modal -->
    <x-jet-dialog-modal wire:model="modalDeleteVisible">
        <x-slot name="title">
            {{ __('Delete Account') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this Account? Once this account is deleted, this record will be permanently deleted.') }}
        </x-slot>

        <x-slot name="footer">

            <button wire:click="$toggle('modalDeleteVisible')" wire:loading.attr="disabled" type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Cancel') }}
            </button>

            <button wire:click="delete" wire:loading.attr="disabled" type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Delete') }}
            </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>


