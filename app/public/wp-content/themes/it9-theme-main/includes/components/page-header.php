<?php

if (!defined('ABSPATH')) {
    exit;
}

$background_image_style = "background: linear-gradient(rgba(55, 55, 63, 0.7), rgba(55, 55, 63, 0.7)), url({$args['featured_image']}), no-repeat center center;"
?>

<div class="container-fluid bg-page-header !bg-no-repeat !bg-center" style="<?php echo esc_attr($background_image_style) ?>">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 text-white text-uppercase text-center font-lato pb-4">
                <?php esc_html_e($args['page_name']) ?>
            </h3>

            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase">
                    <a class="text-white" href="<?php echo esc_url(get_home_url()) ?>">
                        <?php esc_html_e('Home', 'it9') ?>
                    </a>
                </p>

                <i class="fa fa-angle-double-right pt-1 px-3"></i>

                <p class="m-0 text-uppercase">
                    <?php esc_html_e($args['page_name']) ?>
                </p>
            </div>
        </div>
    </div>
</div>