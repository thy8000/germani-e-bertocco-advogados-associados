<?php

if (!defined('ABSPATH')) {
    exit;
}

$recent_posts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date',
]);

if(empty($recent_posts)){
    return;
}
?>

<section class="bg-cyan-50 py-32">
    <div class="custom-container">
        <div class="flex flex-col-reverse lg:flex-row gap-12 pb-20">
            <div class="w-full lg:w-1/2">
                <h2 class="text-4xl font-black text-baltic font-lato">
                    <?php esc_html_e(get_field('home_recent_posts_big_text', 'option')) ?>
                </h2>

                <br>

                <h3 class="text-lg text-gray-600">
                    <?php esc_html_e(get_field('home_recent_posts_small_text', 'option')) ?>
                </h3>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col justify-center items-center">
                <a class="button-solid-baltic mt-8" href="<?php echo esc_url(get_field('home_recent_posts_link', 'option')) ?>">
                    <?php esc_html_e('Ver tudo', 'it9') ?>
                </a>
            </div>
        </div>
    </div>

    <div class="custom-container bootstrap snippets bootdey">
        <div class="row">
            <?php

            foreach($recent_posts as $post){
                wp_utils_get_component('front-page/recent-post-card', ['post' => $post]);
            }

            ?>
        </div>
    </div>
</section>