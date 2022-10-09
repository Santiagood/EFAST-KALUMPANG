@extends('layouts.frontpage')

@section('contents')

{{-- about barangay kalumpang --}}
<section class="text-white bg-gray-900">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:gap-16 lg:grid-cols-2">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full lg:order-last">
                <img alt="Party" src="{{ asset('images/BITS.jpg') }}" class="absolute inset-0 object-cover w-full h-full"/>
            </div>
            <div class="lg:py-24">
                <h2 class="text-3xl font-bold sm:text-4xl">Who are the EFAST proponets?</h2>
                <p class="mt-4">
                    EFAST-Kalumpang is developed with the help and collaboration of WCC CESO, WCC BITS, and Barangay Kalumpang.
                    The main goal of this program is to help and address the lack of information that residents receive in the midst of disasters such as typhoons and floods caused by them.
                    The residents of Kalumpang are the beneficiaries of this program, and this was only possible with the help of the Community Extension and Services Office of World Citi Colleges, Quezon City.
                </p>
                {{-- <a href="#"class="inline-flex items-center px-8 py-3 mt-8 text-white bg-indigo-600 border border-indigo-600 rounded hover:bg-transparent hover:text-indigo-600 active:text-indigo-500 focus:outline-none focus:ring">
                    <span class="text-sm font-medium"> Get Started </span>
                    <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a> --}}
                <div class="flex items-left justify-left space-x-3 pt-5 ">
                    <a href="https://www.facebook.com/wccceso">
                        <button class="hover:bg-blue-900 bg-blue-500  sm:px-4 sm:py-2 px-2 py-2 sm:text-xs font-semibold text-white inline-flex items-center space-x-2 rounded">
                            <svg class="w-6 h-6 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            <span>WCC CESO</span>
                        </button>
                    </a>
                    <a href="https://www.facebook.com/bits.wccqc">
                        <button class="hover:bg-blue-900 bg-blue-500 sm:px-4 sm:py-2 px-2 py-2 sm:text-xs font-semibold text-white inline-flex items-center space-x-2 rounded">
                            <svg class="w-6 h-6 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            <span>WCC BITS</span>
                        </button>
                    </a>
                    <a href="https://www.facebook.com/barangaykalumpangofficial">
                        <button class="hover:bg-blue-900 bg-blue-500 sm:px-4 sm:py-2 px-2 py-2 sm:text-sm font-semibold text-white inline-flex items-center space-x-2 rounded">
                            <svg class="w-6 h-6 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            <span>Barangay Kalumpang</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- about developers --}}
<section class="text-white bg-gray-900">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
      <div class="flex flex-col w-full mb-10 text-center">
        <h1 class="mb-4 text-2xl font-bold title-font">OUR TEAM</h1>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">“The strength of the team is each individual member. The strength of each member is the team.”</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="flex flex-col items-center h-full text-center">
            <img alt="team" class="object-center w-auto h-56 mb-4 rounded-lg" src="{{ asset('images/santiago.png') }}">
            <div class="w-full">
              <h2 class="text-lg font-medium text-white title-font">John Rainier Santiago</h2>
              <h3 class="mb-3 text-gray-500">EFAST Software Dev</h3>
              <p class="mb-4 text-sm">
                Rainier can control his own behaviour easily, and he’s organised.
                If he says he will do something, he will do it.
              </p>
              <span class="inline-flex">

                <a href="https://www.facebook.com/rainier.santiago.santiago/" class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>

                <a class="ml-2 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                </a>
                <span class="ml-2 text-gray-500">09451448928</span>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="flex flex-col items-center h-full text-center">
            <img alt="team" class="object-center w-auto h-56 mb-4 rounded-lg" src="{{ asset('images/los banos.png') }}">
            <div class="w-full">
              <h2 class="text-lg font-medium text-white title-font">Adrian Adam Los Banos</h2>
              <h3 class="mb-3 text-gray-500">EFAST Software Dev</h3>
                <p class="mb-4 text-sm">
                    Adam is good at noticing different things around him.
                    He is good at finding the simplest and most efficient solution.
                </p>
              <span class="inline-flex">

                <a href="https://www.facebook.com/BlckAidd" class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>

                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
                <span class="ml-2 text-gray-500">09613113973</span>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="flex flex-col items-center h-full text-center">
            <img alt="team" class="object-center w-auto h-56 mb-4 rounded-lg" src="{{ asset('images/cruz.png') }}">
            <div class="w-full">
              <h2 class="text-lg font-medium text-white title-font">Ray Ryan Cruz</h2>
              <h3 class="mb-3 text-gray-500">EFAST Hardware Dev</h3>
              <p class="mb-4 text-sm">
                Ryan is concerned about others and enjoys assisting them.
                He is also very good at assisting people in seeing both sides of a situation.
              </p>
              <span class="inline-flex">

                <a href="https://www.facebook.com/ryan.cruz.7359" class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>

                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
                <span class="ml-2 text-gray-500">09392255315</span>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="flex flex-col items-center h-full text-center">
            <img alt="team" class="object-center w-auto h-56 mb-4 rounded-lg" src="{{ asset('images/edulan.png') }}">
            <div class="w-full">
              <h2 class="text-lg font-medium text-white title-font">Clarence Edulan</h2>
              <h3 class="mb-3 text-gray-500">EFAST Hardware Dev</h3>
              <p class="mb-4 text-sm">
                Clarence shows a lot of excitement and interest in things.
                He believes in his work and his success on an emotional level.
              </p>
              <span class="inline-flex">

                <a href="https://www.facebook.com/profile.php?id=100076765502938" class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
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
                <p class="mt-1">
                    I. S. Senga Street, Calumpang, Marikina City 1801 Metro Manila
                </p>
            </div>
            <div class="px-6 mt-4 lg:w-1/2 lg:mt-0">
                <h2 class="text-xs font-semibold tracking-widest text-black title-font">EMAIL</h2>
                <a class="leading-relaxed text-indigo-500">info@efastkalumpang.com</a>
                <h2 class="mt-4 text-xs font-semibold tracking-widest text-black title-font">PHONE</h2>
                <p class="leading-relaxed">8-6477205</p>
            </div>
            </div>
        </div>

        {{-- form --}}
        <div class="flex flex-col w-full p-10 mt-8 bg-white rounded-lg lg:w-1/3 md:w-1/2 md:ml-auto md:py-8 md:mt-0">
            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="fca4702d-b9f0-4c04-90f3-58b27d00993f">
                <input type="hidden" name="subject" value="New email submission from efastkalumpang.com">
                <input type="checkbox" name="botcheck" id="" style="display: none;">
                <input type="hidden" name="from_name" value="efastkalumpang.com">
                <h2 class="mb-1 text-lg font-medium text-black title-font">Feedback</h2>
                <p class="mb-5 leading-relaxed text-gray-600">The EFAST-Kalumpang Team would like to hear from you</p>
                <div class="relative mb-4">
                    <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" required>
                </div>
                <div class="relative mb-4">
                    <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" required>
                </div>
                <div class="relative mb-4">
                    <label for="phone" class="text-sm leading-7 text-gray-600">Mobile Number</label>
                    <input type="text" id="phone" name="phone" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" required>
                </div>
                <div class="relative mb-4">
                    <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
                    <textarea id="message" cols="30" rows="10" name="message" class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
                </div>
                <input type="hidden" name="redirect" value="https://web3forms.com/success">
                <button type="submit" class="items-center self-center justify-center px-6 py-2 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Submit</button>
            </form>
        </div>

    </div>
  </section>

  @endsection
