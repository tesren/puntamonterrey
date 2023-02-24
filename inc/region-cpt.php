<?php
add_action( 'init', 'region_register_post_type' );

function region_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Regiones' ,
        'name_admin_bar'     =>  'Regiones' ,
        'add_new'            =>  'Agregar Región' ,
        'add_new_item'       =>  'Agregar Región' ,
        'new_item'           =>  'Nueva Región' ,
        'edit_item'          =>  'Editar Región' ,
        'view_item'          =>  'Ver Región' ,
        'update_item'        =>  'Actualizar Región' ,
        'all_items'          =>  'Todas las Regiones' ,
        'search_items'       =>  'Buscar Regiones' ,
        'parent_item_colon'  =>  'Padre Región' ,
        'not_found'          =>  'No se encontraron Regiones' ,
        'not_found_in_trash' =>  'No hay Regiones en la papelera' ,
        'name'               =>  'Región' ,
        'singular_name'      =>  'Región' ,

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
            'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-admin-home',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('region', $args);

}

add_action('init', 'region_register_post_type');


add_filter( 'rwmb_meta_boxes', 'listing_register_meta_boxes' );

function listing_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'      => 'Detalles',
        'post_types' => 'region',

        'fields' => [
            [
                'name'  => 'Precio',
                'desc'  => 'Precio de la Región',
                'id'    => 'price',
                'type'  => 'number',
                'required'=> true,
                'size' => 30,
            ],
            
             [
                'name'  => 'Recámaras',
                'desc'  => 'Solo numeros',
                'id'    => 'bedrooms',
                'type'  => 'number',
                'size' => 30,
            ],
            [
                'name'  => 'Baños',
                'desc'  => 'Solo números',
                'id'    => 'bathrooms',
                'type'  => 'number',
                'size' => 30,
            ],
            [
                'name'  => 'Medios Baños',
                'desc'  => 'Solo números',
                'id'    => 'half_baths',
                'type'  => 'number',
                'size' => 30,
            ],
            [
                'name'  => 'Estacionamiento',
                'desc'  => 'Especificar tipo de estacionamiento',
                'id'    => 'parking_stalls',
                'type'  => 'text',
                'size' => 30,
            ],
            [
                'name' => 'Mostrar en Página de inicio',
                'id'   => 'featured_listing',
                'type' => 'checkbox',
                'std'  => 0, // 0 or 1
            ],
            [
                'name'    => 'Amenidades',
                'id'      => 'amenities',
                'type'    => 'text',
                'placeholder'=> 'Escriba una Amenidad',
                'clone'=> true,
                'size' => 30,
            ],
            
            // More fields.
        ],
    ];


    // Add more field groups if you want
    $meta_boxes[] = [
        
        'title' => 'Galería',
        'post_types' => 'region',

        'fields' => [
            [
                'id'               => 'gallery',
                'name'             => 'Image upload',
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


     $meta_boxes[] = [
        
        'title' => 'Mapa de Google',
        'post_types' => 'region',

        'fields' => [
            // Map field.
            [
                'id'            => 'map',
                'name'          => 'Ubicación',
                'type'          => 'map',

                // Default location: 'latitude,longitude[,zoom]' (zoom is optional)
                'std'           => '20.6985662,-105.3090504,14',

                // Google API key
                'api_key'       => 'AIzaSyDlDmMESUjBK1gwNJm5x4hyoS90qacpJmY',
            ]
        ],
    ];
    // More fields..

    return $meta_boxes;
}