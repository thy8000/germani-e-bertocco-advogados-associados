<?php

if (!defined('ABSPATH')) exit;

$menu_items = $args['menu-items'] ?? '';

$home_url = get_home_url();
?>

<div class="hidden justify-around items-center lg:flex">
    <a class="self-center" href="<?php echo esc_url($home_url) ?>">
        <img class="w-[200px]" src="<?php echo get_template_directory_uri() ?>/assets/images/germani-bertocco-logo.png">
    </a>

    <ul class="flex gap-x-6 justify-center items-center font-cabin">
        <?php
        foreach ($menu_items as $menu_item) {
            $menu_item_url = $menu_item->url;
        ?>
            <li>
                <a class="text-gray-600 transition-all duration-500 ease-linear hover:text-baltic" href="<?php echo esc_url($menu_item_url) ?>">
                    <?php echo esc_html($menu_item->title); ?>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>

    <a class="button-solid-baltic" href="/contact" target="_blank">
        <?php esc_html_e('Contato', 'it9') ?>
    </a>
</div>