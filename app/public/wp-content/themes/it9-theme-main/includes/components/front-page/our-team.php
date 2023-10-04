<?php
// Check if ABSPATH is not defined
if (!defined('ABSPATH')) {
    // Exit the script
    exit;
}

?>

<section class="relative bg-slate-100 py-32">
    <div class="custom-container">
        <div class="flex flex-col-reverse lg:flex-row gap-12">
            <div class="w-full lg:w-1/2">
                <h2 class="text-4xl font-black text-baltic font-lato">
                    <?php esc_html_e(get_field('home_team_big_title', 'option')) ?>
                </h2>

                <br>

                <h3 class="text-lg text-gray-600">
                    <?php esc_html_e(get_field('home_team_small_title', 'option')) ?>
                </h3>
            </div>

            <div class="w-full lg:w-1/2">
                <img class="w-full aspect-[661/526] object-cover" src="<?php echo esc_url(get_field('home_team_featured_image', 'option')) ?>">
            </div>
        </div>

        <ul class="relative xl:absolute -bottom-[15%] bg-none xl:bg-orange-100 grid grid-cols-1 md:grid-cols-2 gap-12 w-full xl:w-[60%] xl:p-20 py-20">
            <?php
            // Get the list of lawyers
            $lawyers = get_posts([
                'post_type' => 'advogado',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'orderby' => 'date',
            ]);

            // Check if the lawyers array is not empty
            if (!empty($lawyers)) {
                // Loop through each lawyer
                foreach ($lawyers as $lawyer) {
            ?>
                    <div>
                        <?php wp_utils_get_component('our-team-card', [
                            'lawyer' => $lawyer,
                        ]) ?>
                    </div>
            <?php
                }
            }
            ?>
        </ul>
    </div>
</section>