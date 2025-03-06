<?php
/*
Template Name: Gardening
*/
get_header(); // Include the header

$hero_image = get_theme_mod('hero_image');
?>

<!-- Gardening hero section -->
<section class="relative flex items-center justify-center">
    <img src="<?php echo esc_url($hero_image); ?>" alt="" class="w-full md:h-[29rem] object-cover fade">
    <div class="w-full bg-black opacity-40 md:h-[29rem] absolute"></div>

    <div class="absolute flex items-center flex-col gap-6 mt-28 fade-down">
        <h1 class="text-white md:text-6xl text-4xl font-bold">Gardening</h1>
    </div>
</section>

<!-- gardening section -->
<section class="flex items-center flex-col py-11 md:px-13 px-3 gap-9">
    <!-- gardening main texts -->
    <div class="md:text-5xl text-3xl font-bold flex flex-col items-center gap-4 popup1">
        <h1>Professional <span class="text-green-700">Gardening </span> for a Beautiful, Thriving Landscape</h1>
        <h3 class="text-xl font-semibold">From expert plant selection to routine maintenance, we help your garden
            flourish all year round.</h3>
    </div>

    <div class="popup1">
        <!-- gardening description -->
        <p class="text-[17px]">
            A well-maintained garden is more than just a beautiful addition to your property—it creates a serene outdoor
            retreat, improves air quality, and enhances curb appeal. At Green Earth Gardening, we specialize in
            customized gardening solutions that ensure your landscape remains lush, healthy, and vibrant throughout the
            year.
            <br><br>
            Our expert team provides comprehensive plant selection, seasonal care, soil enrichment, mulching, and
            eco-friendly maintenance to promote long-term plant health. Whether you need a complete garden makeover,
            routine lawn care, or stunning outdoor lighting, we use sustainable techniques to enhance your space while
            minimizing environmental impact.
            <br><br>
            With over 20 years of experience, we take pride in delivering high-quality, hassle-free gardening services
            that bring out the best in your landscape. Let us help you create and maintain a thriving, picturesque
            garden that you can enjoy all year round.
        </p>
    </div>

    <a href="<?php echo site_url('/contact'); ?>"j class="fade-down">
        <button class="bg-MainGreen text-white px-5 py-3 rounded-2xl text-lg hover:bg-green-900 transition">
            Get a Free Gardening Consultation
        </button>
    </a>

</section>

<!-- gardening sliding -->
<section class="md:px-13 px-3 fade-down">
    <div class="swiper irrigation_Swiper mb-10 ">

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo get_field('gardening_image_1'); ?>" alt="Slide 1"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_field('gardening_image_2'); ?>" alt="Slide 2"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_field('gardening_image_3'); ?>" alt="Slide 3"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_field('gardening_image_4'); ?>" alt="Slide 4"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_field('gardening_image_5'); ?>" alt="Slide 5"
                    class="object-cover w-full h-[12rem] rounded-3xl">
            </div>
        </div>

    </div>
</section>

<!-- gardening services Section -->
<section class="py-12 bg-green-100">
    <div class="max-w-6xl mx-auto px-4 ">
        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-[3rem] fade-items">
            <span class="item">Our</span> <span class="text-green-700 item">Gardening </span><span
                class="item">services</span>
        </h2>
    </div>

    <section class="w-full flex items-center justify-center mt-[1rem]">
        <div class="w-[90%]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
                <!-- Card 1 -->
                <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/garden-design.png"
                            alt="Customer-Centric" class="w-10">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-5">Garden Design & Plant Selection</h3>
                    <ul class="text-sm mt-2 font-light list-disc flex flex-col gap-5">
                        <li>Expert guidance on choosing the best plants, flowers, and shrubs for your space.</li>
                        <li>Native and drought-resistant plants to ensure sustainability.</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/lawn-care.png"
                            alt="Fast Installation" class="w-10">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-5"> Lawn Care & Seasonal Maintenance</h3>
                    <ul class="text-sm mt-2 font-light list-disc flex flex-col gap-5">
                        <li>Regular mowing, aeration, fertilization, and weed control for a lush lawn.</li>
                        <li>Seasonal plant care to keep your garden blooming all year long.</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/soil.png"
                            alt="Smart Solutions" class="w-10">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-5">Mulching & Soil Enhancement</h3>
                    <ul class="text-sm mt-2 font-light list-disc flex flex-col gap-5">
                        <li>Improve soil health with organic mulching and fertilization.
                        </li>
                        <li>Eco-friendly solutions to promote long-term plant growth.</li>
                    </ul>
                </div>

                <!-- Card 4 -->
                <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/garden-lighting.png"
                            alt="Our Promise" class="w-10">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-5"> Garden & Landscape Lighting</h3>
                    <ul class="text-sm mt-2 font-light list-disc flex flex-col gap-5">
                        <li>Highlight pathways, trees, and flower beds with LED lighting.</li>
                        <li>Energy-efficient outdoor lighting for enhanced aesthetics and safety.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); // Include the footer ?>