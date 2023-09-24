<?php

if(!defined('ABSPATH')){
    exit;
}

add_action('init', 'it9_post_thumbnail_options');
function it9_post_thumbnail_options(){
    add_theme_support('post-thumbnails');
}