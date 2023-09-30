<?php

if (!defined('ABSPATH')) {
    exit;
}

$services = get_posts([
    'post_type' => 'service',
    'posts_per_page' => 6,
    'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish',
]);

if (empty($services)) {
    return;
}

?>

<section class="bg-amber-50 py-32 mt-60">
    <div class="custom-container">
        <div class="flex flex-col gap-14 text-center">
            <h2 class="text-3xl	lg:text-5xl font-black text-darker">
                <?php echo esc_html(get_field('home_services_big_text', 'option')); ?>
            </h2>

            <span class="text-lg text-gray-500">
                <?php echo get_field('home_services_small_text', 'option'); ?>
            </span>
        </div>

        <ul class="mt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php

            foreach ($services as $service) {
                wp_utils_get_component('service-card', [
                    'service' => $service,
                ]);
            }

            ?>
        </ul>

        <div class="flex justify-center">
            <a class="button-solid-baltic mt-8 !max-w-[500px]" href="<?php echo esc_url('/services') ?>">
                <?php esc_html_e('Veja todos os nossos serviços') ?>
            </a>
        </div>
    </div>
</section>