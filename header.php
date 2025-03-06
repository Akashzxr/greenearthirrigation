<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/output.css">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/images/icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <title>Green Earth Irrigation</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div
            class="bg-white/40 border fade-down-header border-white backdrop-blur-lg lg:h-20 py-4 mx-5 mt-5 rounded-2xl fixed top-0 left-0 w-[calc(100%-2.5rem)] z-50">
            <div class="flex items-center justify-between h-full">
                <!-- Logo -->
                <a href="#" class="mx-5 flex items-center gap-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_green_earth_irrigation.png"
                        alt="Logo" class="md:w-[50px] w-[40px]">
                    <div class="flex flex-col text-MainGreen font-bold text-[11px] md:text-[14px]">
                        <span>GREEN EARTH</span>
                        <span>IRRIGATION</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="lg:flex md:items-center hidden me-5">
                    <a href="<?php echo home_url(); ?>" class="hover:text-MainGreen transition-all duration-300 mx-5 text-lg menu-item  <?php if (is_front_page())
                           echo 'text-MainGreen font-bold'; ?>">Home</a>
                    <a href="<?php echo site_url('/services'); ?>" class="hover:text-MainGreen transition-all duration-300 mx-5 text-lg menu-item <?php if (is_page('services'))
                           echo 'text-MainGreen font-bold'; ?>">Services</a>
                    <a href="<?php echo site_url('/irrigation'); ?>" class="hover:text-MainGreen transition-all duration-300 mx-5 text-lg menu-item <?php if (is_page('irrigation'))
                           echo 'text-MainGreen font-bold'; ?>">Irrigation</a>
                    <a href="<?php echo site_url('/gardening'); ?>" class="hover:text-MainGreen transition-all duration-300 mx-5 text-lg menu-item <?php if (is_page('gardening'))
                           echo 'text-MainGreen font-bold'; ?>">Gardening</a>
                    <a href="<?php echo site_url('/testimonials'); ?>" class="hover:text-MainGreen transition-all duration-300 mx-5 text-lg menu-item <?php if (is_page('testimonials'))
                           echo 'text-MainGreen font-bold'; ?>">Testimonials</a>
                    <a href="<?php echo site_url('/gallery'); ?>" class="hover:text-MainGreen transition-all duration-300 mx-5 text-lg menu-item <?php if (is_page('gallery'))
                           echo 'text-MainGreen font-bold'; ?>">Gallery</a>
                    <a href="<?php echo site_url('/about'); ?>" class="hover:text-MainGreen transition-all duration-300 mx-5 text-lg menu-item <?php if (is_page('about'))
                           echo 'text-MainGreen font-bold'; ?>">About
                        Us</a>
                    <a href="<?php echo site_url('/contact'); ?>" class="hover:text-MainGreen transition-all duration-300 mx-5 text-lg menu-item <?php if (is_page('contact'))
                           echo 'text-MainGreen font-bold'; ?>">Contact
                        Us</a>
                </div>

                <!-- Mobile Menu Buttons -->
                <div class="flex items-center lg:hidden">
                    <button id="menuButton" class="me-6 text-xl text-black">
                        <img class="w-8" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/menu.png"
                            alt="Menu">
                    </button>
                    <button id="closeButton" class="me-6 text-xl text-black hidden">
                        <img class="w-8"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/close.png"
                            alt="Close">
                    </button>
                </div>
            </div>

            <!-- Mobile Menu (Hidden Initially) -->
            <nav id="mobileMenu" class="overflow-hidden max-h-0 transition-all duration-300 ease-in-out lg:hidden">
                <div class="px-6 py-4">
                    <a href="<?php echo home_url(); ?>" class="hover:text-MainGreen transition-all duration-300 block py-3 text-lg <?php if (is_front_page())
                           echo 'text-MainGreen font-bold'; ?> border-b border-green-500">Home</a>
                    <a href="<?php echo site_url('/services'); ?>" class="hover:text-MainGreen transition-all duration-300 block py-3 text-lg border-b border-green-500 <?php if (is_page('services'))
                           echo 'text-MainGreen font-bold'; ?>">Services</a>
                    <a href="<?php echo site_url('/irrigation'); ?>" class="hover:text-MainGreen transition-all duration-300 block py-3 text-lg border-b border-green-500 <?php if (is_page('irrigation'))
                           echo 'text-MainGreen font-bold'; ?>">Irrigation</a>
                    <a href="<?php echo site_url('/gardening'); ?>" class="hover:text-MainGreen transition-all duration-300 block py-3 text-lg border-b border-green-500 <?php if (is_page('gardening'))
                           echo 'text-MainGreen font-bold'; ?>">Gardening</a>
                    <a href="<?php echo site_url('/testimonials'); ?>" class="hover:text-MainGreen transition-all duration-300 block py-3 text-lg border-b border-green-500 <?php if (is_page('testimonials'))
                           echo 'text-MainGreen font-bold'; ?>">Testimonials</a>
                    <a href="<?php echo site_url('/gallery'); ?>" class="hover:text-MainGreen transition-all duration-300 block py-3 text-lg border-b border-green-500 <?php if (is_page('gallery'))
                           echo 'text-MainGreen font-bold'; ?>">Gallery</a>
                    <a href="<?php echo site_url('/about'); ?>" class="hover:text-MainGreen transition-all duration-300 block py-3 text-lg border-b border-green-500 <?php if (is_page('about'))
                           echo 'text-MainGreen font-bold'; ?>">About
                        Us</a>
                    <a href="<?php echo site_url('/contact'); ?>" class="hover:text-MainGreen transition-all duration-300 block py-3 text-lg <?php if (is_page('contact'))
                           echo 'text-MainGreen font-bold'; ?>">Contact
                        Us</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- JavaScript for Smooth Dropdown -->
    <script>
        const menuButton = document.getElementById("menuButton");
        const closeButton = document.getElementById("closeButton");
        const mobileMenu = document.getElementById("mobileMenu");

        function toggleMenu(open) {
            if (open) {
                mobileMenu.classList.remove("max-h-0");
                mobileMenu.classList.add("max-h-screen"); // Expands smoothly
                menuButton.classList.add("hidden");
                closeButton.classList.remove("hidden");
            } else {
                mobileMenu.classList.remove("max-h-screen");
                mobileMenu.classList.add("max-h-0"); // Collapses smoothly
                menuButton.classList.remove("hidden");
                closeButton.classList.add("hidden");
            }
        }

        menuButton.addEventListener("click", () => toggleMenu(true));
        closeButton.addEventListener("click", () => toggleMenu(false));
    </script>