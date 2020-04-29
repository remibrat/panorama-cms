<?php

add_action('wp_enqueue_scripts', 'mct_enqueues');

function mct_enqueues() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style', get_template_directory_uri().'/style.css');
}