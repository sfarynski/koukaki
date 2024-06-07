<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );

    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@next/dist/aos.css' );
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

    wp_dequeue_script( 'foce-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
}

function theme_scripts() {    
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array('jquery'));
    wp_enqueue_script('aos-scroll', 'https://unpkg.com/aos@next/dist/aos.js', array());
    wp_enqueue_script('skollr-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', array('jquery'));
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', array('swiper', 'skollr-scroll'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}