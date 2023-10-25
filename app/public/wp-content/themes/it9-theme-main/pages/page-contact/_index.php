<?php

if (!defined('ABSPATH')) {
    exit;
}

wp_utils_get_component('header/_index');

wp_utils_get_component('page-header', [
    'featured_image' => get_field('about_us_page_header_featured_image', 'option'),
    'page_name' => esc_html__('Contato', 'it9'),
]);


?>

<section class="section bg-gray">
    <div class="custom-container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-4xl font-bold font-lato text-darker">
                    <?php esc_html_e('Entre em contato', 'it9') ?>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <?php echo do_shortcode('[wpforms id="224"]'); ?>
            </div>

            <div class="col-lg-5">
                <p class="mb-5 text-gray-500">
                    <?php esc_html_e('Nossa equipe está a disposição para responder todas as suas dúvidas. Preencha o formulário e entraremos o contato assim que possível.', 'it9') ?>
                </p>

                <p class="mb-5 text-gray-500">
                    <?php esc_html_e('Se preferir, você também pode entrar em contato conosco por telefone, e-mail, ou visitar o nosso escritório!', 'it9') ?>
                </p>

                <a href="tel:+<?php esc_attr_e(str_replace(array('(', ')', '-', ' '), '', get_field('contact_phone', 'option'))) ?>" class="d-block mb-4 h5 text-darker opacity-100 hover:opacity-60 hover:text-darker transition-all ease-out duration-500 [line-break:anywhere]" target="_blank">
                    <?php esc_html_e(get_field('contact_phone', 'option')) ?>
                </a>

                <a href="mailto:<?php esc_attr_e(get_field('contact_mail', 'option')) ?>" class="d-block mb-4 h5 text-darker opacity-100 hover:opacity-60 hover:text-darker transition-all ease-out duration-500 [line-break:anywhere]" target="_blank">
                    <?php esc_html_e(get_field('contact_mail', 'option')) ?>
                </a>

                <a href="<?php esc_attr_e(get_field('contact_address_link', 'option')) ?>" class="d-block mb-5 h5 text-darker opacity-100 hover:opacity-60 hover:text-darker transition-all ease-out duration-500 [line-break:anywhere]" target="_blank">
                    <?php esc_html_e(get_field('contact_address', 'option')) ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php

wp_utils_get_component('footer/_index');

?>