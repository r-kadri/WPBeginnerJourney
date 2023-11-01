<?php

namespace App;

const BOOTSTRAP_CSS_URL = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
const POPPER_JS_URL = 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js';
const BOOTSTRAP_JS_URL = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js';

function register_assets() {
    wp_register_style('bootstrap', BOOTSTRAP_CSS_URL);
    wp_register_script('bootstrap', BOOTSTRAP_JS_URL, ['popper'], false, ['in_footer' => true]);
    wp_register_script('popper', POPPER_JS_URL, [], false, ['in_footer' => true]);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'App\register_assets');
add_action('after_setup_theme', 'App\supports');
