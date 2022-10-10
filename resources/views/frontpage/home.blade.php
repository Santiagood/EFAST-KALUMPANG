@extends('layouts.frontpage')

@section('contents')


<section class="text-white bg-gray-900 sm:px-20">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:h-fit lg:items-center">
        <div class="text-center mr-auto place-self-center lg:col-span-7">
            <h1 class="text-3xl font-extrabold text-transparent sm:text-5xl bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
                EFAST-Kalumpang.
                <span class="text-lg inline-block md:text-2xl sm:block"> A Flood Alarm System for Kalumpang </span>
            </h1>
            <p class="max-w-xl mx-auto mt-4  sm:leading-relaxed sm:text-lg">
                We value each marikeño's life and safety,
                <br>which is why we developed EFAST.
                <br><strong>"Plan. Prepare. Evacuate."</strong>
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
            <p class="mb-4">
                EFAST is not a new concept; similar systems like EFAST exist in other nations, including the United States. This type of system has been tried and tested,
                and some of them can already be found in Marikina. The main advantage of EFAST is that locals may use the resources that barangay authorities have made available
                to them, such as real-time river level monitoring.
            </p>
            <p>
                Another characteristic that distinguishes EFAST is the flexibility for future versions to introduce new functionality
                and features while incorporating community ideas.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full h-44 sm:h-80 rounded-lg" src="{{ asset('images/EFAST Software.png') }}" alt="Efast Hardware">
            <img class="mt-4 w-full h-44 sm:h-80 object-cover object-center lg:mt-10 rounded-lg" src="{{ asset('images/EFAST Hardware.jpg') }}" alt="Efast Software">
        </div>
    </div>
</section>

  <section class="text-white bg-gray-900">
    <div class="max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="max-w-xl">
        <h2 class="text-3xl font-bold sm:text-4xl">What makes efast special?</h2>

        <p class="mt-4 text-gray-300">
            Efast Kalumpang is a system made up of several parts, including real-time river level monitoring, automatic SMS alerts, and the most recent weather reports.
            What's more fascinating is that Kalumpang residents are free to use this system and may simply contact the developers to request new features.
        </p>
      </div>

      <div
        class="grid grid-cols-1 gap-8 mt-8 md:gap-12 md:mt-16 md:grid-cols-2 lg:grid-cols-3"
      >
        <div class="flex items-start">
          <span class="flex-shrink-0 p-3 bg-gray-800 rounded-lg">
            <img class="w-8 h-8" src="{{ asset('images/sms.png') }}" alt="">
          </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">SMS Templating and Automated SMS Alert.</h2>
            <p class="mt-1 text-sm text-gray-300">
                Messages that are automatically sent to residents who have indicated
                they want to receive an sms alert messages from efast are sent using sms template.
                Content messaging templates contain pre-written text that can be used to swiftly
                send common text messages without having to type the message.
            </p>
          </div>
        </div>

        <div class="flex items-start">
            <span class="flex-shrink-0 p-3 bg-gray-800 rounded-lg">
                <img class="w-8 h-8" src="{{ asset('images/shield.png') }}" alt="">
            </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Managed and Secured Accounts.</h2>

            <p class="mt-1 text-sm text-gray-300">
                Data security basically involves preventing unauthorized individuals from
                accessing private data. Additionally, it entails safeguarding information
                against various forms of assaults, like as ransomware that restricts access
                to data or attacks that alter data to render it inaccurate.
            </p>
          </div>
        </div>

        <div class="flex items-start">
            <span class="flex-shrink-0 p-3 bg-gray-800 rounded-lg">
                <img class="w-8 h-8" src="{{ asset('images/paper.png') }}" alt="">
            </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Generates Report.</h2>

            <p class="mt-1 text-sm text-gray-300">
                Software that generates a report based on a layout description. It may arrange
                chosen records into a new sequence for printing as a standalone software or as
                part of a file or database management system. The report description is saved in
                a file for future use once it is produced.
            </p>
          </div>
        </div>

        <div class="flex items-start">
            <span class="flex-shrink-0 p-3 bg-gray-800 rounded-lg">
                <img class="w-8 h-8" src="{{ asset('images/monitor.png') }}" alt="">
            </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Real Time River Monitoring.</h2>

            <p class="mt-1 text-sm text-gray-300">
                The transmission of continuously updated information streaming at zero or low
                latency is known as real-time monitoring. With real-time monitoring, the stakes
                are raised because administrators can quickly spot major issues thanks to a steady
                low-latency stream of pertinent and up-to-date data. Alerts can be directed to automated
                systems for mitigation more quickly. Organizations are able to identify and forecast
                trends and performance by recording real-time monitoring data over time.
            </p>
          </div>
        </div>

        <div class="flex items-start">
            <span class="flex-shrink-0 p-3 bg-gray-800 rounded-lg">
                <img class="w-8 h-8" src="{{ asset('images/weather-forecast.png') }}" alt="">
            </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Read Latest Weather News.</h2>

            <p class="mt-1 text-sm text-gray-300">
                A system of interconnected components known as a weather station automatically measures,
                records, and occasionally transmits meteorological data.  A typical weather station that
                operates automatically is known as an automated weather station. They might be standalone
                or a component of a weather network.  Weather predictions may be used for a huge range of
                purposes. Weather warnings are crucial forecasts because they serve to safeguard property
                and human life.
            </p>
          </div>
        </div>

        <div class="flex items-start">
            <span class="flex-shrink-0 p-3 bg-gray-800 rounded-lg">
                <img class="w-8 h-8" src="{{ asset('images/report.png') }}" alt="">
            </span>

          <div class="ml-4">
            <h2 class="text-lg font-bold">Read Infographs.</h2>

            <p class="mt-1 text-sm text-gray-300">
                A combination of images, data visualizations like pie charts and bar graphs, and little
                text that provides a clear summary of a subject is known as an infographic. Infographics
                are an effective visual communication tool. The most visually striking, imaginative
                infographics are frequently the most successful because they capture and hold our attention.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
