<?php

if (!defined('ABSPATH')) exit;

function wp_utils_debug($log)
{
    $backtrace = debug_backtrace();

    if (is_bool($log)) {
        if ($log === 1 || empty($log)) {
            $log = 'false';
        } else {
            $log = 'true';
        }
    }

    $caller = $backtrace[0]['file'] . ":" . $backtrace[0]['line'];

    error_log('File: ' . $caller);
    error_log(print_r($log, true));

    return;
}
