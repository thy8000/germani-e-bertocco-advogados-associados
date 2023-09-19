<?php

if (!defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', 'it9_enqueue_assets');
function it9_enqueue_assets()
{
    wp_enqueue_style('it9-css-all', get_stylesheet_directory_uri() . '/assets/css/all.css');

    wp_enqueue_script('it9-js-all', get_template_directory_uri() . '/assets/js/all.js', array(), '1.0', true);
}
