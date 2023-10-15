<?php

if (!defined('ABSPATH')) {
    exit;
}

wp_utils_get_component('header/_index');

wp_utils_get_component('page-header', [
    'featured_image' => get_field('about_us_page_header_featured_image', 'option'),
    'page_name' => get_the_title(),
]);

$services_list = get_posts([
    'post_type' => 'service',
    'posts_per_page' => 5,
    'order' => 'DESC',
    'orderby' => 'date',
    'exclude' => [get_the_ID()],
]);

?>

<section id="service-details" class="service-details">

    <div class="custom-container">

        <div class="row gy-5">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                <div class="service-box">
                    <h4>
                        <?php esc_html_e('Outros serviços', 'it9') ?>
                    </h4>

                    <div class="services-list">
                        <?php

                        foreach ($services_list as $service) {

                        ?>
                            <a href="<?php echo esc_url(get_the_permalink($service)) ?>">
                                <span><?php echo esc_html($service->post_title) ?></span>
                            </a>
                        <?php

                        }

                        ?>
                    </div>
                </div>

                <div class="help-box d-flex flex-column justify-content-center align-items-center">
                    <?php echo wp_utils_load_svg('assets/images/headphones.svg', 'fill-gray-500 w-12') ?>

                    <h4 class="mt-3 text-center">
                        <?php esc_html_e('Precisa de ajuda ? Entre em contato conosco e agende uma consulta!', 'it9') ?>
                    </h4>

                    <a class="button-solid-baltic mt-3" href="/contato" target="_blank">
                        Contato 
                    </a>
                </div>

            </div>

            <div class="col-lg-8 ps-lg-5 pb-5 text-gray-500" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" alt="" class="img-fluid services-img object-cover">

                <?php the_content() ?>
            </div>

        </div>

    </div>

</section><!-- End Service-details Section -->

<?php

wp_utils_get_component('front-page/cta');

wp_utils_get_component('footer/_index');

?>