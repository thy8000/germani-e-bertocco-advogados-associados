<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<section>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="<?php echo esc_url(get_field('about_us_feature_featured_image', 'option')) ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="relative col-lg-6 max-w-[600px] pt-5 pb-lg-5">
                    <div class="feature-text lg:bg-white rounded p-lg-5">
                        <h2 class="mb-2 text-uppercase font-medium text-gray-600 font-lato">
                            <?php esc_html_e(get_field('about_us_feature_big_title', 'option')) ?>
                        </h2>

                        <h3 class="mb-4 text-4xl font-bold text-darker font-lato">
                            <?php esc_html_e(get_field('about_us_feature_small_title', 'option')) ?>
                        </h3>

                        <?php
                        
                        $count = 0;

                        $last_feature_item = end(get_field('about_us_feature_features_list', 'option'));

                        foreach(get_field('about_us_feature_features_list', 'option') as $feature) {
                            $count++;
                        ?>

                        <div class="d-flex items-center <?php echo $last_feature_item !== $feature ? 'mb-4' : ''; ?>">
                            <div class="bg-darker py-[10px] px-[15px] flex justify-center items-center rounded-full">
                                <h5 class="self-center text-white">
                                    <?php esc_html_e($count) ?>
                                </h5>
                            </div>
                            
                            <div class="ml-4">
                                <h5 class="text-darker font-medium text-xl font-lato">
                                    <?php esc_html_e($feature['big_title']) ?>
                                </h5>

                                <p class="m-0 text-gray-500">
                                    <?php esc_html_e($feature['small_title']) ?>
                                </p>
                            </div>
                        </div>

                        <?php

                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>