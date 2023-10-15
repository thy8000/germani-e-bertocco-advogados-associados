<?php

if (!defined('ABSPATH')) {
    exit;
}

wp_utils_get_component('header/_index');

wp_utils_get_component('page-header', [
    'featured_image' => get_field('about_us_page_header_featured_image', 'option'),
    'page_name' => esc_html__('Serviços', 'it9'),
]);

?>

<div class="custom-container">
    <div class="team section-header">
        <p>
            <?php esc_html_e('Serviços', 'it9') ?>
        </p>

        <h2>
            <?php esc_html_e('Conheça todos nossos serviços', 'it9') ?>
        </h2>
    </div>

    <section class="pb-28">
        <?php
        wp_utils_get_component('services-list', [
            'post_per_page' => -1,
            'type'        => 'fourth',
        ]);
        ?>
    </section>
</div>

<?php

wp_utils_get_component('front-page/cta');

wp_utils_get_component('footer/_index');
