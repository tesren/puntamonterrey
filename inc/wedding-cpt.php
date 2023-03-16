<?php
add_action( 'init', 'weddings_register_post_type' );

function weddings_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Bodas' ,
        'name_admin_bar'     =>  'Bodas' ,
        'add_new'            =>  'Agregar Boda' ,
        'add_new_item'       =>  'Agregar Nueva Boda' ,
        'new_item'           =>  'Nueva Boda' ,
        'edit_item'          =>  'Editar Boda' ,
        'view_item'          =>  'Ver Boda' ,
        'update_item'        =>  'Actualizar Boda' ,
        'all_items'          =>  'Todas las Bodas' ,
        'search_items'       =>  'Buscar Bodas' ,
        'parent_item_colon'  =>  'Padre Boda' ,
        'not_found'          =>  'No se encontraron Bodas' ,
        'not_found_in_trash' =>  'No hay Bodas en la papelera' ,
        'name'               =>  'Bodas' ,
        'singular_name'      =>  'Boda' ,

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
            //'editor',
            //'excerpt',
            //'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-calendar-alt',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('wedding', $args);

}

add_action('init', 'weddings_register_post_type');



add_filter( 'rwmb_meta_boxes', 'punta_weddings_register_meta_boxes' );

function punta_weddings_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'      => 'Detalles',
        'post_types' => 'wedding',

        'fields' => [
            
            [
                'name'       => 'Fecha',
                'id'         => 'wed_date',
                'type'       => 'date',
                'js_options' => [
                    'dateFormat'      => 'dd-M-yy',
                    'showButtonPanel' => false,
                ],
                'inline'    => false,
                'timestamp' => false,
                'size'      => 35,
                'required'  => true,
            ],
            [
                'name'    => 'Estado',
                'id'      => 'status',
                'type'    => 'radio',
                'inline'  => true,
                'options' => [
                    'Disponible' => 'Disponible',
                    'Apartada' => 'Apartada',
                ],
                'required'  => true,
            ],
            [
                'name'        => 'Reservado por',
                'id'          => 'booked_by',
                'desc'        => 'Nombre del que hizo la reservación',
                'type'        => 'text',
                'placeholder' => 'Nombre(s)',
                'size'      => 35,
            ],
            
            
        ],
    ];



    return $meta_boxes;
}