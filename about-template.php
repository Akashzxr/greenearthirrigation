<?php
/*
Template Name: About us
*/
get_header(); // Include the header

$hero_image = get_theme_mod('hero_image');
?>

<!-- about us hero section -->
<section class="relative flex items-center justify-center">
    <img src="<?php echo esc_url($hero_image); ?>" alt="" class="w-full md:h-[29rem] object-cover fade">
    <div class="w-full bg-black opacity-40 md:h-[29rem] absolute"></div>

    <div class="absolute flex items-center flex-col gap-6 mt-28 fade-down">
        <h1 class="text-white md:text-6xl text-4xl font-bold">About us</h1>
    </div>
</section>

<!-- about us section -->
<section>
    <!-- about section starting  -->
    <div class="lg:flex-row justify-around mt-10 mb-10 md:p-8 px-5 flex flex-col gap-5 items-center overflow-hidden">
        <!-- about image -->
        <div class="relative flex lg:w-[40%] flex items-end justify-end fade-left">
            <img src="<?php echo get_field('image_1'); ?>" alt=""
                class="w-full h-auto rounded-2xl lg:max-w-[35rem] md:max-h-[29rem] object-cover max-h-[20rem]" />
            <!-- about circle -->
            <div
                class="absolute bg-white rounded-full h-[10rem] w-[10rem] flex items-center justify-center bottom-[-36px] right-[-12px]">
                <div
                    class="border-2 h-[9rem] w-[9rem] overflow-hidden border-gray-300 rounded-full flex items-center justify-center">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/curve text.png"
                        class="p-2 animate-[spin_6s_linear_infinite]" />

                    <div class="bg-green-700 w-10 h-10 rounded-full absolute">
                        <span class="text-3xl ps-2 pb-2 text-white">↗</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us text section -->
        <div class="lg:w-[50%] flex flex-col items-start gap-[20px] mt-7 sm:mt-0 fade-right">
            <div class="flex flex-col md:text-5xl text-3xl font-bold gap-[15px]">
                <div class="">
                    <span>About</span>
                    <span class="text-green-700"> Green Earth Irrigation </span>
                </div>

                <div class="text-xl font-semibold">
                    Over 20 Years of Excellence
                </div>
            </div>

            <div class="text-[17px]">
                Established in 1999, Green Earth Irrigation has been committed to delivering exceptional service,
                premium-quality products, and cutting-edge irrigation technology. With over two decades of experience,
                we take pride in our professionalism, industry expertise, and customer-first approach.
                <br />
                We specialize in residential and commercial irrigation solutions, serving clients across the Greater
                Toronto Area, Oakville, Burlington, Scarborough, and Vaughan. Our mission is not only to provide
                efficient irrigation systems but also to promote sustainable water usage, ensuring your lawn and garden
                stay healthy, green, and vibrant while conserving natural resources.
                <br>
                At Green Earth Irrigation, we believe that a well-designed irrigation system can transform your outdoor
                space, reducing maintenance efforts while enhancing plant health and longevity. Over the years, we have
                built strong, lasting relationships with our clients by offering reliable installations, innovative
                water-saving solutions, and outstanding customer support.
                <br>
                Whether you’re looking to install a brand-new irrigation system, upgrade an existing setup, or integrate
                smart water-efficient technology, our expert team is here to help. We customize our solutions to fit
                your unique landscape needs, ensuring optimal water distribution, reduced waste, and long-term cost
                savings.
            </div>
        </div>
    </div>
    <!-- about  section ending  -->
</section>

<!-- Why Choose Us Section -->
<section class="py-12 bg-green-100">
    <div class="max-w-6xl mx-auto px-4 ">
        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-[9rem] fade-items">
            <span class="item">Why Choose</span> <span class="text-green-700 item">Green Earth Irrigation</span><span
                class="item">?</span>
        </h2>
    </div>
</section>

<!-- Cards Container (Placed at the Bottom, Half Outside) -->
<section class="w-full flex items-center justify-center mt-[-9rem]">
    <div class="w-[90%]">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
            <!-- Card 1 -->
            <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                <div class="flex justify-center mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/customer-centric.png"
                        alt="Customer-Centric" class="w-10">
                </div>
                <h3 class="text-xl font-bold text-center">Customer-Centric Service</h3>
                <p class="text-sm text-center mt-2 font-light">
                    We prioritize customer satisfaction by offering personalized service and top-quality irrigation
                    solutions.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                <div class="flex justify-center mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fast-efficient.png"
                        alt="Fast Installation" class="w-10">
                </div>
                <h3 class="text-xl font-bold text-center">Fast & Efficient Installation</h3>
                <p class="text-sm text-center mt-2 font-light">
                    Most installations are completed within a single day. Our professional team ensures precision and
                    efficiency.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                <div class="flex justify-center mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/smart-sustainable.png"
                        alt="Smart Solutions" class="w-10">
                </div>
                <h3 class="text-xl font-bold text-center">Smart & Sustainable Solutions</h3>
                <p class="text-sm text-center mt-2 font-light">
                    We optimize water usage, reduce waste, and promote sustainability with our modern irrigation
                    systems.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-green-700 text-white p-6 rounded-2xl shadow-lg popup1">
                <div class="flex justify-center mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/guarantee.png"
                        alt="Our Promise" class="w-10">
                </div>
                <h3 class="text-xl font-bold text-center">Our Promise & Guarantee</h3>
                <p class="text-sm text-center mt-2 font-light">
                    We stand behind our work with reliable service, durable installations, and full customer support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Commitment Section -->
<section class="bg-green-100 py-12 mt-12">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 fade-down">
            Our <span class="text-green-700">Commitment</span> to you
        </h2>

        <!-- Commitment Features -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 lg:grid-rows-2 gap-10 text-center">
            <!-- Feature 1 -->
            <div class="flex flex-col items-center popup">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200 mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quality.png"
                        alt="Industry Expertise" class="w-16">
                </div>

                <p class="text-lg font-semibold text-green-700">20+ years of industry expertise</p>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col items-center lg:row-start-2 lg:col-start-2 popup">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200 mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/best-product.png"
                        alt="Advanced Technology" class="w-16">
                </div>

                <p class="text-lg font-semibold text-green-700">High-quality irrigation products & advanced technology
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col items-center lg:col-start-3 popup">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200 mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/customer-service-black.png"
                        alt="Customer Support" class="w-16">
                </div>

                <p class="text-lg font-semibold text-green-700">Dedicated customer support & service</p>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col items-center lg:row-start-2 lg:col-start-4 popup">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200 mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/hassle-free.png"
                        alt="Hassle-Free Installation" class="w-16">
                </div>

                <p class="text-lg font-semibold text-green-700">Fast, hassle-free installations</p>
            </div>

            <!-- Feature 5 -->
            <div class="flex flex-col items-center lg:col-start-5 popup">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-green-200 mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/security.png"
                        alt="Satisfaction Guarantee" class="w-16">
                </div>
                <p class="text-lg font-semibold text-green-700">100% satisfaction guarantee</p>
            </div>

        </div>
    </div>
</section>


<!-- get in touch section -->
<section class="w-full bg-white mt-16 p-8 md:px-28 shadow-lg rounded-lg">
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-6 fade">
        Get In <span class="text-MainGreen">Touch</span>
    </h2>

    <div class="grid md:grid-cols-2 gap-10 overflow-hidden">
        <div class="relative ">
            <ul class="mt-4 space-y-2 text-gray-800 flex flex-col gap-7">
                <li class="flex items-center space-x-2">
                    <img class="w-5"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/location-black.png" alt="">
                    <span>53 Codsell ave,
                        North York Ont,
                        M3H3V8</span>
                </li>
                <li class="flex items-center space-x-2">
                    <img class="w-5"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-black.png" alt="">
                    <span>greenearthirrigation.lighting@gmail.com</span>
                </li>
                <li class="flex items-center space-x-2">
                    <img class="w-5"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-black.png" alt="">
                    <span>+1 416-836-9353</span>
                </li>
            </ul>
        </div>
        <!-- Contact Form -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Send us a Message</h3>
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="space-y-4">
                <input type="hidden" name="action" value="send_contact_form">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Name" class="input-style">
                    <input type="email" placeholder="Email" class="input-style">
                </div>
                <input type="text" placeholder="Address" class="input-style w-full">
                <input type="text" placeholder="Phone No" class="input-style w-full">
                <textarea placeholder="Message" class="input-style w-full h-32"></textarea>

                <button type="submit"
                    class="bg-green-600 text-white py-3 px-8 rounded-lg w-full md:w-auto hover:bg-green-700 transition">
                    Send
                </button>
            </form>
            <!-- Popup Message -->
            <div id="popup-message"
                class="fixed top-[15rem] w-full z-50 right-5 flex items-center justify-center opacity-0 transition-opacity duration-500 hidden">
                <div class="w-max px-4 py-2 rounded-lg bg-green-600 text-white">
                    Message sent succesfully
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); // Include the footer ?>