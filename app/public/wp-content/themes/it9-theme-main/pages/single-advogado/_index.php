<?php

if (!defined('ABSPATH')) {
  exit;
}

wp_utils_get_component('header/_index');

wp_utils_get_component('page-header', [
  'featured_image' => get_field('about_us_page_header_featured_image', 'option'),
  'page_name' => get_the_title(),
]);

$contact_list = [
  'mail' => [
    'name' => get_field('lawyer_mail') ?? '',
    'icon' => 'assets/images/mail.svg',
    'link' => get_field('lawyer_mail') ? 'mailto:' . get_field('lawyer_mail') : '',
  ],
  'phone' => [
    'name' => get_field('lawyer_phone') ?? '',
    'icon' => 'assets/images/mobile.svg',
    'link' => get_field('lawyer_phone') ? 'tel:+' . get_field('lawyer_phone') : '',
  ],
  'facebook' => [
    'name' => get_field('lawyer_facebook') ? get_the_title() : '',
    'icon' => 'assets/images/facebook-single-equipe.svg',
    'link' => get_field('lawyer_facebook') ?? '',
  ],
  'instagram' => [
    'name' => get_field('lawyer_instagram') ? get_the_title() : '',
    'icon' => 'assets/images/instagram.svg',
    'link' => get_field('lawyer_instagram') ?? '',
  ],
  'website' => [
    'name' => get_field('lawyer_website') ?? '',
    'icon' => 'assets/images/global.svg',
    'link' => get_field('lawyer_website') ?? '',
  ],
];

?>

<section class="py-20">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5">
        <img class="img-fluid w-100 aspect-[445/501] object-cover" src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" alt="teacher">
      </div>
      <div class="col-md-6 mb-5">
        <h3 class="text-2xl	font-bold font-lato text-baldic pb-1">
          <?php esc_html_e(get_the_title()) ?>
        </h3>

        <?php

        if (!empty(get_field('lawyer_job'))) {

        ?>
          <h6 class="font-bold text-gray-600 pb-4">
            <?php esc_html_e(get_field('lawyer_job')) ?>
          </h6>
        <?php

        }

        ?>

        <?php

        if (!empty(get_field('lawyer_excerpt'))) {

        ?>
          <p class="mb-5 text-sm text-gray-500">
            <?php echo get_field('lawyer_excerpt') ?>
          </p>
        <?php

        }

        ?>

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <?php

            if (!empty(get_field('lawyer_mail'))) {

            ?>

              <h4 class="mb-4 uppercase text-xl	font-bold font-lato text-baldic">
                <?php esc_html_e('Informações de Contato', 'it9') ?>
              </h4>

              <ul class="list-unstyled">
                <?php

                foreach ($contact_list as $contact) {
                  if (empty($contact['name'])) {
                    continue;
                  }

                ?>
                  <li class="mb-3">
                    <a class="flex items-center gap-1 text-baltic hover:text-gray-500 transition-all duration-500 ease-out" href="<?php echo $contact['link'] ?? '#' ?>">
                      <?php wp_utils_load_svg($contact['icon']) ?>

                      <?php esc_html_e($contact['name']) ?>
                    </a>
                  </li>
                <?php

                }

                ?>
              </ul>

            <?php

            }

            ?>
          </div>
          <div class="col-md-6">
            <?php

            if (!empty(get_field('lawyer_specialities'))) {

            ?>
              <h4 class="mb-4 uppercase text-xl	font-bold font-lato text-baldic">
                <?php esc_html_e('Especialidades', 'it9') ?>
              </h4>

              <ul class="list-unstyled">
                <?php

                foreach (get_field('lawyer_specialities') as $specialty) {
                  if (empty($specialty['name'])) {
                    continue;
                  }

                ?>
                  <li class="text-baltic mb-3"><?php esc_html_e($specialty['name']) ?></li>

                <?php

                }

                ?>
              </ul>
            <?php

            }

            ?>
          </div>
        </div>
      </div>
      <div class="col-12">
        <h4 class="mb-4 text-xl	font-bold font-lato text-baldic">
          <?php esc_html_e('Biografia', 'it9') ?>
        </h4>

        <div class="mb-5 text-gray-500">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php

wp_utils_get_component('front-page/cta');

wp_utils_get_component('footer/_index');

?>