<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'it9_register_post_type_advogado');
function it9_register_post_type_advogado()
{
    register_post_type('advogado', [
        'labels'             => [
            'name'          => esc_attr__('Advogados', 'it9'),
            'singular_name' => esc_attr__('Advogado', 'it9'),
            'menu_name'     => esc_attr__('Advogados', 'it9'),
            'search_items'  => esc_attr__('Procurar advogado', 'it9'),
            'all_items'     => esc_attr__('Todos os advogados', 'it9'),
            'edit_item'     => esc_attr__('Editar advogado', 'it9'),
            'update_item'   => esc_attr__('Atualizar advogado', 'it9'),
            'add_new_item'  => esc_attr__('Adicionar novo advogado', 'it9'),
            'new_item'      => esc_attr__('Novo advogado', 'it9'),
        ],
        'description'      => esc_attr__('Lista de advogados do consultório', 'it9'),
        'supports'         => ['title', 'editor', 'revisions', 'excerpt', 'thumbnail'],
        'taxonomies'       => ['category'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 3,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'menu_icon'           => 'dashicons-businessperson',
        'rewrite'             => [
            'slug' => 'advogados',
        ],
    ]);
}
