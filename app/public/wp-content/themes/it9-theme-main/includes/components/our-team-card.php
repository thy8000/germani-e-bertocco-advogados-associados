<?php
if (!defined('ABSPATH')) {
    exit;
}

if ($args['type'] === 'horizontal') {

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

<?php

} else {

?>
    <div class="col-lg-3 col-md-6">
        <a class="col-lg-3 col-md-6" href="<?php echo esc_url(get_the_permalink($args['lawyer'])) ?>">
            <div class="team-item">
                <div class="team-img">
                    <img class="aspect-[255/297] object-cover" src="<?php echo esc_url(get_the_post_thumbnail_url($args['lawyer'])); ?>">
                </div>

                <div class="team-text">
                    <h2>
                        <?php esc_html_e(get_the_title($args['lawyer'])) ?>
                    </h2>

                    <p>
                        <?php esc_html_e(get_field('lawyer_job', $args['lawyer']->ID)) ?>
                    </p>
        </a>

        <div class="team-social">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    </div>
    </div>
<?php

}

?>