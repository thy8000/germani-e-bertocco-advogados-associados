<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<div class="flex flex-col justify-center items-center aspect-[1/1] bg-white">
    <h2 class="text-6xl lg:text-4xl xl:text-6xl font-medium font-lato text-emperor italic">
        <?php esc_html_e($args['info']['big_title']) ?>
    </h2>

    <br>

    <h3 class="max-w-[80%] text-center text-xl font-medium text-gray-400 italic">
        <?php esc_html_e($args['info']['small_title']) ?>
    </h3>
</div>