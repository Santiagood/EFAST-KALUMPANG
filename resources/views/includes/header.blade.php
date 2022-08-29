<header class="bg-gray-900 rounded-b-lg">
    <div class="flex items-center h-16 max-w-screen-xl gap-8 px-4 mx-auto sm:px-6 lg:px-8">
        <a class="block text-teal-300" href="{{ route('homepage') }}">
            <span class="sr-only">Home</span>
            <img src="{{ asset('/images/EFAST-logo.png') }}" alt="" class="flex items-center justify-center rounded-full max-h-12">
        </a>

      <div class="flex items-center justify-end flex-1 md:justify-between">
        <nav class="hidden md:block" aria-labelledby="header-navigation">
          <h2 class="sr-only" id="header-navigation">Header navigation</h2>

          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="text-white transition hover:text-white/75" href="{{ route('homepage') }}">
                Home
              </a>
            </li>

            <li>
              <a class="text-white transition hover:text-white/75" href="{{ route('system-feature') }}">
                System Features
              </a>
            </li>

            <li>
              <a class="text-white transition hover:text-white/75" href="{{ route('about-us') }}">
                About Us
              </a>
            </li>

            <li>
              <a class="text-white transition hover:text-white/75" href="{{ route('contact-us') }}">
                Contact Us
              </a>
            </li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <div class="sm:gap-4 sm:flex">
            <a
              class="inline-block px-5 py-2.5 text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-600 transition rounded-md shadow"
              href="{{ route('login') }}"
            >
              Login
            </a>

            <a
              class="inline-block px-5 py-2.5 text-sm font-medium text-white bg-gray-800 rounded-md hover:text-white/75 transition"
              href="{{ route('register') }}"

            >
              Register
            </a>
          </div>

          {{-- <button
            class="block p-2.5 text-white bg-gray-800 rounded md:hidden hover:text-white/75 transition"
          >
            <span class="sr-only">Toggle menu</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button> --}}
        </div>
      </div>
    </div>
  </header>
