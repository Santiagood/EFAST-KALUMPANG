<footer class="p-4 rounded-md shadow md:px-6 md:py-8 bg-gray-900">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="{{ route('homepage') }}" class="flex items-center mb-4 sm:mb-0">
            <img src="{{ asset('/images/EFAST-logo.png') }}" class="mr-3 h-12 rounded-full" alt="EFAST Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">EFAST-Kalumpang</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm sm:mb-0 text-gray-400">
            <li>
                <a href="{{ route('homepage') }}" class="mr-4 hover:underline md:mr-6 ">Home</a>
            </li>
            <li>
                <a href="{{ route('system-feature') }}" class="mr-4 hover:underline md:mr-6">System Features</a>
            </li>
            <li>
                <a href="{{ route('about-us') }}" class="mr-4 hover:underline md:mr-6 ">About Us</a>
            </li>
            <li>
                <a href="{{ route('contact-us') }}" class="hover:underline">Contact Us</a>
            </li>
        </ul>
    </div>
    <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
    <span class="block text-sm  sm:text-center text-gray-400">© 2022 <a href="{{ route('homepage') }}" class="hover:underline">EFAST-Kalumpang™</a>. All Rights Reserved.
    </span>
</footer>
