<?php

if(!defined('ABSPATH')) exit;

$main_menu = wp_get_nav_menu_items('Menu Principal');

if(empty($main_menu)){
    return;
}

?>

<div>
    <ul class="flex flex-col gap-2">
        <?php 
            foreach($main_menu as $main_menu_item){
                $menu_item_url = $main_menu_item->url;
        ?>

        <li class="text-midgray">
            <a class="text-midgray transition-all duration-500 ease-linear hover:text-jade" href="<?php echo esc_url($menu_item_url) ?>">
                <?php echo esc_html($main_menu_item->title); ?>
            </a>
        </li>

        <?php
        }
        ?>
    </ul>
</div>

