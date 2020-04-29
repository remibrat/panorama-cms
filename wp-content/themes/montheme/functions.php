<?php

add_action('wp_enqueue_scripts', 'mytheme_enqueues');

function mytheme_enqueues() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
}

/* Post Thumbnails */
add_theme_support('post-thumbnails');