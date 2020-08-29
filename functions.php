<?php

add_action( 'after_setup_theme', 'techalap_after_theme_setup' );
function techalap_after_theme_setup(){
    techalap_post_thumbnails_config();
}

function techalap_post_thumbnails_config(){
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'profile-photo', 320, 445, true );
    add_image_size( 'portfolio-web', 255, 350, true );
    add_image_size( 'portfolio-logo', 255, 255, true );
    add_image_size( 'portfolio-brand', 255, 185, true );
    add_image_size( 'blog-thumbnail', 540, 205, true );
}

