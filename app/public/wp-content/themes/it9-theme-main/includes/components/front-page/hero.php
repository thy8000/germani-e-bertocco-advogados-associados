<?php

if (!defined('ABSPATH')) {
    exit;
}

$hero_image = "background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
url(" . esc_url(get_field('home_hero_featured_image', 'option')) . ");";
?>

<section class="bg-cover bg-no-repeat w-full" style="<?php echo $hero_image ?>">
    <div class="custom-container">
        <div class="flex">
            <div class="py-[40vh]">
                <h1 class="max-w-3xl text-white text-3xl font-medium pb-8">
                    <?php esc_html_e(get_field('home_hero_small_title', 'option')) ?>
                </h1>

                <h2 class="max-w-3xl pb-16 text-white text-6xl font-extrabold font-lato">
                    <?php esc_html_e(get_field('home_hero_big_title', 'option')) ?>
                </h2>

                <a class="button-outline-white" href="<?php echo esc_url(get_field('home_hero_link', 'option')) ?>">
                    <?php esc_html_e(get_field('home_hero_text', 'option')) ?>
                </a>
            </div>
        </div>
    </div>
</section>