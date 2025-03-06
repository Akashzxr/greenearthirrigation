<?php
/*
Template Name: Contact us
*/
get_header(); // Include the header

$hero_image = get_theme_mod('hero_image');
?>

<!-- contact us hero section -->
<section class="relative flex items-center justify-center">
    <img src="<?php echo esc_url($hero_image); ?>" alt="" class="w-full md:h-[29rem] object-cover fade">
    <div class="w-full bg-black opacity-40 md:h-[29rem] absolute"></div>

    <div class="absolute flex items-center flex-col gap-6 mt-28 fade-down">
        <h1 class="text-white md:text-6xl text-4xl font-bold">Contact us</h1>
    </div>
</section>


<!-- Contact Info Cards -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Contact Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Location Card -->
            <div class="bg-green-700 text-white p-6 rounded-xl shadow-lg flex flex-col items-center text-center popup1">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-white mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/location-green.png"
                        alt="Location" class="w-12">
                </div>

                <h3 class="text-xl font-bold">Location</h3>
                <p class="text-sm mt-2">53 Codsell ave,
                    North York Ont,
                    M3H3V8</p>
            </div>

            <!-- Email Card -->
            <div class="bg-green-700 text-white p-6 rounded-xl shadow-lg flex flex-col items-center text-center popup1">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-white mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-green.png"
                        alt="Location" class="w-12">
                </div>
                <h3 class="text-xl font-bold">Email</h3>
                <p class="text-sm mt-2">greenearthirrigation.lighting@gmail.com</p>
            </div>

            <!-- Contact Number Card -->
            <div class="bg-green-700 text-white p-6 rounded-xl shadow-lg flex flex-col items-center text-center popup1">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-white mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-green.png"
                        alt="Location" class="w-12">
                </div>
                <h3 class="text-xl font-bold">Contact Number</h3>
                <p class="text-sm mt-2">+1 416-836-9353</p>
            </div>
        </div>

        <!-- Contact Form & Image -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 overflow-hidden">
            <!-- Contact Image -->
            <div class="rounded-xl overflow-hidden shadow-lg h-[31rem] hidden md:block">
                <img src="<?php echo get_field('image1'); ?>" alt="Contact Location" class="w-full h-full object-cover">
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h2 class="text-2xl font-bold mb-4">
                    We’d <span class="text-green-700">Love</span> to Hear from You
                </h2>
                <p class="text-gray-600 mb-6">Send us a Message</p>

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
        </div>
    </div>
</section>

<?php get_footer(); // Include the footer ?>