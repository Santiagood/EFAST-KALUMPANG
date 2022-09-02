<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Manage EFAST Accounts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-10 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                EFAST ACCOUNT DATATABLE - CREATE/ REGISTER NEW ACCOUNT, DISPLAY TABLE, UPDATE ACCOUNT ROLE, DELETE ACCOUNT,
                SEARCH - EMAIL, NAME, MOBILE NUMBER
                FILTERS - USER ROLE
            </div>
            <x-jet-section-border />
        </div>
    </div>
</x-app-layout>
