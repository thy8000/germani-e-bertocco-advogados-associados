<?php

if (!defined('ABSPATH')) exit;

/**
 * This function will change the default templates hierarchy for Wordpress.
 * The template file templatename.php will change to pages/templatename/_index.php.
 * For example, the template front-page.php will be changed to pages/front-page/_index.php. 
 */

$template_list = [
    'home',
    'frontpage',
    'privacy-policy',
    'single',
    'page',
    'category',
    'tag',
    'taxonomy',
    'archive',
    'author',
    'date',
    'search',
    '404',
    'attachment',
    'embeds',
];

foreach ($template_list as $template) {
    add_filter("{$template}_template_hierarchy", "wp_utils_change_template_paths");
}

function wp_utils_change_template_paths($template_list)
{
    if (strpos($template_list[0], 'pages/') !== false) {
        return $template_list;
    }

    foreach ($template_list as $template) {
        $index_file = str_replace('.php', '/_index.php', $template);

        $new_template_list[] = "pages/{$index_file}";
    }

    return array_merge($new_template_list, $template_list);
}
