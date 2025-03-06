<?php

function mvh_enqueue_styles() {
    wp_enqueue_style('mvh-style', get_template_directory_uri() . '/style.css?dev=' . time());
}

add_action('wp_enqueue_scripts', 'mvh_enqueue_styles');