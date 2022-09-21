<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div>
            <h1 class="text-3xl font-bold text-center">Sign up</h1>
            <h3 class="text-lg font-semibold text-center">Create an account as resident</h1>
        </div>

        <x-jet-validation-errors class="mt-2 mb-4" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-flow-row-dense grid-cols-2 gap-2">
                <div class="w-full col-span-2 mx-auto my-1">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block w-full mt-1 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" :value="old('name')" placeholder="José Rizal" required autofocus autocomplete="name" />
                </div>

                <div class="w-full mx-auto my-1">
                    <x-jet-label for="mobile_number" value="{{ __('Mobile Number') }}" />
                    <x-jet-input id="mobile_number" class="block w-full mt-1 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="mobile_number" :value="old('mobile_number')" placeholder="09171234567" required />
                </div>

                <div class="w-full mx-auto my-1">
                    <x-jet-label for="birthday" value="{{ __('Birthday') }}" />
                    <x-jet-input id="birthday" class="block w-full mt-1 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="birthday" :value="old('birthday')" placeholder="" required />
                </div>

                <div class="w-full mx-auto my-1">
                    <x-jet-label for="gender" value="{{ __('Gender') }}" />
                    <select id="gender" name="gender" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="I Prefer Not To Say">I prefer not to say</option>
                    </select>
                </div>

                <div class="w-full mx-auto my-1">
                    <x-jet-label for="registerMeAs" value="{{ __('Register me as:') }}" />
                    <select id="registerMeAs" name="registerMeAs" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="N/A">Select</option>
                        <option value="Person with disability">Person with disability</option>
                        <option value="Elderly">Elderly</option>
                        <option value="LGBTQ">LGBTQ</option>
                    </select>
                </div>

                <div class="w-full col-span-2 mx-auto my-1">
                    <x-jet-label for="address" value="{{ __('Address') }}" />
                    <select id="address" name="address" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="">Select Street</option>
                        @foreach (\App\Models\KalumpangStreet::all(); as $street)
                            <option value="{{ $street->Street_name }}">{{ $street->Street_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full col-span-2 mx-auto my-1">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block w-full mt-1 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" placeholder="José_Rizal@gmail.com" required />
                </div>

                <div class="w-full col-span-2 mx-auto my-1">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block w-full mt-1 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" placeholder="YouWontGuessThisOne" required autocomplete="new-password" />
                </div>

                <div class="w-full col-span-2 mx-auto my-1">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block w-full mt-1 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password_confirmation" placeholder="YouWontGuessThisOne" required autocomplete="new-password" />
                </div>

                <div class="w-full col-span-2 mx-auto my-1">
                    <x-jet-label for="id_picture" value="{{ __('Upload your Kalumpang ID') }}" />
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="id_picture" name="id_picture" type="file" required>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Image must be PNG, JPG, or JPEG (MAX: 5 MB).</p>
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</x-guest-layout>
