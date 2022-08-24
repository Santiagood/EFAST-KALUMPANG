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

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="grid grid-cols-2 grid-flow-row-dense gap-2">
                <div class="mx-auto my-1 col-span-2 w-full">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" :value="old('name')" placeholder="José Rizal" required autofocus autocomplete="name" />
                </div>

                <div class="mx-auto my-1 col-span-2 w-full">
                    <x-jet-label for="mobile_number" value="{{ __('Mobile Number') }}" />
                    <x-jet-input id="mobile_number" class="block mt-1 w-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="mobile_number" :value="old('mobile_number')" placeholder="09171234567" required />
                </div>

                <div class="mx-auto my-1 col-span-2 w-full">
                    <x-jet-label for="address" value="{{ __('Address') }}" />
                    <x-jet-input id="address" class="block mt-1 w-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="address" :value="old('address')" placeholder="M.H Del Pilar Street, Kalumpang" required />
                </div>


                <div class="mx-auto my-1 w-full">
                    <x-jet-label for="age" value="{{ __('Age') }}" />
                    <x-jet-input id="age" class="block mt-1 w-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="age" :value="old('age')" placeholder="30" required />
                </div>

                <div class="mx-auto my-1 w-full">
                    <x-jet-label for="gender" value="{{ __('Gender') }}" />
                    <select id="gender" name="gender" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="mx-auto my-1 col-span-2 w-full">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" placeholder="José_Rizal@gmail.com" required />
                </div>

                <div class="mx-auto my-1 col-span-2 w-full">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" placeholder="YouWontGuessThisOne" required autocomplete="new-password" />
                </div>

                <div class="mx-auto my-1 col-span-2 w-full">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password_confirmation" placeholder="YouWontGuessThisOne" required autocomplete="new-password" />
                </div>

            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
