<?php

if (!defined('ABSPATH')) {
    exit;
}

$hero_image = "background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
url(" . esc_url(wp_utils_get_image_link('hero-background.jpg')) . ");"
?>

<section class="front-page-hero bg-cover bg-no-repeat w-full" style="<?php echo $hero_image ?>">
    <div class="custom-container">
        <div class="flex">
            <div class="py-[40vh]">
                <h1 class="max-w-3xl text-white text-3xl font-medium pb-8">
                    <?php esc_html_e('Germani e Bertocco') ?>
                </h1>

                <h2 class="max-w-3xl text-white text-6xl font-extrabold font-lato">
                    <?php esc_html_e('Escritório de Advocacia em Sâo Paulo') ?>
                </h2>
            </div>
        </div>
    </div>
</section>