<!-- Footer Section -->
<footer class="bg-black text-white py-10 px-6 md:px-16 overflow-hidden">
    <div class="container mx-auto">
        <!-- Top Section -->
        <div
            class="md:flex-row md:items-center flex-col flex justify-between items-start gap-4 border-b border-green-700 pb-4 mb-6">
            <h2 class="text-xl md:text-4xl font-semibold">Let’s Make Something Together</h2>
            <a href="<?php echo site_url('/contact'); ?>"
                class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                Lets Talk
            </a>
        </div>

        <!-- Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left: Company Info -->
            <div class="relative">
                <div class="flex items-center space-x-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_green_earth_irrigation.png"
                        alt="Logo" class="w-12">
                    <h3 class="text-lg font-bold">GREEN EARTH IRRIGATION</h3>
                </div>
                <p class="text-gray-400 mt-4">
                    Bringing innovative irrigation solutions to maximize efficiency and sustainability for a greener
                    future.
                </p>
                <!-- Social Icons -->
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="w-8 h-8 rounded-full border border-white flex items-center justify-center"><img
                            class="w-5"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.png"
                            alt=""></a>
                    <a href="#" class="w-8 h-8 rounded-full border border-white flex items-center justify-center"><img
                            class="w-5"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.png"
                            alt="" /></a>
                    <a href="#" class="w-8 h-8 rounded-full border border-white flex items-center justify-center"><img
                            class="w-5"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.png"
                            alt="" /></a>
                </div>

                <div
                    class="absolute bottom-[-16px] left-10 w-[12rem] h-[12rem] bg-green-500 rounded-full blur-[130px] opacity-80">
                </div>
            </div>

            <!-- Center: Quick Links -->
            <div class="text-center flex flex-col items-start md:justify-self-center">
                <h3 class="text-lg font-semibold">Quick Link</h3>
                <ul class="mt-4 space-y-2 flex flex-col items-start">
                    <li><a href="<?php echo home_url(); ?>" class="text-gray-400 hover:text-white">Home</a></li>
                    <li><a href="<?php echo site_url('/about'); ?>" class="text-gray-400 hover:text-white">About</a>
                    </li>
                    <li><a href="<?php echo site_url('/contact'); ?>" class="text-gray-400 hover:text-white">Contact
                            us</a></li>
                    <li><a href="<?php echo site_url('/services'); ?>"
                            class="text-gray-400 hover:text-white">Services</a></li>
                </ul>
            </div>

            <!-- Right: Office Info -->
            <div class="w-max relative">
                <h3 class="text-lg font-semibold">Office</h3>
                <ul class="mt-4 space-y-2 text-gray-400">
                    <li class="flex items-center space-x-2 hover:text-white">
                        <img class="w-5"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/location-white.png"
                            alt="">
                        <div class="hover:text-white">53 Codsell ave,
                    North York Ont,
                    M3H3V8</div>
                    </li>
                    <li class="flex items-center space-x-2 hover:text-white">
                        <img class="w-5"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail-white.png"
                            alt="">
                        <span class="hover:text-white">greenearthirrigation.lighting@gmail.com</span>
                    </li>
                    <li class="flex items-center space-x-2 hover:text-white">
                        <img class="w-5"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/telephone-white.png"
                            alt="">
                        <span class="hover:text-white">+1 416-836-9353</span>
                    </li>
                </ul>
                <div
                    class="absolute bottom-[-16px] left-10 w-[10rem] h-[10rem] bg-green-500 rounded-full blur-[130px] opacity-80">
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="text-center text-gray-500 text-sm mt-8">
            Copyright © 2025 <span class="text-MainGreen">Green Earth Irrigation</span>. All Rights Reserved
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>