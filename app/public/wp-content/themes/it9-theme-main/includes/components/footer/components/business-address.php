<?php

if (!defined('ABSPATH')) exit;

$business_address = [
    'address' => [
        'link' => esc_url('https://goo.gl/maps/XJLpfXgwbXXrVQJ18'),
        'label' => esc_html__('Rua, número, bairro, cidade - estado', 'it9'),
    ],
    'cep' => [
        'link' => esc_url('https://goo.gl/maps/XJLpfXgwbXXrVQJ18'),
        'label' => esc_html__('CEP: numero-do-cep', 'it9'),
    ],
    'mail' => [
        'link' => 'mailto:contato@obrasoft.com.br',
        'label' => esc_html('email'),
    ],
];
?>

<div class="flex flex-col gap-2">
    <a href="tel:+<?php esc_attr_e(str_replace(array('(', ')', '-', ' '), '', get_field('contact_phone', 'option'))) ?>" class="d-block text-normal text-darker opacity-100 hover:opacity-60 hover:text-darker transition-all ease-out duration-500 [line-break:anywhere]" target="_blank">
        <?php esc_html_e(get_field('contact_phone', 'option')) ?>
    </a>

    <a href="mailto:<?php esc_attr_e(get_field('contact_mail', 'option')) ?>" class="d-block text-normal text-darker opacity-100 hover:opacity-60 hover:text-darker transition-all ease-out duration-500 [line-break:anywhere]" target="_blank">
        <?php esc_html_e(get_field('contact_mail', 'option')) ?>
    </a>

    <a href="<?php esc_attr_e(get_field('contact_address_link', 'option')) ?>" class="d-block text-normal text-darker opacity-100 hover:opacity-60 hover:text-darker transition-all ease-out duration-500 [line-break:anywhere]" target="_blank">
        <?php esc_html_e(get_field('contact_address', 'option')) ?>
    </a>
</div>