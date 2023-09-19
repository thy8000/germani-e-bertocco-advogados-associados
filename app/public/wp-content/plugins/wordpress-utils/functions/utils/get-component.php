<?php

if (!defined('ABSPATH')) exit;

function wp_utils_get_component(string $path, array $args = [])
{
    $full_path = 'includes/components/' . $path;

    return get_template_part($full_path, '', $args);
}
