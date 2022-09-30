@extends('layouts.frontpage')

@section('contents')


<section class="text-white bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:h-fit lg:items-center">
        <div class="text-center mr-auto place-self-center lg:col-span-7">
            <h1 class="text-3xl font-extrabold text-transparent sm:text-5xl bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
                EFAST-Kalumpang.
                <span class="text-lg inline-block md:text-2xl sm:block"> A Flood Alarm System for Kalumpang </span>
            </h1>
            <p class="max-w-xl mx-auto mt-4  sm:leading-relaxed sm:text-lg">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                tenetur fuga ducimus numquam ea!
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring" href="{{ route('register') }}">
                    Get Started
                </a>
                <a class="block w-full px-12 py-3 text-sm font-medium text-white border border-blue-600 rounded sm:w-auto hover:bg-blue-600 active:bg-blue-500 focus:outline-none focus:ring" href="{{ route('about-us') }}" >
                    Learn More
                </a>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ asset('images/flooding.png') }}" alt="mockup">
        </div>
    </div>
</section>

<section class="text-white bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-white sm:text-lg">
            <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-white">We didn't reinvent the wheel</h2>
            <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
            <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
        </div>
    </div>
</section>


{{-- <section class="text-white bg-gray-900">
    <div class="max-w-screen-xl px-4 py-20 mx-auto lg:h-screen lg:items-center lg:flex">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold text-transparent sm:text-5xl bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
                EFAST-Kalumpang.
                <span class="text-lg inline-block md:text-2xl sm:block"> A Flood Alarm System for Kalumpang </span>
            </h1>

            <p class="max-w-xl mx-auto mt-4 sm:leading-relaxed sm:text-xl">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                tenetur fuga ducimus numquam ea!
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring" href="{{ route('register') }}">
                Get Started
                </a>
                <a class="block w-full px-12 py-3 text-sm font-medium text-white border border-blue-600 rounded sm:w-auto hover:bg-blue-600 active:bg-blue-500 focus:outline-none focus:ring" href="{{ route('about-us') }}" >
                Learn More
                </a>
            </div>
        </div>
    </div>
</section> --}}

{{-- Home --}}
{{-- <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col flex-wrap items-center w-full mb-20 text-center">
        <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Welcome to EFAST-Kalumpang</h1>
        <p class="w-full leading-relaxed text-gray-500 lg:w-1/2">Emergency help? EFAST got you covered.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 xl:w-1/3 md:w-1/2">
          <div class="p-6 border border-gray-200 rounded-lg">
            <div class="inline-flex items-center justify-center w-10 h-10 mb-4 bg-indigo-100 rounded-full text-sky-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="mb-2 text-lg font-medium text-g-ray900 title-font">FLOOD CHART</h2>
            <p class="text-base leading-relaxed">Interactive Flood Information and Real time chart.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/2">
          <div class="p-6 border border-gray-200 rounded-lg">
            <div class="inline-flex items-center justify-center w-10 h-10 mb-4 bg-indigo-100 rounded-full text-sky-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
            <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">EMERGENCY ALERTS</h2>
            <p class="text-base leading-relaxed">Our system can send alerts through text with warnings.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/2">
          <div class="p-6 border border-gray-200 rounded-lg">
            <div class="inline-flex items-center justify-center w-10 h-10 mb-4 bg-indigo-100 rounded-full text-sky-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">FLOOD WARNINGS</h2>
            <p class="text-base leading-relaxed">Our system can help and prevent upcoming floods.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/2">
          <div class="p-6 border border-gray-200 rounded-lg">
            <div class="inline-flex items-center justify-center w-10 h-10 mb-4 bg-indigo-100 rounded-full text-sky-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
              </svg>
            </div>
            <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">EARLY NOTIFICATION</h2>
            <p class="text-base leading-relaxed">Strengthening early warning system.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/2 ">
          <div class="p-6 border border-gray-200 rounded-lg">
            <div class="inline-flex items-center justify-center w-10 h-10 mb-4 bg-indigo-100 rounded-full text-sky-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
              </svg>
            </div>
            <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">RASPBERRY PI</h2>
            <p class="text-base leading-relaxed">Using latest and fast system for quick responds.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/2">
          <div class="p-6 border border-gray-200 rounded-lg">
            <div class="inline-flex items-center justify-center w-10 h-10 mb-4 bg-indigo-100 rounded-full text-sky-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">SAFETY</h2>
            <p class="text-base leading-relaxed">Our priority is that our system is safe and secure against evil acts.</p>
          </div>
        </div>
      </div>
      <button class="flex px-20 py-5 mx-auto mt-16 text-lg text-white bg-blue-500 border-0 rounded focus:outline-none hover:bg-pink-600 ">
        <a href="{{ route('register') }}">
            Get Started
        </a>
    </button>
    </div>
  </section> --}}


  <section class="text-white bg-gray-900">
    <div class="max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="max-w-xl">
        <h2 class="text-3xl font-bold sm:text-4xl">What makes us special</h2>

        <p class="mt-4 text-gray-300">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
          dolores iure fugit totam iste obcaecati. Consequatur ipsa quod ipsum
          sequi culpa delectus, cumque id tenetur quibusdam, quos fuga minima.
        </p>
      </div>

      <div
        class="grid grid-cols-1 gap-8 mt-8 md:gap-12 md:mt-16 md:grid-cols-2 lg:grid-cols-3"
      >
        <div class="flex items-start">
          <span class="flex-shrink-0 p-4 bg-gray-800 rounded-lg">
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

            <p class="mt-1 text-sm text-gray-300">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
              cumque tempore est ab possimus quisquam reiciendis tempora animi!
              Quaerat, saepe?
            </p>
          </div>
        </div>

        <div class="flex items-start">
          <span class="flex-shrink-0 p-4 bg-gray-800 rounded-lg">
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

            <p class="mt-1 text-sm text-gray-300">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
              cumque tempore est ab possimus quisquam reiciendis tempora animi!
              Quaerat, saepe?
            </p>
          </div>
        </div>

        <div class="flex items-start">
          <span class="flex-shrink-0 p-4 bg-gray-800 rounded-lg">
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

            <p class="mt-1 text-sm text-gray-300">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
              cumque tempore est ab possimus quisquam reiciendis tempora animi!
              Quaerat, saepe?
            </p>
          </div>
        </div>

        <div class="flex items-start">
          <span class="flex-shrink-0 p-4 bg-gray-800 rounded-lg">
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

            <p class="mt-1 text-sm text-gray-300">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
              cumque tempore est ab possimus quisquam reiciendis tempora animi!
              Quaerat, saepe?
            </p>
          </div>
        </div>

        <div class="flex items-start">
          <span class="flex-shrink-0 p-4 bg-gray-800 rounded-lg">
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

            <p class="mt-1 text-sm text-gray-300">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
              cumque tempore est ab possimus quisquam reiciendis tempora animi!
              Quaerat, saepe?
            </p>
          </div>
        </div>

        <div class="flex items-start">
          <span class="flex-shrink-0 p-4 bg-gray-800 rounded-lg">
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Lorem, ipsum dolor.</h2>

            <p class="mt-1 text-sm text-gray-300">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
              cumque tempore est ab possimus quisquam reiciendis tempora animi!
              Quaerat, saepe?
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>




{{-- system features --}}
{{-- <section class="text-gray-600 body-font">
    <div class="flex flex-col w-full text-center">
        <h1 class="mb-4 text-2xl font-medium text-gray-900 title-font">EFAST System Feature</h1>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
    </div>
    <div class="container flex flex-wrap px-5 py-20 mx-auto">
      <div class="flex flex-wrap w-full">
        <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
          <div class="relative flex pb-12">
            <div class="absolute inset-0 flex items-center justify-center w-10 h-full">
              <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font">STEP 1</h2>
              <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
            </div>
          </div>
          <div class="relative flex pb-12">
            <div class="absolute inset-0 flex items-center justify-center w-10 h-full">
              <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font">STEP 2</h2>
              <p class="leading-relaxed">Vice migas literally kitsch +1 pok pok. Truffaut hot chicken slow-carb health goth, vape typewriter.</p>
            </div>
          </div>
          <div class="relative flex pb-12">
            <div class="absolute inset-0 flex items-center justify-center w-10 h-full">
              <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <circle cx="12" cy="5" r="3"></circle>
                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font">STEP 3</h2>
              <p class="leading-relaxed">Coloring book nar whal glossier master cleanse umami. Salvia +1 master cleanse blog taiyaki.</p>
            </div>
          </div>
          <div class="relative flex pb-12">
            <div class="absolute inset-0 flex items-center justify-center w-10 h-full">
              <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font">STEP 4</h2>
              <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
            </div>
          </div>
          <div class="relative flex">
            <div class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font">FINISH</h2>
              <p class="leading-relaxed">Pitchfork ugh tattooed scenester echo park gastropub whatever cold-pressed retro.</p>
            </div>
          </div>
        </div>
        <img class="object-cover object-center mt-12 rounded-lg lg:w-3/5 md:w-1/2 md:mt-0" src="https://linkwisetech.com/wp-content/uploads/2020/03/near-river.png" alt="step">
      </div>
    </div>
  </section> --}}

@endsection
