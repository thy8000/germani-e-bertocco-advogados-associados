<?php

if (!defined('ABSPATH')) exit;

$social_media = [
    'youtube' => [
        'link' => '#',
        'icon' => 'assets/images/youtube.svg',
    ],
    'facebook' => [
        'link' => '#',
        'icon' => 'assets/images/facebook.svg',
    ],
    'linkedin' => [
        'link' => '#',
        'icon' => 'assets/images/linkedin.svg',
    ],
];
?>

<div class="flex flex-col gap-10">
    <img class="w-[200px]" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/germani-bertocco-logo.png') ?>">

    <div class="flex gap-2.5">
        <?php
        foreach ($social_media as $key => $social) {
        ?>
            <a class="footer-social-link hover:bg-midgray transition-colors duration-700 rounded-full border-midgray border p-1" href="<?php echo esc_url($social['link']) ?>" target="_blank">
                <?php wp_utils_load_svg("{$social['icon']}", 'footer-social-link-icon w-8 h-auto stroke-midgray') ?>
            </a>
        <?php
        }
        ?>
    </div>
</div>