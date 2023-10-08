<?php

if (!defined('ABSPATH')) {
    exit;
}

$attorneys = get_posts([
    'post_type' => 'advogado',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
]);

?>


<div class="team mt-125">
    <div class="container">
        <div class="section-header">
            <p class="font-lato text-gray-600">
                <?php esc_html_e('Conheça nossos advogados') ?>
            </p>

            <h2 class="font-lato text-darker">
                <?php esc_html_e('Nossa equipe de Advocacia') ?>
            </h2>
        </div>
        <div class="row">
            <?php

            foreach ($attorneys as $attorney) {
                wp_utils_get_component('our-team-card', [
                    'lawyer' => $attorney,
                    'type' => 'vertical',
                ]);
            }

            ?>
        </div>
    </div>
</div>