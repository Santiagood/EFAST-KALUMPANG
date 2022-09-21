<div  class="w-full max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="grid grid-flow-col-dense gap-4 sm:flex-nowrap">
        <div class="col-span-2">
            <x-jet-input id="search" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.debounce.800ms="search" placeholder="Search an sms log..." />
        </div>
    </div>

    {{-- this is the table --}}
    <div class="relative mt-2 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 border border-indigo-400 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-indigo-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-2 py-2">
                    Sent SMS Message
                </th>
                <th scope="col" class="px-2 py-2">
                    Sent SMS Author
                </th>
                <th scope="col" class="px-2 py-2">
                    Sent SMS Status
                </th>
                <th scope="col" class="px-2 py-2">
                    Sent Status Message
                </th>
                <th scope="col" class="px-2 py-2">
                    Sent SMS Date
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($SentMessagelogs->count())
                @foreach ($SentMessagelogs as $sms_log)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-2 py-2">
                            {{ Illuminate\Support\Str::limit($sms_log -> Sent_Message, 82) }}
                        </td>
                        <td class="px-2 py-2">
                            {{ $sms_log -> Sent_Sender }}
                        </td>
                        <td class="px-2 py-2">
                            @if ($sms_log -> Sent_Status == 'Success')
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-blue-600 bg-blue-200  last:mr-0 mr-1">
                                    {{ $sms_log -> Sent_Status }}
                                </span>
                            @elseif ($sms_log -> Sent_Status == 'Pending')
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-yellow-600 bg-yellow-200  last:mr-0 mr-1">
                                    {{ $sms_log -> Sent_Status }}
                                </span>
                            @elseif ($sms_log -> Sent_Status == 'Failed')
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-red-600 bg-red-200  last:mr-0 mr-1">
                                    {{ $sms_log -> Sent_Status }}
                                </span>
                            @else
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-gray-600 bg-gray-200  last:mr-0 mr-1">
                                    Unknown
                                </span>
                            @endif

                        </td>
                        <td class="px-2 py-2 text-xs">
                            {{$sms_log -> Sent_Status_Message }}
                        </td>
                        <td class="px-2 py-2">
                            {{$sms_log -> created_at }}
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
        {{ $SentMessagelogs->links() }}
    </div>
</div>

