<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<article class="col-lg-4 col-sm-6 col-12 mb-5 flex lg:flex-[0_0_33.333%]">
    <div class="card flex flex-[0_0_100%] rounded-0 border border-gray-500 shadow">
        <img class="card-img-top rounded-0 object-cover" src="<?php esc_attr_e(get_the_post_thumbnail_url($args['post'])) ?>" alt="Post thumb">

        <div class="card-body">
            <ul class="list-inline mb-3">

                <li class="list-inline-item mr-3 ml-0 text-base text-gray-600 font-lato">
                    <?php esc_html_e(get_the_date('j \d\e F \d\e Y', $args['post'])); ?>
                </li>

                <li class="list-inline-item mr-3 ml-0 text-base text-gray-600 font-lato">
                    <?php

                    printf(
                        "%s %s",
                        esc_html__('por', 'it9'),
                        get_the_author_meta(
                            'display_name',
                            $args['post']->post_author
                        )
                    );

                    ?>
                </li>
            </ul>

            <a href="<?php esc_attr_e(get_the_permalink($args['post'])) ?>">
                <h4 class="card-title text-xl font-bold text-baltic font-lato line-clamp-3 opacity-100 hover:opacity-50 transition-all duration-500 ease-in-out">
                    <?php esc_html_e(get_the_title($args['post'])) ?>
                </h4>
            </a>

            <p class="card-text mb-4 text-base text-gray-500 line-clamp-4">
                <?php esc_html_e(get_the_excerpt($args['post'])) ?>
            </p>

            <div class="min-h-[50px]">
                <a class="btn btn-sm absolute bottom-[15px] bg-baltic py-2.5 px-11 text-white font-lato opacity-100 hover:opacity-90 transition-all duration-500 ease-in-out" href="<?php esc_attr_e(get_the_permalink($args['post'])) ?>">
                    <?php esc_html_e('Ler mais', 'it9') ?>
                </a>
            </div>
        </div>
    </div>
</article>