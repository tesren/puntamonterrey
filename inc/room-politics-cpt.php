<?php
add_action( 'init', 'room_politics_register_post_type' );

function room_politics_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Políticas' ,
        'name_admin_bar'     =>  'Políticas' ,
        'add_new'            =>  'Agregar Política' ,
        'add_new_item'       =>  'Agregar Nuevo Política' ,
        'new_item'           =>  'Nueva Política' ,
        'edit_item'          =>  'Editar Política' ,
        'view_item'          =>  'Ver Política' ,
        'update_item'        =>  'Actualizar Política' ,
        'all_items'          =>  'Todas las Políticas' ,
        'search_items'       =>  'Buscar Políticas' ,
        'parent_item_colon'  =>  'Padre Política' ,
        'not_found'          =>  'No se encontraron Políticas' ,
        'not_found_in_trash' =>  'No hay Políticas en la papelera' ,
        'name'               =>  'Políticas' ,
        'singular_name'      =>  'Política' ,

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'publicly_queryable' =>  true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            //'editor',
            //'excerpt',
            //'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-book',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('politics', $args);

}

add_action('init', 'room_politics_register_post_type');



add_filter( 'rwmb_meta_boxes', 'room_politics_register_meta_boxes' );

function room_politics_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'      => 'Detalles',
        'post_types' => 'politics',

        'fields' => [
            
            [
                'name'    => 'Políticas',
                'id'      => 'politics',
                'type'    => 'text',
                'placeholder'=> 'Escriba una Política por campo',
                'clone'=> true,
                'size' => 30,
            ],
            
            // More fields.
        ],
    ];

    return $meta_boxes;
}