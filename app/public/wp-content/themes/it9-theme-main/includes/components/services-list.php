<?php

if (!defined('ABSPATH')) {
    exit;
}

$services = get_posts([
    'post_type' => 'service',
    'posts_per_page' => $args['post_per_page'] ?? 6,
    'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish',
]);

$grid_template_cols = 'lg:grid-cols-3';

if (!empty($args['type'])) {
    $grid_template_cols = $args['type'] === 'fourth' ? 'lg:grid-cols-4' : 'lg:grid-cols-3';
}

?>

<ul class="mt-20 grid grid-cols-1 md:grid-cols-2 <?php esc_attr_e($grid_template_cols) ?> gap-10">
    <?php

    foreach ($services as $service) {
        wp_utils_get_component('service-card', [
            'service' => $service,
        ]);
    }

    ?>
</ul>