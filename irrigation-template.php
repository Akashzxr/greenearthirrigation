<?php
/*
Template Name: Irrigation
*/
get_header(); // Include the header

$hero_image = get_theme_mod('hero_image');
?>



<!-- irrigation hero section -->
<section class="relative flex items-center justify-center">
    <img src="<?php echo esc_url($hero_image); ?>" alt="" class="w-full md:h-[29rem] object-cover fade">
    <div class="w-full bg-black opacity-40 md:h-[29rem] absolute"></div>

    <div class="absolute flex items-center flex-col gap-6 mt-28 fade-down">
        <h1 class="text-white md:text-6xl text-4xl font-bold">Irrigation</h1>
    </div>
</section>

<!-- irrigation section -->
<section class="flex items-center flex-col py-11 md:px-13 px-3 gap-9">
    <!-- irrigation main texts -->
    <div class="md:text-5xl text-3xl font-bold flex flex-col items-center gap-4 popup1">
        <h1>Smart <span class="text-green-700">Irrigation</span> for a Healthier Lawn & Garden</h1>
        <h3 class="text-xl font-semibold">Efficient, water-saving irrigation systems tailored for your landscape.</h3>
    </div>

    <div class="popup1">
        <!-- iriigation description -->
        <p class="text-[17px]">
            A lush, green lawn and a thriving garden don’t have to come at the cost of excessive water use or high
            utility
            bills. With smart irrigation technology, you can maintain a beautiful landscape while conserving water and
            reducing waste. At Green Earth Irrigation, we specialize in efficient, automated irrigation systems designed
            to
            deliver the right amount of water at the right time—keeping your lawn and plants healthy, vibrant, and
            well-nourished.
            <br><br>
            raditional irrigation systems can lead to overwatering, dry patches, and unnecessary water waste, but with
            smart
            irrigation, you gain complete control over your watering schedule with WiFi-enabled controllers,
            weather-based
            sensors, and high-efficiency sprinkler heads. These advanced features adjust watering patterns based on
            real-time weather conditions, ensuring that your landscape gets the moisture it needs—no more, no less.
            <br><br>
            Whether you’re looking for a new irrigation system, upgrades to an existing setup, or smart automation, our
            team
            provides customized solutions tailored to your property’s specific needs. Our installations are fast,
            efficient,
            and designed to save water while promoting the long-term health of your lawn and garden.
        </p>
    </div>

    <a href="<?php echo site_url('/contact'); ?>" class="fade">
        <button class="bg-MainGreen text-white px-5 py-3 rounded-2xl text-lg hover:bg-green-900 transition">
            Schedule Your Irrigation Service
        </button>
    </a>

</section>

<!-- image sliding -->
<section class="md:px-13 px-3 fade">
    <div class="swiper irrigation_Swiper mb-10 ">

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo get_field('slider_image_1'); ?>" alt="Slide 1"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_field('slider_image_2'); ?>" alt="Slide 2"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_field('slider_image_3'); ?>" alt="Slide 3"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_field('slider_image_4'); ?>" alt="Slide 4"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_field('slider_image_5'); ?>" alt="Slide 5"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
        </div>

    </div>
</section>


<!-- irrigation services Section -->
<section class="py-12 bg-green-100">
    <div class="max-w-6xl mx-auto px-4 ">
        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-[3rem] fade-items">
            <span class="item">Our</span> <span class="text-green-700 item">Irrigation </span><span
                class="item">services</span>
        </h2>
    </div>

    <section class="w-full flex items-center justify-center mt-[1rem]">
        <div class="w-[90%]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
                <!-- Card 1 -->
                <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/custom.png"
                            alt="Customer-Centric" class="w-10">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-5">Custom Irrigation Installation</h3>
                    <ul class="text-sm mt-2 font-light list-disc flex flex-col gap-5">
                        <li>Professionally designed systems tailored to your property’s layout</li>
                        <li>Ensures optimal water distribution, no overwatering or dry spots.</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/upgrade-white.png"
                            alt="Fast Installation" class="w-10">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-5"> Upgrades & Smart Water-Saving Systems</h3>
                    <ul class="text-sm mt-2 font-light list-disc flex flex-col gap-5">
                        <li>Replace outdated sprinklers with modern, efficient systems.</li>
                        <li>Smart WiFi-enabled controllers let you manage watering from your phone.</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/smart-sustainable.png"
                            alt="Smart Solutions" class="w-10">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-5"> System Maintenance & Repairs</h3>
                    <ul class="text-sm mt-2 font-light list-disc flex flex-col gap-5">
                        <li>Replace outdated sprinklers Routine inspections to prevent leaks & ensure peak performance.
                        </li>
                        <li>Smart WiFi-enabled controllers Fast troubleshooting & expert repairs when needed.</li>
                    </ul>
                </div>

                <!-- Card 4 -->
                <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/season.png"
                            alt="Our Promise" class="w-10">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-5">Seasonal Adjustments & Winterization</h3>
                    <ul class="text-sm mt-2 font-light list-disc flex flex-col gap-5">
                        <li>Optimize water usage based on weather changes.</li>
                        <li>Winter prep to prevent system damage during colder months.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>




<?php get_footer(); // Include the footer ?>