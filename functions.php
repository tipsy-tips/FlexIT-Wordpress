<?php

	
add_theme_support( 'post-thumbnails' );

function flexit_assets(){
    // wp_enqueue_style -> load your css assets 
    wp_enqueue_style('flexit-style', get_template_directory_uri() . "/dist/css/main.min.css", microtime());
    wp_enqueue_style('flexit-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
    wp_enqueue_style('flexit-slider', "https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css");

    // wp_enqueue_script -> load your JS assets
    wp_enqueue_script('flexit-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js");
    wp_enqueue_script('flexit-waypoints', "https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js");
    wp_enqueue_script('flexit-counterup', "https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js");
    wp_enqueue_script('flexit-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js');
    wp_enqueue_script('flexit-main', get_template_directory_uri() . "/dist/scripts/main.js", microtime(), [], true );
    wp_enqueue_script('flexit-particles', get_template_directory_uri() . "/dist/scripts/particles.min.js", microtime(), [], true );
    wp_enqueue_script('flexit-particles-init', get_template_directory_uri() . "/dist/scripts/app.js", microtime(), [], true );
    wp_enqueue_script('flexit-tilt', get_template_directory_uri() . "/dist/scripts/vanilla-tilt-min.js", microtime(), [], true );

    if(is_front_page()) {
        wp_enqueue_script('flexit-tesitmonial-slider-js', get_template_directory_uri() . "/dist/scripts/slider-testimonial.js", microtime(), [], true );
        wp_enqueue_script('flexit-client-slider-js', get_template_directory_uri() . "/dist/scripts/slider-clients.js", microtime(), [], true );
    }
    
}
// Hook that will run this function    
add_action('wp_enqueue_scripts', 'flexit_assets');