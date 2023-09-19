<?php

if (!defined('ABSPATH')) exit;

$main_menu = wp_get_nav_menu_items('Menu Principal');

if (empty($main_menu)) {
    return;
}
?>

<header class="sticky top-0 left-0 w-full z-50 shadow-[0px_9px_15px_rgba(0,0,0,0.75)] bg-white">
    <div class="container px-4 md:px-12">
        <?php
        wp_utils_get_component('header/components/main-menu-desktop', [
            'menu-items' => $main_menu,
        ]);

        wp_utils_get_component('header/components/main-menu-mobile', [
            'menu-items' => $main_menu,
        ])
        ?>
    </div>
</header>