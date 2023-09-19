<?php

if (!defined('ABSPATH')) exit;

/**
 * Include a function or php file from directory path 'includes/functions'.
 * 
 * @param string $folder: Folder where the @param $filename is located. If the file is not located in a folder, you can leave this parameter empty.
 * @param string $filename: Name of file you want to include.
 * 
 * @return include $full_path: The function will return the included file specified by the full_path parameter, using the parameters you input.
 */

function wp_utils_include_function(string $folder = '', string $filename)
{
    $full_path = get_template_directory() . '/' . 'includes/functions' . '/';

    if (!empty($folder)) {
        $full_path .= $folder . '/';
    }

    $full_path .= $filename . '.php';

    return include $full_path;
}
