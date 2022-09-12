<div class="p-3 w-full max-w-md bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="space-y-6">
        <h5 class="text-lg text-center font-bold text-gray-900 dark:text-white">Compose an SMS Alert to Resident</h5>
        <div>
            <label for="SMSTemplates" class="block text-sm font-mono text-blue-600 dark:text-gray-400">Choose an existing sms template</label>
            <select id="SMSTemplates" wire:model='selectedTemplate' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=" ">Select a template</option>
                @if($all_templates->count())
                    @foreach ($all_templates as $template)
                        <option value="{{ $template -> SMS_Template_Message }}">{{ $template -> SMS_Template_Title }}</option>
                    @endforeach
                @else
                    <option value=" ">No template found</option>
                @endif
            </select>
        </div>


        {{-- text input --}}
        <div>
            <form action="{{ route('BarangayOfficials.SendItexmo.sendSMS') }}" method="post">
                @csrf
                <label for="message" class="block mb-2 text-sm font-mono text-blue-600 dark:text-gray-400">Create an SMS message, or choose a template above then edit</label>
                <div class="flex items-center py-2 px-3 bg-gray-50 rounded-lg dark:bg-gray-700">
                    <textarea id="message" name="message" type="text" rows="4" class="block  p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $selectedTemplate }}</textarea>
                    <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                        <span class="sr-only">Send message</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
