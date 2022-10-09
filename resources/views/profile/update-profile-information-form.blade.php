<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="object-cover w-20 h-20 rounded-full">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-20 h-20 bg-center bg-no-repeat bg-cover rounded-full"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="submit" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="submit" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="block w-full mt-1" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="block w-full mt-1" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="mt-2 text-sm">
                    {{ __('Your email address is unverified.') }}

                    <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900" wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p v-show="verificationLinkSent" class="mt-2 text-sm font-medium text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>

        <!-- mobile number -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="mobile_number" value="{{ __('Mobile Number') }}" />
            <x-jet-input id="mobile_number" type="number" class="block w-full mt-1" wire:model.defer="state.mobile_number" autocomplete="mobile_number" />
            <x-jet-input-error for="mobile_number" class="mt-2" />
        </div>

        <!-- address -->
        <div class="cols-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <select id="address" wire:model.debounce.800ms="state.address" name="address" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autocomplete="address" required>
                <option value="">Select Street</option>
                @foreach (\App\Models\KalumpangStreet::all(); as $street)
                    <option value="{{ $street->Street_name }}">{{ $street->Street_name }}</option>
                @endforeach
            </select>
            @error('address')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
        </div>

        <!-- categories -->
        <div class="cols-span-6 sm:col-span-4">
            <x-jet-label for="registerMeAs" value="{{ __('Registered As') }}" />
            <select id="registerMeAs" wire:model.debounce.800ms="state.registerMeAs" name="registerMeAs" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autocomplete="registerMeAs" required>
                <option value="">Select Category</option>
                @foreach (\App\Models\residentCategory::all(); as $Category)
                    <option value="{{ $Category->category }}">{{ $Category->category }}</option>
                @endforeach
            </select>
            @error('registerMeAs')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
        </div>

        <!-- birthday -->
        <div class="cols-span-6 sm:col-span-4">
            <x-jet-label for="birthday" value="{{ __('Birthday') }}" />
            <x-jet-input id="birthday" wire:model.debounce.800ms="state.birthday" name="birthday" autocomplete="birthday" class="block w-full mt-1 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" required />
            @error('birthday')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
        </div>

        <!-- gender -->
        <div class="cols-span-6 sm:col-span-4">
            <x-jet-label for="gender" value="{{ __('Gender') }}" />
            <select id="gender" name="gender" wire:model.debounce.800ms="state.gender" autocomplete="gender" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required />
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="I Prefer Not To Say">I prefer not to say</option>
            </select>
            @error('gender')<span class="text-sm font-semibold text-red-500">{{ $message }}</span>@enderror
        </div>


    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        {{-- <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button> --}}
        <button wire:loading.attr="disabled" wire:target="photo" type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            {{ __('Save') }}
        </button>
    </x-slot>
</x-jet-form-section>
