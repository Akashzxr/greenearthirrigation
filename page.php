<?php get_header(); ?>

<main class="content">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Continuous Looping Testimonials</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
        <style>
            /* Fading effect on left & right */
            .fade-overlay {
                position: absolute;
                top: 0;
                width: 15%;
                height: 100%;
                pointer-events: none;
                z-index: 10;
            }

            .fade-left {
                left: 0;
                background: linear-gradient(to right, white, transparent);
            }

            .fade-right {
                right: 0;
                background: linear-gradient(to left, white, transparent);
            }

            /* Continuous scrolling animation with doubled content */
            @keyframes scrollRight {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            @keyframes scrollLeft {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(50%);
                }
            }

            .scroll-right {
                animation: scrollRight 30s linear infinite;
            }

            .scroll-left {
                animation: scrollLeft 30s linear infinite;
            }

            /* Pause animation on hover */
            .pause-on-hover:hover {
                animation-play-state: paused;
            }
        </style>
    </head>

    <body>
        <!-- Testimonials hero section -->
        <section class="relative flex items-center justify-center">
            <img src="/api/placeholder/1200/464" alt="Hero Image" class="w-full md:h-[29rem] object-cover">
            <div class="w-full bg-black opacity-40 md:h-[29rem] absolute"></div>
            <div class="absolute flex items-center flex-col gap-6 mt-28">
                <h1 class="text-white md:text-6xl text-4xl font-bold">Testimonials</h1>
            </div>
        </section>

        <!-- Testimonial section -->
        <section class="relative w-full max-w-7xl mx-auto md:py-14 py-9 px-3">
            <!-- Fading Effect -->
            <div class="fade-overlay fade-left"></div>
            <div class="fade-overlay fade-right"></div>

            <!-- Rating Badge -->
            <div class="flex justify-center">
                <div class="bg-black text-white text-sm px-4 py-2 rounded-full flex items-center shadow-md">
                    <span class="bg-green-400 p-1 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </span>
                    <span class="ml-2 w-[14rem] text-center">Trusted by 100,000+ Users with an Average Rating of
                        4.5</span>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-center text-3xl md:text-4xl font-bold mt-6">
                What Our <span class="text-green-600">Clients</span> Say
            </h2>

            <!-- Scrolling Testimonials - First Row (Right to Left) -->
            <div class="overflow-hidden mt-8 relative">
                <div class="flex pause-on-hover scroll-right">
                    <!-- First set of testimonials -->
                    <div class="flex flex-nowrap gap-6">
                        <!-- Card 1 -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                Absolutely amazing service! The team designed a smart irrigation system that keeps my
                                lawn green while saving water. The LED lighting adds a beautiful touch to my garden at
                                night. Highly recommend!
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">John Peter</h4>
                                    <p class="text-gray-500 text-sm">CEO of ABC Company</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                The team's expertise in designing our garden landscape was exceptional. They were
                                professional, punctual, and the results exceeded our expectations.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-gray-500 text-sm">Homeowner</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                We hired them for our commercial property and they transformed our outdoor space
                                completely. The sprinkler system is efficient and the maintenance plan is worth every
                                penny.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Michael Rodriguez</h4>
                                    <p class="text-gray-500 text-sm">Property Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicate first set for continuous loop -->
                    <div class="flex flex-nowrap gap-6">
                        <!-- Card 1 (duplicate) -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                Absolutely amazing service! The team designed a smart irrigation system that keeps my
                                lawn green while saving water. The LED lighting adds a beautiful touch to my garden at
                                night. Highly recommend!
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">John Peter</h4>
                                    <p class="text-gray-500 text-sm">CEO of ABC Company</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 (duplicate) -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                The team's expertise in designing our garden landscape was exceptional. They were
                                professional, punctual, and the results exceeded our expectations.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-gray-500 text-sm">Homeowner</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 (duplicate) -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                We hired them for our commercial property and they transformed our outdoor space
                                completely. The sprinkler system is efficient and the maintenance plan is worth every
                                penny.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Michael Rodriguez</h4>
                                    <p class="text-gray-500 text-sm">Property Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scrolling Testimonials - Second Row (Left to Right) -->
            <div class="overflow-hidden mt-8 relative">
                <div class="flex pause-on-hover scroll-left">
                    <!-- First set of testimonials -->
                    <div class="flex flex-nowrap gap-6">
                        <!-- Card 1 -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                I've worked with many landscaping companies, but this one truly stands out. Their
                                attention to detail and creative solutions saved us both money and water consumption.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Emily Chen</h4>
                                    <p class="text-gray-500 text-sm">Landscape Architect</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                The drought-resistant landscaping they installed has completely transformed our yard.
                                It's beautiful, eco-friendly, and we've seen a significant reduction in our water bill.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">David Thompson</h4>
                                    <p class="text-gray-500 text-sm">Homeowner</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                Our community garden project was a huge success thanks to their expertise. The
                                irrigation system they designed is both effective and easy to maintain.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Lisa Williams</h4>
                                    <p class="text-gray-500 text-sm">Community Organizer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicate first set for continuous loop -->
                    <div class="flex flex-nowrap gap-6">
                        <!-- Card 1 (duplicate) -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                I've worked with many landscaping companies, but this one truly stands out. Their
                                attention to detail and creative solutions saved us both money and water consumption.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Emily Chen</h4>
                                    <p class="text-gray-500 text-sm">Landscape Architect</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 (duplicate) -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                The drought-resistant landscaping they installed has completely transformed our yard.
                                It's beautiful, eco-friendly, and we've seen a significant reduction in our water bill.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">David Thompson</h4>
                                    <p class="text-gray-500 text-sm">Homeowner</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 (duplicate) -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md flex-shrink-0" style="width: 320px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <p class="text-gray-700 mt-2 italic">
                                Our community garden project was a huge success thanks to their expertise. The
                                irrigation system they designed is both effective and easy to maintain.
                            </p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Lisa Williams</h4>
                                    <p class="text-gray-500 text-sm">Community Organizer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
</main>

<?php get_footer();
/* <?php echo get_template_directory_uri(); ?>./assets/images/irrigation-7262563_1920 1.jpg

<div class="bg-gray-50 p-6 rounded-xl shadow-md max-w-md">
                    <!-- Quote Image -->
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/icons/qoute.png" alt="Quote" class="w-6 h-6">

                    <!-- Testimonial Text -->
                    <p class="text-gray-700 mt-2 italic">
                        Absolutely amazing service! The team designed a smart irrigation system that keeps my lawn green
                        while saving water.
                        The LED lighting adds a beautiful touch to my garden at night. Highly recommend!
                    </p>

                    <!-- User Info -->
                    <div class="flex items-center mt-4">
                       <!--  <img src="avatar.png" alt="John Peter" class="w-10 h-10 rounded-full"> -->
                        <div class="">
                            <h4 class="font-semibold text-gray-900">John Peter</h4>
                            <p class="text-gray-500 text-sm">CEO of ABC Company</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl shadow-md max-w-md">
                    <!-- Quote Image -->
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/icons/qoute.png" alt="Quote" class="w-6 h-6">

                    <!-- Testimonial Text -->
                    <p class="text-gray-700 mt-2 italic">
                        Absolutely amazing service! The team designed a smart irrigation system that keeps my lawn green
                        while saving water.
                        The LED lighting adds a beautiful touch to my garden at night. Highly recommend!
                    </p>

                    <!-- User Info -->
                    <div class="flex items-center mt-4">
                       <!--  <img src="avatar.png" alt="John Peter" class="w-10 h-10 rounded-full"> -->
                        <div class="">
                            <h4 class="font-semibold text-gray-900">John Peter</h4>
                            <p class="text-gray-500 text-sm">CEO of ABC Company</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md max-w-md">
                    <!-- Quote Image -->
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/icons/qoute.png" alt="Quote" class="w-6 h-6">

                    <!-- Testimonial Text -->
                    <p class="text-gray-700 mt-2 italic">
                        Absolutely amazing service! The team designed a smart irrigation system that keeps my lawn green
                        while saving water.
                        The LED lighting adds a beautiful touch to my garden at night. Highly recommend!
                    </p>

                    <!-- User Info -->
                    <div class="flex items-center mt-4">
                       <!--  <img src="avatar.png" alt="John Peter" class="w-10 h-10 rounded-full"> -->
                        <div class="">
                            <h4 class="font-semibold text-gray-900">John Peter</h4>
                            <p class="text-gray-500 text-sm">CEO of ABC Company</p>
                        </div>
                    </div>
                </div>

*/
?>