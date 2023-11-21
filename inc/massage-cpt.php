<?php
add_action( 'init', 'massage_register_post_type' );

function massage_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Masajes' ,
        'name_admin_bar'     =>  'Masaje' ,
        'add_new'            =>  'Agregar Masaje' ,
        'add_new_item'       =>  'Agregar Masaje' ,
        'new_item'           =>  'Nuevo Masaje' ,
        'edit_item'          =>  'Editar Masaje' ,
        'view_item'          =>  'Ver Masaje' ,
        'update_item'        =>  'Actualizar Masaje' ,
        'all_items'          =>  'Todos los Masajes' ,
        'search_items'       =>  'Buscar Masajes' ,
        'parent_item_colon'  =>  'Padre Masaje' ,
        'not_found'          =>  'No se encontraron Masajes' ,
        'not_found_in_trash' =>  'No hay Masajes en la papelera' ,
        'name'               =>  'Masajes' ,
        'singular_name'      =>  'Masaje' ,

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' =>  true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            //'excerpt',
            //'thumbnail',
            'revisions',
        ),
        'menu_icon' => 'dashicons-universal-access',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('massage', $args);

}

add_action('init', 'massage_register_post_type');

add_filter( 'rwmb_meta_boxes', 'massage_register_meta_boxes' );

function massage_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => 'Información del Masaje' ,
        'post_types' => 'massage',
        
        'fields'  => [
            [
                'id'               => 'gallery',
                'name'             => 'Imágenes',
                'desc'             => 'Imágenes generales del masaje',
                'type'             => 'image_advanced',

                // Delete file from Media Library when remove it from post meta?
                // Note: it might affect other posts if you use same file for multiple posts
                'force_delete'     => false,

                // Maximum file uploads.
                'max_file_uploads' => 20,

                // Do not show how many files uploaded/remaining.
                'max_status'       => 'false',

                // Image size that displays in the edit page.
                'image_size'       => 'thumbnail',
            ],
        ],
    ];

    return $meta_boxes;
}