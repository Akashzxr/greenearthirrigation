<?php
/*
Template Name: Home page
*/
get_header(); // Include the header
?>
<main>

    <style>
        /* Button Base Style */
        .btn-hover {
            position: relative;
            overflow: hidden;
            transition: color 0.3s ease-in-out;
        }

        /* Liquid Effect */
        .btn-hover::before {
            content: "";
            position: absolute;
            top: var(--yPos);
            left: var(--xPos);
            width: 0;
            height: 0;
            background: white;
            /* Default color for the first button */
            transition: width 0.5s ease, height 0.5s ease, top 0.2s ease, left 0.2s ease;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        /* Expanding Effect on Hover */
        .btn-hover:hover::before {
            width: 400px;
            height: 400px;
        }

        /* Ensuring Text Stays Above */
        .btn-hover span {
            position: relative;
            z-index: 1;
            transition: color 0.3s ease-in-out;
        }

        /* Text Color Change */
        .btn-hover:hover span {
            color: #047857;
            /* Green text on hover */
        }

        /* Green Button (Different Background) */
        .btn-green-hover::before {
            background: #047857;
        }

        .btn-green-hover:hover span {
            color: white;
        }
    </style>

    <!-- Hero Section Start -->
    <div class="relative w-full ">
        <div class="swiper mySwiper h-[600px] md:h-screen">
            <!-- Hero text and buttons -->
            <div
                class="absolute top-7 w-full z-10 flex flex-col items-center justify-center h-full text-center text-white px-5 mt-10 md:mt-0">

                <div
                    class="hero-text-container flex flex-wrap justify-center font-bold text-[39px] md:text-6xl leading-tight fade-down-header ">
                    <span class="w-full md:w-auto text-center">
                        <span class="">Revolutionizing Irrigation</span> </br> For a
                        <div class="text-green-700 inline-block">Greener</div> Future
                    </span>
                </div>


                <div class="mt-10 flex items-center justify-center w-full px-10 md:px-0">
                    <a href="<?php echo site_url('/about'); ?>" class="fade-left relative border-2 min-w-24 text-sm  border-white text-white px-2 md:px-10 py-2 md:py-3 sm:text-lg md:text-xl rounded-3xl font-semibold md:w-auto text-center whitespace-nowrap 
           transition-all duration-300 btn-hover" onmousemove="setHoverPosition(event, this)">
                        <span>About Us</span>
                    </a>

                    <!-- Get In Touch Button (Green Liquid Hover) -->
                    <a href="<?php echo site_url('/contact'); ?>" class="fade-right relative min-w-40 text-sm bg-white  text-black font-semibold px-2 md:px-12 py-2 md:py-3 sm:text-lg md:text-xl rounded-3xl md:w-auto text-center ms-3 md:ms-5 whitespace-nowrap 
           transition-all duration-300 btn-hover btn-green-hover" onmousemove="setHoverPosition(event, this)">
                        <span>Get In Touch With Us</span>
                    </a>
                </div>

            </div>
            <!-- Hero text and buttons Ending -->

            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <img src="<?php echo get_field('slider_image_1'); ?>" alt="Slide 1"
                        class="object-cover w-full h-full">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_field('slider_image_2'); ?>" alt="Slide 2"
                        class="object-cover w-full h-full">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_field('slider_image_3'); ?>" alt="Slide 3"
                        class="object-cover w-full h-full">
                </div>
            </div>
            <!-- Add Pagination & Navigation -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Hero Section Ending -->



    <!-- about section starting  -->
    <div class="lg:flex-row justify-around mt-10 mb-10 md:p-8 px-5 flex flex-col gap-5 items-center overflow-hidden">
        <!-- about image -->
        <div class="relative flex lg:w-[40%] flex items-end justify-end fade-left w-full">
            <img src="<?php echo get_field('about_side_image'); ?>" alt=""
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
        <div class="lg:w-[50%] flex flex-col items-start gap-[50px] overflow-hidden">
            <div class="flex flex-col md:text-5xl text-4xl font-bold gap-[20px]">
                <div class="text-green-700 underline text-xl font-semibold fade-up">
                    About Us
                </div>

                <div class="flex flex-col items-start fade-right">
                    <span> Welcome To </span>
                    <span class="text-green-700"> Green Earth Irrigation </span>
                </div>
            </div>

            <div class="text-lg fade-right">
                Established in 1999, Green Earth Irrigations mission is to provide
                their clients with exceptional service, quality products and the
                latest technology. We pride ourselves in professionalism, service and
                our expertise in the industry. We service residentail and commercial
                properties in the Greater Toronto area, Oakville, Burlington,
                Scarborough, as well as Vaughan. Green Earth believes in conserving
                water, while keeping your lawn and garden healthy, green and looking
                beautiful.
            </div>

            <div class="fade-right">
                <a href="<?php echo site_url('/about'); ?>"
                    class="relative transition-all duration-300 btn-hover btn-green-hover border-2 border-black rounded-lg px-6 py-2 text-lg font-semibold flex items-center justify-center"
                    onmousemove="setHoverPosition(event, this)">
                    <span>Learn More About Us</span>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/right.png" alt=""
                        class="w-7 ms-3 relative z-10"></a>
            </div>
        </div>
    </div>
    <!-- about  section ending  -->


    <!-- Why Choose Us Section -->
    <section class="relative text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Grass_line.png" alt="Grass Line"
            class="relative top-0 left-0 w-full object-cover">


        <div class="bg-green-100 ">
            <div class="py-14 flex flex-col gap-10 md:mb-[190px] mb-[90px]">
                <!-- Heading -->
                <h2 class="text-4xl md:text-5xl font-bold text-black fade-items">
                    <span class="item">Why</span> <span class="text-MainGreen item">Choose</span> <span
                        class="item">Us?</span>
                </h2>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-8 stats-container">
                    <!-- Stat Card 1 -->
                    <div class="flex flex-col items-center stat-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/costumer.png"
                            alt="Happy Customers" class="w-12 h-12 mb-2 stat-icon">
                        <div class="text-4xl font-bold text-MainGreen flex items-center justify-center">
                            <h3 class=" stat-number" data-target="800">0</h3><span>+</span>
                        </div>
                        <p class="text-gray-600 text-xl stat-text">Happy Customers</p>
                    </div>
                    <!-- Stat Card 2 -->
                    <div class="flex flex-col items-center stat-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/service.png"
                            alt="Quality Assurance" class="w-12 h-12 mb-2 stat-icon">
                        <div class="text-4xl font-bold text-MainGreen flex items-center justify-center">
                            <h3 class=" stat-number" data-target="100">0</h3><span>%</span>
                        </div>
                        <p class="text-gray-600 text-xl stat-text">Quality Assurance</p>
                    </div>
                    <!-- Stat Card 3 -->
                    <div class="flex flex-col items-center stat-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/worldwide.png"
                            alt="Years of Industry Experience" class="w-12 h-12 mb-2 stat-icon">
                        <div class="text-4xl font-bold text-MainGreen flex items-center justify-center">
                            <h3 class=" stat-number" data-target="26">0</h3>
                        </div>
                        <p class="text-gray-600 text-xl stat-text">Years of Industry Exp.</p>
                    </div>
                    <!-- Stat Card 4 -->
                    <div class="flex flex-col items-center stat-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/completed-task.png"
                            alt="Projects Completed" class="w-12 h-12 mb-2 stat-icon">
                        <div class="text-4xl font-bold text-MainGreen flex items-center justify-center">
                            <h3 class=" stat-number" data-target="1000">0</h3><span>+</span>
                        </div>
                        <p class="text-gray-600 text-xl stat-text">Projects Completed</p>
                    </div>
                </div>

            </div>


            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Grass_line.png" alt="Grass Line"
                class=" w-full object-cover">
        </div>


        <!-- Video Section -->
        <div class="md:mt-[-15rem] mt-[-5rem] flex justify-center popup">

            <!-- Video Thumbnail -->
            <iframe class="rounded-3xl md:w-[70%] w-[80%] md:h-[415px]"
                src="<?php echo get_field('youtube_video_link'); ?>" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <!-- Play Button -->
        </div>


    </section>
    <!-- ending of Why choose us  -->

    <!-- get in touch section -->
    <section class="w-full bg-white mt-16 p-8 md:px-28 shadow-lg rounded-lg">
        <!-- Heading -->
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-6 popup">
            Get In <span class="text-MainGreen">Touch</span>
        </h2>

        <div class="grid md:grid-cols-2 gap-10 overflow-hidden">
            <!-- Contact Form -->
            <div class="overflow-hidden lg:w-[100%] ">
                <h3 class="text-lg font-semibold mb-4">Send us a Message</h3>
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="space-y-4">
                    <input type="hidden" name="action" value="send_contact_form">
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" name="name" placeholder="Name" class="input-style">
                        <input type="email" name="email" placeholder="Email" class="input-style">
                    </div>
                    <input type="text" name="address" placeholder="Address" class="input-style w-full">
                    <input type="text" name="phone" placeholder="Phone No" class="input-style w-full">
                    <textarea name="message" placeholder="Message" class="input-style w-full h-32"></textarea>

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

            <!-- Google Map -->
            <div class="overflow-hidden lg:w-[100%]">
                <iframe class="w-full h-full min-h-[300px] rounded-lg shadow-md"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.730089609937!2d-79.44592452433703!3d43.75770144566646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3275c6ad359f%3A0x51fc3e6f44cfabfb!2s53%20Codsell%20Ave%2C%20North%20York%2C%20ON%20M3H%203V8%2C%20Canada!5e0!3m2!1sen!2sin!4v1740943255008!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy">
                </iframe>

            </div>
        </div>
    </section>

    <!-- script for the hero button animation -->
    <script>
        function setHoverPosition(event, button) {
            const rect = button.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;

            button.style.setProperty("--xPos", `${x}px`);
            button.style.setProperty("--yPos", `${y}px`);
        }
    </script>

</main>
<?php get_footer(); // Include the footer ?>