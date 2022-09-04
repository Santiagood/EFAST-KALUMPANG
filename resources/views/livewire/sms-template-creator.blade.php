<div>
    <div class="flex items-center justify-end text-center">
        <x-jet-button wire:click='createShowModal'>
            {{ __('Create SMS Template') }}
        </x-jet-button>
    </div>


    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Create New SMS Template') }}
        </x-slot>

        <x-slot name="content">

            {{-- Helper dialog --}}
            <details class="group">
                <summary class="flex items-center justify-between p-2 rounded-lg  bg-gray-50 border border-blue-600 shadow-xl cursor-help">
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

                <div class="relative block p-4 border-t-4 border-indigo-600 shadow-xl rounded-lg">
                    <p class="my-2 text-sm font-medium text-gray-500">
                        SMS template is a text that you can use over and over. SMS templates save you time. Instead of typing out an entire message, you can simply access a text template and insert it, and send. It can also help you reduce the chances of making a mistake with spelling or grammar that might happen if you text quickly.
                    </p>
                </div>
            </details>

            {{-- Input fields Title --}}
            <div class="mt-4">
                <x-jet-label for="SMS_Template_Title" value="{{ __('Template Title') }}" />
                <x-jet-input id="SMS_Template_Title" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="SMS_Template_Title" required placeholder="Evacuate to kalumpang elementary school"/>
                @error('SMS_Template_Title')<span class="text-red-500 text-sm font-semibold">{{ $message }}</span>@enderror
            </div>

            {{-- Input fields Message --}}
            <div class="mt-4">
                <x-jet-label for="SMS_Template_Message" value="{{ __('Template Message') }}" />
                <textarea id="SMS_Template_Message" rows="4" type="text" wire:model.debounce.800ms="SMS_Template_Message" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required placeholder="Your message..."></textarea>
                @error('SMS_Template_Message')<span class="text-red-500 text-sm font-semibold">{{ $message }}</span>@enderror
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-3 bg-blue-600" wire:click="store" wire:loading.attr="disabled">
                {{ __('Create') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
