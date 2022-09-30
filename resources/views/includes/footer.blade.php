<footer class="p-4 bg-gray-900 shadow md:px-6 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="{{ route('homepage') }}" class="flex items-center mb-4 sm:mb-0">
            <img src="{{ asset('/images/EFAST-logo.png') }}" class="h-12 mr-3 rounded-full" alt="EFAST Logo" />
            <span class="self-center text-xl font-semibold text-white whitespace-nowrap">EFAST-Kalumpang</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-400 sm:mb-0">
            <li>
                <a href="{{ route('homepage') }}" class="mr-4 hover:underline md:mr-6 ">Home</a>
            </li>

            <li>
                <a href="{{ route('about-us') }}" class="mr-4 hover:underline md:mr-6 ">About Us</a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-700 sm:mx-auto lg:my-8" />
    <span class="block text-sm text-gray-400 sm:text-center">© 2022 <a href="{{ route('homepage') }}" class="hover:underline">EFAST-Kalumpang™</a>. All Rights Reserved.
    </span>
</footer>
