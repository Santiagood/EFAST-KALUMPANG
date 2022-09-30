@extends('layouts.frontpage')

@section('contents')

{{-- about barangay kalumpang --}}
<section class="text-white bg-gray-900">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:gap-16 lg:grid-cols-2">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full lg:order-last">
                <img alt="Party" src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" class="absolute inset-0 object-cover w-full h-full"/>
            </div>
            <div class="lg:py-24">
                <h2 class="text-3xl font-bold sm:text-4xl">Grow your audience</h2>
                <p class="mt-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic
                atque tenetur quis eius quos ea neque sunt, accusantium soluta minus
                veniam tempora deserunt? Molestiae eius quidem quam repellat.
                </p>
                <a href="#"class="inline-flex items-center px-8 py-3 mt-8 text-white bg-indigo-600 border border-indigo-600 rounded hover:bg-transparent hover:text-indigo-600 active:text-indigo-500 focus:outline-none focus:ring">
                    <span class="text-sm font-medium"> Get Started </span>
                    <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- about developers --}}
<section class="text-white bg-gray-900">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
      <div class="flex flex-col w-full mb-10 text-center">
        <h1 class="mb-4 text-2xl font-bold title-font">OUR TEAM</h1>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="flex flex-col items-center h-full text-center">
            <img alt="team" class="flex-shrink-0 object-cover object-center w-full h-56 mb-4 rounded-lg" src="https://dummyimage.com/200x200">
            <div class="w-full">
              <h2 class="text-lg font-medium text-white title-font">John Rainier Santiago</h2>
              <h3 class="mb-3 text-gray-500">UI Developer</h3>
              <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="flex flex-col items-center h-full text-center">
            <img alt="team" class="flex-shrink-0 object-cover object-center w-full h-56 mb-4 rounded-lg" src="https://dummyimage.com/201x201">
            <div class="w-full">
              <h2 class="text-lg font-medium text-white title-font">Adrian Adam Los Banos</h2>
              <h3 class="mb-3 text-gray-500">UI Developer</h3>
              <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="flex flex-col items-center h-full text-center">
            <img alt="team" class="flex-shrink-0 object-cover object-center w-full h-56 mb-4 rounded-lg" src="https://dummyimage.com/202x202">
            <div class="w-full">
              <h2 class="text-lg font-medium text-white title-font">Ray Ryan Cruz</h2>
              <h3 class="mb-3 text-gray-500">UI Developer</h3>
              <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="flex flex-col items-center h-full text-center">
            <img alt="team" class="flex-shrink-0 object-cover object-center w-full h-56 mb-4 rounded-lg" src="https://dummyimage.com/203x203">
            <div class="w-full">
              <h2 class="text-lg font-medium text-white title-font">Clarence Edulan</h2>
              <h3 class="mb-3 text-gray-500">UI Developer</h3>
              <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


{{-- contact us --}}
<section class="text-black bg-gray-900">
    <div class="container flex flex-wrap px-5 py-20 mx-auto sm:flex-nowrap">
      <div class="relative flex items-end justify-start p-10 overflow-hidden bg-gray-300 rounded-lg lg:w-2/3 md:w-1/2 sm:mr-10">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d302.58038389969715!2d121.09320687372046!3d14.62416585760694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b83a8b8dde27%3A0x89352c802f0171c2!2sKalumpang%20Barangay%20Hall!5e1!3m2!1sen!2sph!4v1661795455827!5m2!1sen!2sph" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        <div class="relative flex flex-wrap py-6 bg-white rounded shadow-md">
          <div class="px-6 lg:w-1/2">
            <h2 class="text-xs font-semibold tracking-wide text-black title-font">ADDRESS</h2>
            <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
          </div>
          <div class="px-6 mt-4 lg:w-1/2 lg:mt-0">
            <h2 class="text-xs font-semibold tracking-widest text-black title-font">EMAIL</h2>
            <a class="leading-relaxed text-indigo-500">example@email.com</a>
            <h2 class="mt-4 text-xs font-semibold tracking-widest text-black title-font">PHONE</h2>
            <p class="leading-relaxed">123-456-7890</p>
          </div>
        </div>
      </div>
      <div class="flex flex-col w-full p-10 mt-8 bg-white rounded-lg lg:w-1/3 md:w-1/2 md:ml-auto md:py-8 md:mt-0">
        <h2 class="mb-1 text-lg font-medium text-black title-font">Feedback</h2>
        <p class="mb-5 leading-relaxed text-gray-600">The EFAST-Kalumpang Team would like to hear from you</p>
        <div class="relative mb-4">
          <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
          <input type="text" id="name" name="name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
        </div>
        <div class="relative mb-4">
          <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
          <input type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
        </div>
        <div class="relative mb-4">
          <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
          <textarea id="message" name="message" class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
        </div>
        <button class="px-6 py-2 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Submit</button>
      </div>
    </div>
  </section>

  @endsection
