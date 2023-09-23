<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<section class="bg-slate-200 py-32">
    <div class="custom-container">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="w-full lg:w-2/4">
                <h2 class="text-4xl font-medium	text-baltic font-lato">
                    <?php esc_html_e(get_field('home_about_us_big_title', 'option')) ?>
                </h2>

                <br>

                <h3 class="max-w-sm text-2xl italic text-emperor font-light">
                    <?php esc_html_e(get_field('home_about_us_small_title', 'option')) ?>
                </h3>

                <br>

                <div class="text-lg text-baltic">
                    <?php echo get_field('home_about_us_description', 'option') ?>
                </div>

                <br>

                <span class="text-xl font-bold text-baltic font-lato">
                    <?php esc_html_e(get_field('home_about_us_featured_text', 'option')) ?>
                </span>

                <br>

                <?php

                if (get_field('home_about_us_button_link', 'option')) {

                ?>
                    <a class="button-solid-baltic mt-8" href="<?php echo esc_url(get_field('home_about_us_button_link', 'option')) ?>">
                        <?php esc_html_e(get_field('home_about_us_button_label', 'option')) ?>
                    </a>
                <?php

                }

                ?>
            </div>

            <div class="w-full lg:w-2/4">
                <?php

                if (!empty(get_field('home_about_us_cards', 'option'))) {

                ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php

                        foreach (get_field('home_about_us_cards', 'option') as $card) {
                            wp_utils_get_component('square-card', [
                                'info' => $card
                            ]);
                        }

                        ?>
                    </div>

                <?php

                }

                ?>
            </div>
        </div>
    </div>
</section>