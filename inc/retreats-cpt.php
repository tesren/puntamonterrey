<?php
add_action( 'init', 'retreats_register_post_type' );

function retreats_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Eventos' ,
        'name_admin_bar'     =>  'Evento' ,
        'add_new'            =>  'Agregar Evento' ,
        'add_new_item'       =>  'Agregar Evento' ,
        'new_item'           =>  'Nuevo Evento' ,
        'edit_item'          =>  'Editar Evento' ,
        'view_item'          =>  'Ver Evento' ,
        'update_item'        =>  'Actualizar Evento' ,
        'all_items'          =>  'Todos los Eventos' ,
        'search_items'       =>  'Buscar Eventos' ,
        'parent_item_colon'  =>  'Padre Evento' ,
        'not_found'          =>  'No se encontraron Eventos' ,
        'not_found_in_trash' =>  'No hay Eventos en la papelera' ,
        'name'               =>  'Eventos' ,
        'singular_name'      =>  'Evento' ,

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
        'menu_icon' => 'dashicons-calendar',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('retreat', $args);

}

add_action('init', 'retreats_register_post_type');

add_filter( 'rwmb_meta_boxes', 'retreats_register_meta_boxes' );

function retreats_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => 'Información del Evento' ,
        'post_types' => 'retreat',
        
        'fields'  => [
            [
                'name'       => 'Fecha de Inicio',
                'id'         => 'start_date',
                'type'       => 'date',
                'desc'       => 'Fecha de inicio del retiro',
                'required'   => true,
            ],
            [
                'name'       => 'Fecha de finalización',
                'id'         => 'end_date',
                'type'       => 'date',
                'desc'       => 'Fecha de finalización retiro',
                'required'   => true,
            ],
            [
                'type' =>   'text',
                'name' =>   'Sitio web',
                'id'   =>   'retreat_website',
                'desc' =>   'Sitio web del retiro',
            ],
            [
                'type' =>   'text',
                'name' =>   'Nombre del organizador',
                'id'   =>   'leader_name',
                'desc' =>   'Nombre completo del organizador',
            ],
            [
                'id'               => 'leader_image',
                'name'             => 'Foto del Organizador',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 1,
                'max_status'       => true,
                'image_size'       => 'thumbnail',
            ],
            [
                'id'               => 'retreat_gallery',
                'name'             => 'Galería de Fotos',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 20,
                'max_status'       => true,
                'image_size'       => 'thumbnail',
                'desc' =>   'Suba por lo menos 1 foto',
                'required'   => true,
            ],
            
        ],
    ];

    return $meta_boxes;
}