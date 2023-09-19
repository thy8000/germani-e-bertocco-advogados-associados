<?php

if (!defined('ABSPATH')) exit;

function wp_utils_include_class(string $entity, string $class_name)
{
    $full_path = get_template_directory() . '/' . 'includes/entities' . '/';

    $full_path .= $entity . '/' . $class_name . '.php';

    require_once $full_path;

    $class = $entity . "\\" . $class_name;

    new $class();
}
