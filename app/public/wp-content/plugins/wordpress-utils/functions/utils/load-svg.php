<?php

if (!defined('ABSPATH')) exit;

function wp_utils_load_svg(string $file_path, string $classes = '')
{
    $full_file_path = get_template_directory() . '/' . $file_path;

    if (file_exists($full_file_path)) {
        $file_content = file_get_contents($full_file_path);

        if (!empty($classes)) {
            if (stripos($file_content, 'class="')) {
                $file_content = str_replace('class="', 'class="' . $classes . ' ', $file_content);
            } else {
                $file_content = str_replace('<svg ', '<svg class="' . $classes . '" ', $file_content);
            }
        }

        echo $file_content;
    }
}
