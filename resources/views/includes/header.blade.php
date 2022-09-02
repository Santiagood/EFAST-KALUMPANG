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

            {{-- <li>
              <a class="text-white transition hover:text-white/75" href="{{ route('system-feature') }}">
                System Features
              </a>
            </li> --}}

            <li>
              <a class="text-white transition hover:text-white/75" href="{{ route('about-us') }}">
                About Us
              </a>
            </li>

            {{-- <li>
              <a class="text-white transition hover:text-white/75" href="{{ route('contact-us') }}">
                Contact Us
              </a>
            </li> --}}
          </ul>
        </nav>
        <div class="flex items-center gap-4">
            <div class="sm:gap-4 sm:flex">
            @if (Route::has('login'))
                @auth
                    <a class="inline-block px-5 py-2.5 text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-600 transition rounded-md shadow"
                    href="{{ url('/dashboard') }}">
                    Dashboard
                    </a>
                @else
                    <a class="inline-block px-5 py-2.5 text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-600 transition rounded-md shadow"
                    href="{{ route('login') }}">
                    Login
                    </a>
                    @if (Route::has('register'))
                        <a class="inline-block px-5 py-2.5 text-sm font-medium text-white bg-gray-800 rounded-md hover:text-white/75 transition"
                        href="{{ route('register') }}">
                        Register
                        </a>
                    @endif
                @endauth
            @endif
            </div>
        </div>
      </div>
    </div>
  </header>
