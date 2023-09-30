<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<li class="service-card block relative justify-self-center max-w-[300px] w-full aspect-[281/493] object-cover py-5 px-7 rounded">
    <a href="<?php echo esc_url(get_the_permalink($args['service'])) ?>">
        <figure class="absolute top-0 left-0 w-full h-full overflow-hidden after:content-[''] after:absolute after:w-full after:h-full after:top-0 after:left-0 after:bg-black after:opacity-30">
            <img class="service-card-image block w-full h-full object-cover it9-transition" src="<?php echo esc_url(get_the_post_thumbnail_url($args['service'])) ?>" alt="<?php echo esc_attr(get_the_title($args['service'])) ?>">
        </figure>

        <div class="relative flex flex-col justify-end w-full h-full">
            <span class="text-xl font-bold	font-lato text-white">
                <?php echo esc_html(get_the_title($args['service'])) ?>
            </span>
        </div>
    </a>
</li>