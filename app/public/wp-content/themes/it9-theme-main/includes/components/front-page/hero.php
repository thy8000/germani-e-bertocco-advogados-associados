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

                <h2 class="max-w-3xl pb-16 text-white text-6xl font-extrabold font-lato">
                    <?php esc_html_e('Escritório de Advocacia em Sâo Paulo') ?>
                </h2>

                <a class="p-5 bg-transparent border border-white rounded text-white it9-transition hover:bg-white hover:text-gray-600" href="<?php echo esc_url(get_page_by_path('contato')) ?>">
                    <?php echo esc_html_e('Entrar em contato') ?>
                </a>
            </div>
        </div>
    </div>
</section>