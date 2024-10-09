<?php 

define('STYLES_VERSION', wp_get_theme()->get('Version'));

function follow_andrew_register_styles() {
  wp_enqueue_style('follow-andrew-main-styles', get_template_directory_uri() . '/style.css', ['follow-andrew-bootstrap'], STYLES_VERSION, 'all');
  wp_enqueue_style('follow-andrew-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', [], '5.13.0', 'all');
  wp_enqueue_style('follow-andrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', [], '4.4.1', 'all');
}

add_action('wp_enqueue_scripts', 'follow_andrew_register_styles');