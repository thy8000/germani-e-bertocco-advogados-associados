<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="flex gap-4">
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
        <span>
            <?php echo get_the_title($args['lawyer']) ?>
        </span>

        <?php
        if (!empty(get_field('lawyer_job', $args['lawyer']))) {
        ?>
            <span>
                <?php echo get_field('lawyer_job', $args['lawyer']) ?>
            </span>
        <?php
        }
        ?>
    </div>
</div>