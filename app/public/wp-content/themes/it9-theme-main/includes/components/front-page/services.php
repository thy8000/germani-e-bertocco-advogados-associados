<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<section class="bg-amber-50 py-32 mt-60">
    <div class="custom-container">
        <div class="flex flex-col gap-14 text-center">
            <h2 class="text-5xl font-black text-darker">
                <?php echo esc_html(get_field('home_services_big_text', 'option')); ?>
            </h2>

            <span class="text-lg text-gray-500">
                <?php echo get_field('home_services_small_text', 'option'); ?>
            </span>
        </div>
    </div>
</section>