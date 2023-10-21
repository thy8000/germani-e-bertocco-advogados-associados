<?php

if (!defined('ABSPATH')) {
    exit;
}

wp_utils_get_component('header/_index');

wp_utils_get_component('page-header', [
    'featured_image' => get_field('about_us_page_header_featured_image', 'option'),
    'page_name' => esc_html__('Notícias', 'it9'),
]);


$posts = new WP_Query([
    'paged'          => $paged,
    'post_type'      => 'post',
    'posts_per_page' => 12,
    'order'          => 'DESC',
    'orderby'        => 'date',
]);

?>

<section class="section">
    <div class="custom-container">
        <div class="row flex-wrap mt-5">

            <?php

            if (!$posts->have_posts()) {

            ?>

                <h2 class="mt-5 text-lg font-medium text-baltic">
                    <?php esc_html_e('Não há posts disponíveis atualmente. Tente novamente mais tarde.', 'it9') ?>
                </h2>

                <a class="button-solid-baltic mt-3 mb-5" href="<?php esc_attr_e(get_home_url()) ?>" target="_blank">
                    <?php esc_html_e('Ir para home', 'it9') ?>
                </a>

            <?php

            } else {
                while ($posts->have_posts()) {
                    $posts->the_post();

                    wp_utils_get_component('post-card', [
                        'post' => get_post(),
                    ]);
                }
            }

            ?>
        </div>

        <div class="flex gap-4 mb-5">
            <?php
            echo paginate_links([
                'total'      => $posts->max_num_pages,
                'prev_text'  => '<',
                'next_text' => '>',
            ]);
            ?>
        </div>
    </div>
</section>

<?php

wp_utils_get_component('footer/_index');

?>