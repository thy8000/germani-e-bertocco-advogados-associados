<?php

if(!defined('ABSPATH')){
    exit;
}

wp_utils_get_component('header/_index');

wp_utils_get_component('page-header', [
    'featured_image' => get_field('about_us_page_header_featured_image', 'option'),
    'page_name' => esc_html__('Sobre nós', 'it9'),
]);

wp_utils_get_component('front-page/about-us');

wp_utils_get_component('about-us/learn-about-us');

wp_utils_get_component('footer/_index');