<?php
function hodcode_enqueue_styles() {
  
  wp_enqueue_style(
    'hodcode-style', 
    get_stylesheet_uri()
  );
  
  wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
    array(),
    '6.4.0',
    'all'
  );
  
  wp_enqueue_style(
    'hodcode-fonts',
    'https://fonts.googleapis.com/css2?family=Bungee&family=Tanha&display=swap',
    array(),
    '1.0',
    'all'
  );
  
  wp_enqueue_script(
    'tailwind', 
    "https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"
  );
}
add_action('wp_enqueue_scripts', 'hodcode_enqueue_styles');

function mytheme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
?>