<div class="w-full max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class=" mx-auto max-w-7xl  flex flex-wrap  h-fit justify-items-start justify-center">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <div class="text-center max-w-xl mx-auto">
        <h1 class="text-3xl md:text-5xl font-bold mb-5 text-gray-600">Read the latest <br>Weather Tweets.</h1>
        <div class="flex justify-center my-2 lg:mt-0">
            <button style="color: #6875F5" class="p-3  transition-colors border border-current rounded-full focus:outline-none focus:bg-blue-700 focus:text-white prev-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform -rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
            <button style="color: #6875F5" class="p-3 ml-3  border border-current rounded-full focus:outline-none focus:bg-blue-700 focus:text-white next-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
    <div class="mx-auto text-center sm:px-5 lg:px-5 sm:py-5 max-w-full bg-white">
        <div class="swiper-container !overflow-hidden">
            <div class="swiper-wrapper h-fit">
                <div class="swiper-slide">
                    <blockquote class="flex flex-col justify-between h-full">
                        <a class="twitter-timeline" data-height=500 data-tweet-limit="50" data-theme="light" href="https://twitter.com/dost_pagasa?ref_src=twsrc%5Etfw">Tweets by dost_pagasa</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </blockquote>
                </div>

                <div class="swiper-slide">
                    <blockquote class="flex flex-col justify-between h-full">
                        <a class="twitter-timeline" data-height=500 data-tweet-limit="50" data-theme="light" href="https://twitter.com/IMReadyPH?ref_src=twsrc%5Etfw">Tweets by IMReadyPH</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </blockquote>
                </div>

                <div class="swiper-slide">
                    <blockquote class="flex flex-col justify-between h-full">
                        <a class="twitter-timeline" data-height=500 data-tweet-limit="50" data-theme="light" href="https://twitter.com/DisasterInfoPH?ref_src=twsrc%5Etfw">Tweets by DisasterInfoPH</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </blockquote>
                </div>


                <div class="swiper-slide">
                    <blockquote class="flex flex-col justify-between h-full">
                        <a class="twitter-timeline" data-height=500 data-tweet-limit="50" data-theme="light" href="https://twitter.com/NDRRMC_OpCen?ref_src=twsrc%5Etfw">Tweets by NDRRMC_OpCen</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </blockquote>
                </div>

                <div class="swiper-slide">
                    <blockquote class="flex flex-col justify-between h-full">
                        <a class="twitter-timeline" data-height=500 data-tweet-limit="50" data-theme="light" href="https://twitter.com/coastguardph?ref_src=twsrc%5Etfw">Tweets by coastguardph</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 21,
            autoplay: {
                delay: 8000000,
            },
            navigation: {
                nextEl: '.next-button',
                prevEl: '.prev-button',
            },
            breakpoints: {
                640: {
                slidesPerView: 1.5,
                centeredSlides: true,
                },
                1024: {
                centeredSlides: false,
                slidesPerView: 2.25,
                },
            },
            })
        })
    </script>
</div>
