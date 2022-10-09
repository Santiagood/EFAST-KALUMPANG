<div class="w-full max-w-full p-3 text-left bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <p class="font-bold text-center">SMS Template Control</p>
    <div class="grid grid-flow-col-dense gap-4 sm:flex-nowrap">
        <div class="col-span-2">
            <x-jet-input id="search" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.debounce.800ms="search" placeholder="Search a template Title|Message|Author" />
        </div>
        <div class="col-span-1 justify-self-end">
            <button wire:click='createShowModal' type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('New Template') }}
            </button>
        </div>
    </div>



    {{-- this is the table --}}
    <div class="relative mt-2 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 border border-indigo-400 dark:text-gray-400">
        <thead class="text-slate-600 font-light bg-slate-100 text-xs dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-2 py-2 text-center">
                    Template Title
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Template Message
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Template Author
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Template Created At
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Template Update At
                </th>
                <th scope="col" class="px-2 py-2 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($allSMSTemplateContent->count())
                @foreach ($allSMSTemplateContent as $sms_template)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-2 py-2 text-center">
                            {{ $sms_template -> SMS_Template_Title }}
                        </td>
                        <td class="px-2 py-2 text-left">
                            {{ $sms_template -> SMS_Template_Message }}
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $sms_template -> SMS_Template_Author }}
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $sms_template -> created_at }}
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{ $sms_template -> updated_at }}
                        </td>
                        <td class="px-2 py-2 md:whitespace-nowrap text-center">
                            <button wire:click='updateShowModal( {{ $sms_template -> id }})' type="submit" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                {{ __('Update') }}
                            </button>
                            <button wire:click='deleteShowModal({{ $sms_template -> id }})' type="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
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
        {{ $allSMSTemplateContent->links() }}
    </div>


    {{-- this is the modal we use in the store and update method that we will fired up --}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Create New SMS Template') }}
        </x-slot>

        <x-slot name="content">

            {{-- Helper dialog --}}
            <details class="group">
                <summary class="flex items-center justify-between p-2 border border-blue-600 rounded-lg shadow-xl bg-gray-50 cursor-help">
                  <h5 class="font-medium text-gray-900">
                    Why SMS Template?
                  </h5>

                  <svg
                    class="flex-shrink-0 ml-1.5 w-5 h-5 transition duration-300 group-open:-rotate-180"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    />
                  </svg>
                </summary>

                <div class="relative block p-4 border-t-4 border-indigo-600 rounded-lg shadow-xl">
                    <p class="my-2 text-sm font-medium text-gray-500">
                        SMS template is a text that you can use over and over. SMS templates save you time. Instead of typing out an entire message, you can simply access a text template and insert it, and send. It can also help you reduce the chances of making a mistake with spelling or grammar that might happen if you text quickly.
                    </p>
                </div>
            </details>

            {{-- Input fields Title --}}
            <div class="mt-4">
                <x-jet-label for="SMS_Template_Title" value="{{ __('Template Title') }}" />
                <x-jet-input id="SMS_Template_Title" class="block w-full mt-1" type="text" wire:model.debounce.800ms="SMS_Template_Title" required placeholder="Evacuate to kalumpang elementary school"/>
                @error('SMS_Template_Title')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
            </div>

            {{-- Input fields Message --}}
            <div class="mt-4">
                <x-jet-label for="SMS_Template_Message" value="{{ __('Template Message') }}" />
                <textarea id="SMS_Template_Message" rows="8" type="text" wire:model.debounce.800ms="SMS_Template_Message" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required placeholder="Your message..."></textarea>
                @error('SMS_Template_Message')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
            </div>

        </x-slot>

        <x-slot name="footer">
            <button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled" type="submit" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Cancel') }}
            </button>
            @if ($SMS_Template_Target_ID != null)

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


    <!-- Delete User Confirmation Modal -->
    <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
        <x-slot name="title">
            {{ __('Delete SMS Template') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this SMS Template? Once this SMS Template is deleted, this record will be permanently deleted.') }}
        </x-slot>

        <x-slot name="footer">
            {{-- <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button> --}}
            <button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled" type="submit" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                {{ __('Cancel') }}
            </button>

            {{-- <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-jet-danger-button> --}}
                <button wire:click='delete' wire:loading.attr="disabled" type="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    {{ __('Delete') }}
                </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
