<?php

if(!defined('ABSPATH')) exit;

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

<div class="flex flex-col gap-4">
    <?php
    foreach($business_address as $address){
    ?>
    <span class="text-midgray">
        <a class="hover:text-jade text-midgray transition-all duration-500 ease-linear" href="<?php echo $address['link'] ?>" target="_blank">
            <?php echo $address['label'] ?>
        </a>
    </span>
    <?php
    }
    ?>
</div>