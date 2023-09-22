<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'it9_create_page_content_option_page');
function it9_create_page_content_option_page()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    add_action('acf/init', function () {
        acf_add_options_page(array(
            'page_title' => 'Conteúdo das Páginas',
            'menu_slug' => 'page-content',
            'position' => 2,
            'redirect' => false,
        ));
    });
}

add_action('init', 'it9_create_page_content_fields');
function it9_create_page_content_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_650cef4b4bc6f',
        'title' => 'Página Inicial',
        'fields' => array(
            array(
                'key' => 'field_650cef4be429d',
                'label' => 'Hero',
                'name' => '',
                'aria-label' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_650cefdde429e',
                'label' => 'Imagem Destacada',
                'name' => 'home_hero_featured_image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_650ceff5e429f',
                'label' => 'Título Menor',
                'name' => 'home_hero_small_title',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
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
            array(
                'key' => 'field_650cf03ce42a0',
                'label' => 'Título Maior',
                'name' => 'home_hero_big_title',
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
            array(
                'key' => 'field_650cf05de42a1',
                'label' => 'Texto do Botão',
                'name' => 'home_hero_text',
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
            array(
                'key' => 'field_650cf0a9e42a2',
                'label' => 'home_hero_link',
                'name' => 'home_hero_link',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'page-content',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
}
