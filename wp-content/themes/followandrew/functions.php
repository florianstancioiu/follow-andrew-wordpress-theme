<?php 

define('STYLE_AND_SCRIPT_VERSION', wp_get_theme()->get('Version'));

// Enqueue Styles
function follow_andrew_register_styles() {
  wp_enqueue_style('follow-andrew-main-styles', get_template_directory_uri() . '/style.css', ['follow-andrew-bootstrap'], STYLE_AND_SCRIPT_VERSION, 'all');
  wp_enqueue_style('follow-andrew-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', [], '5.13.0', 'all');
  wp_enqueue_style('follow-andrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', [], '4.4.1', 'all');
}
add_action('wp_enqueue_scripts', 'follow_andrew_register_styles');

// Enqueue Scripts
function follow_andrew_register_scripts() {
  wp_enqueue_script('follow-andrew-main-scripts', get_template_directory_uri() . '/assets/js/main.js', ['follow-andrew-jquery'], STYLE_AND_SCRIPT_VERSION, true);
  wp_enqueue_script('follow-andrew-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], '3.4.1', true);
  wp_enqueue_script('follow-andrew-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], '1.16.0', true);
  wp_enqueue_script('follow-andrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', [], '4.4.1', true);
}

add_action('wp_enqueue_scripts', 'follow_andrew_register_scripts');

// Enable dynamic website title 
function follow_andrew_theme_support() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'follow_andrew_theme_support');


// Register Menu Locations
function follow_andrew_register_menu_locations() {
  $locations = [
    'primary' => "Desktop Primary Left Sidebar",
    'footer' => "Foooter Items"
  ];

  register_nav_menus($locations);
}

add_action('init', 'follow_andrew_register_menu_locations');