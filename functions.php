<?php

function mvh_enqueue_styles() {
    wp_enqueue_style('mvh-style', get_template_directory_uri() . '/style.css?dev=' . time());

    wp_enqueue_style('mvh-base', get_template_directory_uri() . '/css/base.css?dev=' . time());
    wp_enqueue_style('mvh-layout', get_template_directory_uri() . '/css/layout.css?dev=' . time());
    wp_enqueue_style('mvh-module', get_template_directory_uri() . '/css/module.css?dev=' . time());
    wp_enqueue_style('mvh-state', get_template_directory_uri() . '/css/state.css?dev=' . time());
    wp_enqueue_style('mvh-theme', get_template_directory_uri() . '/css/theme.css?dev=' . time());

    wp_enqueue_style('mvh-highlightjs-css', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css');
}

function mvh_enqueue_scripts() {
    wp_enqueue_script("jquery");

    wp_enqueue_script('mvh-particles', get_template_directory_uri() . '/libraries/particles.min.js?dev=' . time());
	wp_enqueue_script('mvh-highlightjs-js', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js', '', 'latest', true);

    wp_enqueue_script('mvh-script', get_template_directory_uri() . '/js/script.js?dev=' . time(), ['mvh-particles, highlight-js']);
}

add_action('wp_enqueue_scripts', 'mvh_enqueue_styles');
add_action('wp_enqueue_scripts', 'mvh_enqueue_scripts');