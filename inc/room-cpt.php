<?php
add_action( 'init', 'room_register_post_type' );

function room_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Alojamientos' ,
        'name_admin_bar'     =>  'Alojamientos' ,
        'add_new'            =>  'Agregar Alojamiento' ,
        'add_new_item'       =>  'Agregar Nuevo Alojamiento' ,
        'new_item'           =>  'Nueva Alojamiento' ,
        'edit_item'          =>  'Editar Alojamiento' ,
        'view_item'          =>  'Ver Alojamiento' ,
        'update_item'        =>  'Actualizar Alojamiento' ,
        'all_items'          =>  'Todas las Alojamientos' ,
        'search_items'       =>  'Buscar Alojamientos' ,
        'parent_item_colon'  =>  'Padre Alojamiento' ,
        'not_found'          =>  'No se encontraron Alojamientos' ,
        'not_found_in_trash' =>  'No hay Alojamientos en la papelera' ,
        'name'               =>  'Alojamientos' ,
        'singular_name'      =>  'Alojamiento' ,

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
            'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-admin-home',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('alojamiento', $args);

}

add_action('init', 'room_register_post_type');


function punta_rooms_custom_taxonomies(){

    //add new taxonomi heirarchical
    $labels = array(
        'name' => 'Tipo de Alojamiento', //Puede ser master suite, jungle suites, luxury cabins etc
        'singular_name' => 'Tipo de Alojamiento',
        'search_items' => 'Buscar Tipos',
        'all_items' => 'Todos los tipos',
        'parent_item' => 'Tipo padre', 
        'parent_item_colon' => 'Tipo padre:',
        'edit_item' => 'Editar Tipo',
        'update_item' => 'Editar tipo',
        'add_new_item' => 'Agregar nuevo tipo', 
        'new_item_name' => 'Nuevo Tipo de propiedad',
        'manu_name' => 'Tipo de Alojamiento'
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_in_menu' => true,
        'show_ui' => true,
        'show_admin_column' => true, //muestra u oculta la columna en vista admon para filtrar
        'query_var' => true,
        'rewrite' => array('slug' => 'tipo') //Este parametro saldra en la URL
    );

    register_taxonomy('tipo', array('alojamiento'), $args );

}

add_action('init', 'punta_rooms_custom_taxonomies');


add_filter( 'rwmb_meta_boxes', 'punta_rooms_register_meta_boxes' );

function punta_rooms_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'      => 'Detalles',
        'post_types' => 'alojamiento',

        'fields' => [
            [
                'name'  => 'Descripción',
                'desc'  => 'Descripción del Alojamiento',
                'id'    => 'description',
                'type'  => 'textarea',
                'required' => true,
            ],
            [
                'name'  => 'Personas',
                'desc'  => 'Personas admitidas en el alojamiento',
                'id'    => 'people',
                'type'  => 'number',
                'required'=> true,
                'size' => 30,
            ],
            [
                'name'  => 'Precio temporada BAJA',
                'desc'  => 'Precio por noche en temporada baja',
                'id'    => 'price_low',
                'type'  => 'number',
                'required'=> true,
                'size' => 30,
            ],
            [
                'name'  => 'Precio temporada ALTA',
                'desc'  => 'Precio por noche en temporada alta',
                'id'    => 'price_high',
                'type'  => 'number',
                'required'=> true,
                'size' => 30,
            ],
            [
                'name'            => 'Tipo de Moneda',
                'id'              => 'currency',
                'type'            => 'select',
                // Array of 'value' => 'Label' pairs
                'options'         => array(
                    'USD'       => 'USD',
                    'MXN'       => 'MXN',
                ),
                // Allow to select multiple value?
                'multiple'        => false,
                // Placeholder text
                'placeholder'     => 'Seccione el tipo de moneda para los precios',
                // Display "Select All / None" button?
                'select_all_none' => false,
            ],
            [
                    'name'       => 'Tipo propiedad',
                    'id'         => 'taxonomy_type',
                    'type'       => 'taxonomy',

                    // Taxonomy slug.
                    'taxonomy'   => 'tipo',
                    'required' => true,

                    // How to show taxonomy.
                    'field_type' => 'radio_list',
            ],
            [
                'name'  => 'Camas',
                'desc'  => 'Numero de camas en el alojamiento',
                'id'    => 'bedrooms',
                'type'  => 'number',
                'size' => 30,
            ],
            /* [
                'name'    => 'Políticas',
                'id'      => 'politics',
                'type'    => 'text',
                'placeholder'=> 'Escriba una Amenidad',
                'clone'=> true,
                'size' => 30,
            ], */
            
            // More fields.
        ],
    ];


    // Add more field groups if you want
    $meta_boxes[] = [
        
        'title' => 'Galería',
        'post_types' => 'alojamiento',

        'fields' => [
            [
                'id'               => 'gallery',
                'name'             => 'Imágenes del alojamiento',
                'type'             => 'image_advanced',

                // Delete file from Media Library when remove it from post meta?
                // Note: it might affect other posts if you use same file for multiple posts
                'force_delete'     => false,

                // Maximum file uploads.
                'max_file_uploads' => 40,

                // Do not show how many files uploaded/remaining.
                'max_status'       => 'false',

                // Image size that displays in the edit page.
                'image_size'       => 'thumbnail',
            ],
        ]
    ];


    return $meta_boxes;
}