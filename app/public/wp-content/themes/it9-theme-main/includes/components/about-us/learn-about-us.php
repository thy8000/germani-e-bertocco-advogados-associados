<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<div class="container-fluid py-32 bg-slate-100">
    <div class="container py-5">
        <div class="flex xl:flex-row flex-col xl:!gap-10 gap-0">
            <div class="col-xl-5">
                <img class="img-fluid rounded object-cover aspect-square" src="<?php echo esc_url(get_field('about_us_learn_about_us_featured_image', 'option')) ?>" alt="">
            </div>
            <div class="col-xl-7 mt-4 mt-xl-0 xl:max-w-[800px]">
                <h6 class="mb-3 font-lato text-uppercase text-base font-medium text-baltic">
                    <?php esc_html_e(get_field('about_us_learn_about_us_big_title_label', 'option')) ?>
                </h6>

                <h2 class="mb-4 text-4xl font-bold text-baltic">
                    <?php esc_html_e(get_field('about_us_learn_about_us_big_title', 'option')) ?>
                </h2>

                <p class="text-gray-500">
                    <?php esc_html_e(get_field('about_us_learn_about_us_small_title', 'option')) ?>
                </p>
            </div>
        </div>
    </div>
</div>