<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<a class="flex gap-4" href="<?php echo esc_url(get_the_permalink($args['lawyer'])) ?>">
    <div>
        <?php
        if (has_post_thumbnail($args['lawyer'])) {
        ?>
            <picture>
                <?php
                echo get_the_post_thumbnail($args['lawyer'], 'medium', [
                    'class' => 'w-[5rem] aspect-[80/80] object-cover rounded-full',
                ]);
                ?>
            </picture>
        <?php
        }
        ?>
    </div>

    <div class="flex flex-col justify-center">
        <span class="text-3xl font-semibold font-lato text-darker transition-all duration-500 ease-linear hover:text-gray-500">
            <?php echo get_the_title($args['lawyer']) ?>
        </span>

        <?php
        if (!empty(get_field('lawyer_job', $args['lawyer']))) {
        ?>
            <span class="text-lg text-gray-600">
                <?php echo get_field('lawyer_job', $args['lawyer']) ?>
            </span>
        <?php
        }
        ?>
    </div>
    </a>