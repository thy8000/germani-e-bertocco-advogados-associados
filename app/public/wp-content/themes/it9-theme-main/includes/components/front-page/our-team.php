<?php
// Check if ABSPATH is not defined
if (!defined('ABSPATH')) {
    // Exit the script
    exit;
}

?>

<section class="bg-red-50 py-32">
    <div class="custom-container">
        <div class="flex gap-12">
            <div class="w-1/2">
                <h2 class="text-4xl font-medium text-baltic font-lato">
                    <?php esc_html_e(get_field('home_team_big_title', 'option')) ?>
                </h2>

                <br>

                <h3 class="text-lg text-gray-600">
                    <?php esc_html_e(get_field('home_team_small_title', 'option')) ?>
                </h3>
            </div>

            <div class="w-1/2">
                <img class="w-full aspect-[661/526] object-cover" src="<?php echo esc_url(get_field('home_team_featured_image', 'option')) ?>">
            </div>
        </div>

        <ul class="grid grid-cols-2 gap-12">
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
                    <div class="w-1/2">
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