<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<div class="col-lg-6 col-xl-4 relative">
    <a href="<?php echo esc_url(get_the_permalink($args['post'])) ?>" class="widget widget-image shadow-2xl" target="_blank">
        <?php

        $categories = get_the_category($args['post']->ID);

        if (!empty($categories)) {
            $first_category = array_shift($categories);
        ?>
            <span class="absolute z-20 top-[20px] left-[20px] badge rounded-pill bg-success p-2">
                <?php esc_html_e($first_category->name) ?>
            </span>
        <?php

        }

        ?>

        <div class="widget-image-cover">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url($args['post'])) ?>" alt="<?php echo esc_attr(get_the_title($args['post'])) ?>">
        </div>
        <div class="widget-image-info">
            <h5 class="line-clamp-3">
                <?php esc_html_e(get_the_title($args['post'])) ?>
            </h5>

            <div class="row">
                <div class="col-md-6">
                    <div class="widget-image-user">
                        <div class="widget-image-user-image">
                            <?php
                            $authorName = get_the_author_meta('display_name', $args['post']->post_author);

                            $authorAvatar = get_avatar_url(get_the_author_meta('user_email', $args['post']->post_author), $args['post']->post_author);

                            ?>
                            <img src="<?php echo esc_url($authorAvatar) ?>" alt="">
                        </div>
                        <div class="widget-image-user-info">
                            <div>
                                <?php

                                esc_html_e($authorName); 

                                ?>
                            </div>

                            <span>
                                <?php

                                $published_date_timestamp = get_the_time('U');

                                $published_date_timediff = human_time_diff($published_date_timestamp, current_time('timestamp'));

                                echo sprintf(
                                    esc_html__('%s %s', 'it9'),
                                    $published_date_timediff,
                                    'atrás'
                                );

                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>