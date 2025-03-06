<?php

function mvh_enqueue_styles() {
    wp_enqueue_style('mvh-style', get_template_directory_uri() . '/style.css?dev=' . time());

    wp_enqueue_style('mvh-base', get_template_directory_uri() . '/css/base.css?dev=' . time());
    wp_enqueue_style('mvh-layout', get_template_directory_uri() . '/css/layout.css?dev=' . time());
    wp_enqueue_style('mvh-module', get_template_directory_uri() . '/css/module.css?dev=' . time());
    wp_enqueue_style('mvh-state', get_template_directory_uri() . '/css/state.css?dev=' . time());
    wp_enqueue_style('mvh-theme', get_template_directory_uri() . '/css/theme.css?dev=' . time());
}

add_action('wp_enqueue_scripts', 'mvh_enqueue_styles');