<?php
/*
Template Name: Services page
*/
get_header(); // Include the header

$hero_image = get_theme_mod('hero_image'); 
?>

<!-- services hero section -->
<section class="relative flex items-center justify-center">
    <img src="<?php echo esc_url($hero_image); ?>" alt=""
        class="w-full md:h-[29rem] object-cover fade">
    <div class="w-full bg-black opacity-40 md:h-[29rem] absolute"></div>

    <div class="absolute flex items-center flex-col gap-6 mt-28 fade-down">
        <h1 class="text-white md:text-6xl text-4xl font-bold">Our Services</h1>
        <div class="text-white md:text-[18px] flex flex-col items-center ">
            <span>Enhancing Your Landscape with Smart</span>
            <span> Irrigation & Lighting</span>
        </div>
    </div>
</section>

<!-- services section -->
<section class="max-w-7xl mx-auto md:py-28 py-9 px-3">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Service Card 1 -->
        <div
            class="service-card bg-white p-6 rounded-xl shadow-md hover:bg-green-100 transition duration-300 h-auto flex flex-col items-center justify-center ">
            <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/consultation.png"
                    alt="Consultation Icon" class="w-12">
            </div>
            <h3 class="text-green-700 text-xl font-bold text-center">Free Estimates and Consultation</h3>
            <p class="text-gray-600 text-center mt-2">
                Get expert advice tailored to your landscape needs. We provide free consultations to help you choose the
                best irrigation and lighting solutions.
            </p>
        </div>

        <!-- Service Card 2 -->
        <div
            class="service-card bg-white p-6 rounded-xl shadow-md hover:bg-green-100 transition duration-300 h-auto flex flex-col items-center justify-center">
            <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/upgrade.png"
                    alt="Upgrade Icon" class="w-12 ">
            </div>

            <h3 class="text-green-700 text-xl font-bold text-center">Upgrades for Existing Systems</h3>
            <p class="text-gray-600 text-center mt-2">
                Improve efficiency with the latest irrigation technology. We upgrade outdated systems to enhance
                performance, save water, and reduce costs.
            </p>
        </div>

        <!-- Service Card 3 -->
        <div
            class="service-card bg-white p-6 rounded-xl shadow-md hover:bg-green-100 transition duration-300 h-auto flex flex-col items-center justify-center">
            <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/professional.png"
                    alt="Irrigation Design Icon" class="w-12 ">
            </div>

            <h3 class="text-green-700 text-xl font-bold text-center">Professional Irrigation Design</h3>
            <p class="text-gray-600 text-center mt-2">
                Our customized irrigation systems ensure optimal water distribution, reducing waste and keeping your
                lawn and garden healthy year-round.
            </p>
        </div>

        <!-- Service Card 4 (With Image - No Hover Needed) -->
        <div class="h-64 service-card">
            <img src="<?php echo get_field('image_1'); ?>"
                alt="Hardscape Lighting" class="rounded-xl shadow-md w-full h-full object-cover">
        </div>

        <!-- Service Card 5 -->
        <div
            class="service-card bg-white p-6 rounded-xl shadow-md hover:bg-green-100 transition duration-300 h-auto flex flex-col items-center justify-center">
            <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/hardscape.png"
                    alt="Hardscape Icon" class="w-12">
            </div>

            <h3 class="text-green-700 text-xl font-bold text-center">Hardscape Lighting</h3>
            <p class="text-gray-600 text-center mt-2">
                Highlight walkways, patios, and outdoor features with stylish and durable hardscape lighting, creating a
                stunning nighttime ambiance.
            </p>
        </div>

        <!-- Service Card 6 (With Image - No Hover Needed) -->
        <div class="h-64 service-card">
            <img src="<?php echo get_field('image_2'); ?>" alt="Garden Lighting"
                class="rounded-xl shadow-md w-full h-full object-cover">
        </div>

        <!-- Service Card 7 -->
        <div
            class="service-card bg-white p-6 rounded-xl shadow-md hover:bg-green-100 transition duration-300 h-auto flex flex-col items-center justify-center">
            <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/led.png"
                    alt="LED Lighting Icon" class="w-12">
            </div>

            <h3 class="text-green-700 text-xl font-bold text-center">LED Garden Lighting</h3>
            <p class="text-gray-600 text-center mt-2">
                Illuminate your garden with energy-efficient LED lighting, enhancing aesthetics and safety while
                reducing energy consumption.
            </p>
        </div>

        <!-- Service Card 8 -->
        <div
            class="service-card bg-white p-6 rounded-xl shadow-md hover:bg-green-100 transition duration-300 h-auto flex flex-col items-center justify-center">
            <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/wifi.png"
                    alt="Smart Timers Icon" class="w-12">
            </div>

            <h3 class="text-green-700 text-xl font-bold text-center">WiFi and Smart Timers</h3>
            <p class="text-gray-600 text-center mt-2">
                Take control of your irrigation and lighting with smart technology. Our WiFi-enabled timers let you
                manage watering and lighting from anywhere.
            </p>
        </div>

        <!-- Service Card 9 -->
        <div
            class="service-card bg-white p-6 rounded-xl shadow-md hover:bg-green-100 transition duration-300 h-auto flex flex-col items-center justify-center">
            <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/technical-support.png"
                    alt="Technical Support Icon" class="w-12">
            </div>

            <h3 class="text-green-700 text-xl font-bold text-center">Technical Support</h3>
            <p class="text-gray-600 text-center mt-2">
                Facing issues with your irrigation system? Our team is here to provide fast, reliable troubleshooting
                and maintenance services.
            </p>
        </div>
    </div>
</section>


<?php get_footer(); // Include the footer ?>