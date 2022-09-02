<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Report Generator') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-10 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                DATATABLE FOR ACCOUNTS
                DATATABLE FOR SMS LOGS
                DATATABLE FOR RIVER LEVEL LOGS

                A DATATABLE MUST BE ABLE TO GENERATE EXCEL, PDF, AND SCREENSHOT OF THE CHARTS(PDF FORM), THEY CAN ALSO
                CREATE NEW CHARTS USING DATAS IN THE TABLE
            </div>
            <x-jet-section-border />
        </div>
    </div>
</x-app-layout>
