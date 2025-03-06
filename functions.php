<?php

function enqueue_custom_scripts()
{
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


 wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.css');
wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array(), null, true);
 

/* gsap */
function enqueue_gsap_local()
{
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap/gsap.min.js', array(), null, false);
    wp_enqueue_script('scrolltrigger', get_template_directory_uri() . '/assets/js/gsap/ScrollTrigger.min.js', array('gsap'), null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_gsap_local');



/* custom gallery block */
function myblock_gallery_block_block_init()
{
    register_block_type(__DIR__ . '/build/gallery-block');
}
add_action('init', 'myblock_gallery_block_block_init');



/* contact form submit */
function handle_contact_form_submission() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $address = sanitize_text_field($_POST['address']);
        $phone = sanitize_text_field($_POST['phone']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = get_option('admin_email');
        $subject = "New Contact Form Submission from " . $name;

        $body = "You have received a new message:\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Address: $address\n";
        $body .= "Phone: $phone\n";
        $body .= "Message:\n$message\n";

        $headers = array('Content-Type: text/plain; charset=UTF-8', "From: $name <$email>");

        // Send the email
        if (wp_mail($to, $subject, $body, $headers)) {
            // Redirect back with a success message
            wp_redirect(add_query_arg('success', 'true', wp_get_referer()));
            exit;
        } else {
            // Redirect with an error message
            wp_redirect(add_query_arg('error', 'true', wp_get_referer()));
            exit;
        }
    }
}

// Ensure the function runs when the form is submitted
add_action('admin_post_send_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_send_contact_form', 'handle_contact_form_submission');


/* other pages hero image changing option */
function customize_hero_section($wp_customize) {
    // Add a Section for Hero Image
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'yourtheme'),
        'priority' => 30,
    ));

    // Add a Setting for the Image
    $wp_customize->add_setting('hero_image', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ));

    // Add Control to Upload Image
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'hero_image',
        array(
            'label'    => __('Upload Hero Image', 'yourtheme'),
            'section'  => 'hero_section',
            'settings' => 'hero_image'
        )
    ));
}
add_action('customize_register', 'customize_hero_section');
