<?php

if (!defined('ABSPATH')) {
    exit;
}

global $post;

wp_utils_get_component('header/_index');

wp_utils_get_component('page-header', [
    'featured_image' => get_field('about_us_page_header_featured_image', 'option'),
    'page_name' => get_the_title(),
]);

$current_category = get_the_category($post)[0] ?? '';

$related_posts = get_posts([
    'category__in' => !empty($current_category) ? [$current_category->term_id] : [],
    'post__not_in' => [get_the_ID($post)],
    'posts_per_page' => 3,
]);

?>

<section class="section-sm bg-gray">
    <div class="custom-container">
        <div class="row">
            <div class="col-12 pt-5 pb-3">
                <img src="<?php esc_attr_e(get_the_post_thumbnail_url($post)) ?>" alt="blog-thumb" class="img-fluid w-100 aspect-[1110/613] object-cover">
            </div>

            <div class="col-12">
                <ul class="list-inline">
                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-darker">
                        <span class="font-weight-bold flex items-center justify-center gap-2 mr-2">
                            <?php

                            wp_utils_load_svg(
                                'assets/images/user.svg',
                                'fill-darker'
                            );

                            printf("%s %s", esc_html__('Autor: ', 'it9'), get_the_author_meta('display_name', $post->post_author));

                            ?>
                        </span>
                    </li>

                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-darker">
                        <span class="font-weight-bold flex items-center justify-center gap-2 mr-2">
                            <?php

                            wp_utils_load_svg(
                                'assets/images/clock.svg',
                                'fill-darker'
                            );

                            printf("%s %s", esc_html__('Data da publicação: ', 'it9'), get_the_date('', $post));

                            ?>
                        </span>
                    </li>

                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-darker">
                        <span class="font-weight-bold flex items-center justify-center gap-2 mr-2">
                            <?php

                            wp_utils_load_svg(
                                'assets/images/book.svg',
                                'fill-darker'
                            );

                            printf("%s %s", esc_html__('Tempo de leitura: ', 'it9'), it9_single_get_reading_time($post->ID));

                            ?>
                        </span>
                    </li>
                </ul>
            </div>
            <!-- border -->
            <div class="col-12 mt-3">
                <div class="border-bottom border-[#ededf1]"></div>
            </div>

            <!-- blog contect -->
            <div class="col-12 mb-5">
                <h1 class="pt-4 text-5xl font-bold text-darker font-lato">
                    <?php esc_html_e(get_the_title($post)) ?>
                </h1>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

if (!empty($related_posts)) {

?>
    <section class="section">
        <div class="custom-container">
            <div class="row flex-wrap mt-5">
                <div class="py-5 col-12 font-lato text-darker text-3xl font-bold">
                    <?php esc_html_e('Posts Relacionados', 'it9'); ?>
                </div>

                <?php

                foreach ($related_posts as $related_post) {
                    wp_utils_get_component('post-card', [
                        'post' => $related_post,
                    ]);
                }

                ?>
            </div>
        </div>
    </section>
<?php

}

wp_utils_get_component('front-page/cta');

wp_utils_get_component('footer/_index');
