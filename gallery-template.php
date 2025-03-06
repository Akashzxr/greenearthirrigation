<?php
/*
Template Name: Gallery
*/
get_header(); // Include the header

$hero_image = get_theme_mod('hero_image'); 
?>

<!-- Gallery hero section -->
<section class="relative flex items-center justify-center">
    <img src="<?php echo esc_url($hero_image); ?>" alt=""
        class="w-full md:h-[29rem] object-cover fade">
    <div class="w-full bg-black opacity-40 md:h-[29rem] absolute"></div>

    <div class="absolute flex items-center flex-col gap-6 mt-28 fade-down">
        <h1 class="text-white md:text-6xl text-4xl font-bold">Gallery</h1>
    </div>
</section>


<!-- Gallery Section -->
<section class="max-w-7xl mx-auto md:py-20 py-10 px-4">
    <?php
    $page_id = get_the_ID(); // Get current page ID
    $page_content = get_post_field('post_content', $page_id); // Get page content
    $blocks = parse_blocks($page_content); // Parse all blocks
    
    foreach ($blocks as $block) {
        if ($block['blockName'] === 'myblock/gallery-block') { // ✅ Change to your block name
            echo render_block($block); // ✅ Render only the gallery block
        }
    }
    ?>



</section>





<?php get_footer(); // Include the footer ?>