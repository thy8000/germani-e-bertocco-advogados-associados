<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'it9_create_advogado_fields');
function it9_create_advogado_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    /*
    acf_add_local_field_group(array(
        'key' => 'group_6510729c2df29',
        'title' => 'Informações do Advogado',
        'fields' => array(
            array(
                'key' => 'field_6510729ca8189',
                'label' => 'Cargo',
                'name' => 'lawyer_job',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'advogado',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'excerpt',
            1 => 'discussion',
            2 => 'comments',
            3 => 'author',
            4 => 'categories',
            5 => 'tags',
            6 => 'send-trackbacks',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    */
}
