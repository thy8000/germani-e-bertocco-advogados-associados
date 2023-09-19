<?php

if (!defined('ABSPATH')) exit;

$menu_items = $args['menu-items'] ?? '';

$home_url = get_home_url();
?>

<div class="flex h-[90px] justify-around items-center lg:hidden">
    <div class="flex items-center">
        <?php wp_utils_load_svg('assets/images/hamburguer-open.svg', 'main-menu-button-open fill-baltic w-8 pt-2.5') ?>
    </div>

    <a class="self-center" href="<?php echo esc_url($home_url) ?>">
        <img class="w-[150px]" src="<?php echo get_template_directory_uri() ?>/assets/images/germani-bertocco-logo.png">
    </a>

    <ul class="main-menu-mobile-items font-cabin flex-col fixed bg-white top-0 h-full w-full -left-full transition-all duration-500 ease-in-out">
        <div class="flex relative">
            <img class="w-60 p-8" src="<?php echo get_template_directory_uri() ?>/assets/images/germani-bertocco-logo.png">

            <?php wp_utils_load_svg('assets/images/close.svg', 'main-menu-button-close fill-baltic w-8 pt-2.5 self-center absolute right-9') ?>
        </div>

        <?php
        foreach ($menu_items as $menu_item) {
            $menu_item_url = $menu_item->url;
        ?>
            <li class="p-4 border-y border-b-[#f4f0f0]">
                <a class="text-gray-600 transition-all duration-500 ease-linear hover:text-baltic" href="<?php echo esc_url($menu_item_url) ?>">
                    <?php esc_html_e($menu_item->title); ?>
                </a>
            </li>
        <?php
        }
        ?>

        <a class="ml-4 mt-10 bg-baltic text-white py-4 px-10 rounded-full flex gap-3.5 items-center justify-center transition-all duration-500 ease-in hover:bg-transparent hover:border hover:text-jade hover:border-jade max-w-[250px]" href="/contato" target="_blank">
            <?php esc_html_e('Contato', 'it9-obrasoft') ?>
        </a>
    </ul>
</div>