<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<section id="call-to-action" class="call-to-action">

    <img src="<?php echo esc_url(get_field('home_cta_featured_image', 'option')) ?>" alt="">

    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    <h3>
                        <?php esc_html_e(get_field('home_cta_big_title', 'option')) ?>
                    </h3>

                    <br>

                    <p class="mb-12">
                        <?php esc_html_e(get_field('home_cta_small_title', 'option')) ?>
                    </p>

                    <a class="button-outline-white mt-8 !max-w-[500px] mx-auto" href="<?php echo esc_url(get_field('home_cta_button_link', 'option')) ?>">
                        <?php esc_html_e(get_field('home_cta_button_label', 'option')) ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>