<?php get_header(); ?>

<main class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
            the_post_thumbnail();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
