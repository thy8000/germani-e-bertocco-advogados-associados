<?php

if(!defined('ABSPATH')){
    exit;
}

function it9_single_get_reading_time($post_id)
{
   $post_content = \get_the_content(null, false, $post_id);

   if (empty($post_content)) {
      return;
   }

   $content_word_count = str_word_count(strip_tags($post_content));

   $reading_time = ceil($content_word_count / 228);

   return \esc_html(!empty($reading_time) ? sprintf(_n('%s minuto', '%s minutos', $reading_time, 'it9'), $reading_time) : '');
}