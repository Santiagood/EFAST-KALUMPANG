<x-guest-layout>
    <div class="pt-4 bg-fixed bg-no-repeat bg-cover" style="background-image: url('{{ asset('images/kalumpangMapWallpaper.png') }}');">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 mb-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout>
