<?php

if (!defined('ABSPATH')){
    exit;
}

function wp_utils_get_image_link(string $path)
{
    $full_path = '/assets/images/' . $path;

    return get_template_directory_uri() . $full_path;
}