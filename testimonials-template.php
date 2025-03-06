<?php
/*
Template Name: Testimonials
*/
get_header(); // Include the header

$hero_image = get_theme_mod('hero_image'); 
?>

<style>
    /* Vertical scrolling animation */
    @keyframes scrollUp {
        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-50%);
        }
    }

    @keyframes scrollDown {
        from {
            transform: translateY(-50%);
        }

        to {
            transform: translateY(0);
        }
    }

    .scroll-up {
        animation: scrollUp 23s linear infinite;
    }

    .scroll-down {
        animation: scrollDown 50s linear infinite;
    }

    .scroll-up-slow {
        animation: scrollUp 40s linear infinite;
    }

    .testimonials-container {
        display: flex;
        gap: 32px;
        max-width: 1200px;
        margin-inline: auto;
        height: 500px;
        width: 100%;
        padding: 24px;
    }

    .column {
        height: 100%;
        overflow: hidden;
        mask-image: linear-gradient(to bottom,
                transparent 0%,
                black 15%,
                black 85%,
                transparent 100%);
    }

    .testimonials {
        display: flex;
        flex-direction: column;
        gap: 24px;
        max-width: 81rem;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    .column:hover .testimonials {
        animation-play-state: paused;
    }

    .card {
        background: #fff;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .card .profile img {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
    }

    .card .profile {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 16px;
    }

    .card .profile .name {
        font-weight: 600;
        color: #1a1a1a;
    }

    .card .profile .role {
        font-size: 14px;
        color: #666;
    }

    .card .content {
        color: #444;
        line-height: 1.5;
    }

    @media (max-width: 768px) {
        .testimonials-container {
            gap: 16px;
            padding: 16px;
        }

        .column:nth-child(3) {
            display: none;
        }

        .column:hover .testimonials {
            animation-play-state: running;
        }
    }

    @media (max-width: 640px) {
        .column {
            display: none;
        }

        .column:first-child {
            display: block;
        }
    }
</style>

<!-- Testimonials Hero Section -->
<section class="relative flex items-center justify-center">
    <img src="<?php echo esc_url($hero_image); ?>" alt=""
        class="w-full md:h-[29rem] object-cover fade">
    <div class="w-full bg-black opacity-40 md:h-[29rem] absolute"></div>

    <div class="absolute flex items-center flex-col gap-6 mt-28 fade-down">
        <h1 class="text-white md:text-6xl text-4xl font-bold">Testimonials</h1>
    </div>
</section>

<!-- Testimonials Section -->
<section class="relative w-full max-w-7xl mx-auto md:py-14 py-9 px-3">
    <!-- Rating Badge -->
    <div class="flex justify-center popup1">
        <div class="bg-black text-white text-sm px-4 py-2 rounded-full flex items-center shadow-md">
            <span class="bg-green-400 p-1 rounded-full">
                <img class="w-7" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png" alt="">
            </span>
            <span class="ml-2 w-[14rem] text-center">Trusted by 100,000+ Users with an Average Rating of 4.5</span>
        </div>
    </div>

    <!-- Title -->
    <h2 class="text-center text-3xl md:text-4xl font-bold mt-6 popup1">
        What Our <span class="text-green-600">Clients</span> Say
    </h2>

    <!-- Vertical Scrolling Testimonials -->
    <div class="testimonials-container my-12 popup1">
        <!-- First Column (Scroll Up) -->
        <div class="column">
            <div class="testimonials scroll-up">
                <!-- Card 1 -->
                <div class="card">
                    <div class="profile">
                        <div>
                            <div class="name">Peter Green</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny is reliable and very responsive His pricing was very reasonable and he has always provided
                        great support. Would definitely recommend.
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Domenic Di Sisto</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny has been great to work with from day 1 installation and every year to open and close my
                        sprinkler system.
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Cheryl</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny installed our irrigation system and also the beautiful backyard lighting around our pool
                        and landscaping. He took the time to explain how it all worked and how to set up the schedules.
                        We continue to use Green Earth to open and close the irrigation system each year, and he is
                        always very responsive when we need service.
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">D Y</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Always a pleasure working with Manny and his team. Amazing and friendly service, with quick turn
                        around. Highly recommended for your irrigation and landscape lighting installations.
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">David Pacht</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny has been doing jobs for me for years. He is nothing but professional and does great work!
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Adam Zaineh</div>

                        </div>
                    </div>
                    <div class="content italic">
                        Great Services, Manny is a great service provider, always willing to help, reasonable pricing.
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Column (Scroll Down) -->
        <div class="column">
            <div class="testimonials scroll-down">
                <!-- Card 1 -->
                <div class="card">
                    <div class="profile">
                        <div>
                            <div class="name">Peter Green</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny is reliable and very responsive His pricing was very reasonable and he has always provided
                        great support. Would definitely recommend.
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Domenic Di Sisto</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny has been great to work with from day 1 installation and every year to open and close my
                        sprinkler system.
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Cheryl</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny installed our irrigation system and also the beautiful backyard lighting around our pool
                        and landscaping. He took the time to explain how it all worked and how to set up the schedules.
                        We continue to use Green Earth to open and close the irrigation system each year, and he is
                        always very responsive when we need service.
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">D Y</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Always a pleasure working with Manny and his team. Amazing and friendly service, with quick turn
                        around. Highly recommended for your irrigation and landscape lighting installations.
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">David Pacht</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny has been doing jobs for me for years. He is nothing but professional and does great work!
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Adam Zaineh</div>

                        </div>
                    </div>
                    <div class="content italic">
                        Great Services, Manny is a great service provider, always willing to help, reasonable pricing.
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Column (Scroll Up Slow) -->
        <div class="column">
            <div class="testimonials scroll-up">
                <!-- Card 1 -->
                <div class="card">
                    <div class="profile">
                        <div>
                            <div class="name">Peter Green</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny is reliable and very responsive His pricing was very reasonable and he has always provided
                        great support. Would definitely recommend.
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Domenic Di Sisto</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny has been great to work with from day 1 installation and every year to open and close my
                        sprinkler system.
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Cheryl</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny installed our irrigation system and also the beautiful backyard lighting around our pool
                        and landscaping. He took the time to explain how it all worked and how to set up the schedules.
                        We continue to use Green Earth to open and close the irrigation system each year, and he is
                        always very responsive when we need service.
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">D Y</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Always a pleasure working with Manny and his team. Amazing and friendly service, with quick turn
                        around. Highly recommended for your irrigation and landscape lighting installations.
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">David Pacht</div>
                        </div>
                    </div>
                    <div class="content italic">
                        Manny has been doing jobs for me for years. He is nothing but professional and does great work!
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="card">
                    <div class="profile">

                        <div>
                            <div class="name">Adam Zaineh</div>

                        </div>
                    </div>
                    <div class="content italic">
                        Great Services, Manny is a great service provider, always willing to help, reasonable pricing.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); // Include the footer ?>