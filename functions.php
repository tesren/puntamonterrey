<?php
/**
 * Punta Monterrey functions and definitions
 */


if ( ! function_exists( 'puntamont_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 */
	function puntamont_theme_support() {

		// Add support 
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-header' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'puntamont_theme_support' );


//ENABLE CUSTOM MENU

function puntamont_menus()
{    
    $locations = array(
        'primary' => __( 'Primary Menu', 'PuntaMonterrey' ),
		'footer' => "Footer menu Items",
    );
    
    register_nav_menus( $locations );
}

add_action('init', 'puntamont_menus');


if ( ! function_exists( 'puntamont_theme_styles' ) ) :

	/*
	* Enqueue styles.
	*/

	function puntamont_theme_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'puntamonterrey-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'puntamonterrey-style' );
    	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
    	//wp_enqueue_style( 'splide-css', get_template_directory_uri() .'/assets/css/splide.min.css' );
    	wp_enqueue_style( 'puntamont-css', get_template_directory_uri() .'/assets/css/puntamont_style.css' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'puntamont_theme_styles' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Punta Monterrey Custom Post Types
*/

require get_template_directory().'/inc/room-cpt.php';
require get_template_directory().'/inc/messages-cpt.php';


/**
 * Punta Monterrey Custom Functions
*/
function get_list_terms($postID, $taxonomy){
	$terms_list = array_reverse(wp_get_post_terms( $postID, $taxonomy ) );

	$j =1;
	if ( ! empty( $terms_list ) && ! is_wp_error( $terms_list ) ) {
		foreach ( $terms_list as $term ) {
			echo $term->name;
			if( $j < count($terms_list) ){
				echo ', ';
			}
			$j++;
		}
	}
}

function get_property_type($postID, $taxonomy){
        
	$terms_list = array_reverse(wp_get_post_terms( $postID, $taxonomy ) );

	if ( ! empty( $terms_list ) && ! is_wp_error( $terms_list ) ) {
		foreach ( $terms_list as $term ) {
			echo $term->name;
		}
	}
}


// Traducciones de strings
function gyw_set_strings_transtaltion(){
        
	$strings = array(
		array(
			'name'     =>'book_now',
			'string'   =>'Reserva ya',
			'group'    =>'Footer',
			'multiline'=>false,
		),
		array(
			'name'     =>'select_dates',
			'string'   =>'Selecciona las fechas',
			'group'    =>'Footer',
			'multiline'=>false,
		),
		array(
			'name'     =>'check_in',
			'string'   =>'Llegada',
			'group'    =>'Footer',
			'multiline'=>false,
		),
		array(
			'name'     =>'check_out',
			'string'   =>'Salida',
			'group'    =>'Footer',
			'multiline'=>false,
		),
		array(
			'name'     =>'book',
			'string'   =>'Reservar',
			'group'    =>'Footer',
			'multiline'=>false,
		),
		array(
			'name'     =>'fed_road',
			'string'   =>'Carretera Intl.',
			'group'    =>'Footer',
			'multiline'=>false,
		),
		array(
			'name'     =>'follow_us',
			'string'   =>'Síguenos en',
			'group'    =>'Footer',
			'multiline'=>false,
		),
		array(
			'name'     =>'front_page_title',
			'string'   =>'DESCONECTARTE DE TODO, PARA CONECTAR CON LO QUE REALMENTE IMPORTA.',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'view_more',
			'string'   =>'VER MÁS',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'our_rooms',
			'string'   =>'NUESTRAS HABITACIONES',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'our_rooms_desc',
			'string'   =>'NUESTRAS HABITACIONES ESTÁN DISEÑADAS EN FUNCIÓN DE LA COMODIDAD Y LA ARMONÍA CON NATURALEZA, SON PERFECTAS PARA RELAJARSE Y DISFRUTAR UNA VACACIÓN TROPICAL.',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'beds',
			'string'   =>'Camas',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'people',
			'string'   =>'Personas',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'visit',
			'string'   =>'Visitar',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'private_events',
			'string'   =>'EVENTOS PRIVADOS',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'private_events_desc',
			'string'   =>'SI ESTÁS BUSCANDO LA LOCACIÓN PERFECTA PARA ESA REUNIÓN ESPECIAL, ¡YA LA ENCONTRASTE! TE OFRECEMOS LA PRIVACIDAD DE NUESTRA PROPIEDAD Y APOYO PARA LO QUE NECESITES.',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'celebrations',
			'string'   =>'CELEBRACIONES',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'testimonials',
			'string'   =>'TESTIMONIOS',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'testimonials_desc',
			'string'   =>'NUESTRA MEJOR PUBLICIDAD LA HACEN USTEDES,¡SUEÑOS QUE SE HACEN REALIDAD!',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'meta_description',
			'string'   =>'Punta Monterrey Tropical Beach Resort es un hotel dentro de una reserva ecológica de más de 300 acres de selva con 16 habitaciones de arquitectura bioclimática y capacidad para 48 personas. Se especializan en grupos pequeños que quieren conectar con la naturaleza y ofrecen atención personalizada para eventos privados, retiros de yoga, bodas y servicios de spa. Además, el resort se preocupa por mantener la belleza natural que lo rodea, permitiendo a los huéspedes disfrutar de la privacidad y de increíbles puestas de sol, sabores del mar y la compañía de sus mascotas.',
			'group'    =>'Front Page',
			'multiline'=>false,
		),
		array(
			'name'     =>'bar_title',
			'string'   =>'"Para las penas, las copas llenas"',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'get_in_touch',
			'string'   =>'PÓNTE EN CONTACTO',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'amenities_weddings',
			'string'   =>'AMENIDADES PARA BODAS',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'amenities_desc',
			'string'   =>'Punta Monterrey cuenta con una cartera de proveedores para los siguientes servicios.',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'catering_service',
			'string'   =>'SERVICIO DE CATERING',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'waiters',
			'string'   =>'MESEROS',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'chefs_and_cooks',
			'string'   =>'CHEF & COCINEROS',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'tea_and_coffee',
			'string'   =>'TÉ & CAFÉ',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'lights_and_music',
			'string'   =>'LUZ Y SONIDO',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'dancing_floor',
			'string'   =>'PISTA DE BAILE',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'stuff',
			'string'   =>'MOBILIARIO',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'taxi_service',
			'string'   =>'SERVICIO DE TAXI',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'decoration',
			'string'   =>'DECORACIÓN',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'wine_and_liquor',
			'string'   =>'VINOS & LICORES',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'cakes',
			'string'   =>'REPOSTERÍA',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'contact_providers',
			'string'   =>'Te contactamos con los mejores proveedores de la region.',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'available_activities',
			'string'   =>'ACTIVIDADES DISPONIBLES',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'mud_beach_hike',
			'string'   =>'Caminata a la playa del barro',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'hike_to_natural_pools',
			'string'   =>'Caminata a las tinajas (albercas de piedra natural)',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'flowers_hike',
			'string'   =>'Caminata al orquideario',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'sport_fishing',
			'string'   =>'Pesca deportiva de playa',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'sea_fishing',
			'string'   =>'Pesca deportiva en mar abierto',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'kayak_tour',
			'string'   =>'Paseo en Kayak y SUP',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'hunger_love',
			'string'   =>'"EL AMOR PUEDE ESPERAR, EL HAMBRE NO"',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'the_kitchen',
			'string'   =>'LA COCINA',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'gallery_caps',
			'string'   =>'GALERÍA',
			'group'    =>'Services',
			'multiline'=>false,
		),
		array(
			'name'     =>'rates',
			'string'   =>'Tarifas',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'rates_night',
			'string'   =>'TARIFAS POR HABITACIÓN POR NOCHE EN',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'from',
			'string'   =>'desde',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'high_season',
			'string'   =>'Temporada alta',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'low_season',
			'string'   =>'Temporada baja',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'high_months',
			'string'   =>'Enero, Febrero, Marzo, Abril, Mayo, Junio, Julio, Octubre, Noviembre, Diciembre',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'low_months',
			'string'   =>'Agosto, Septiembre',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'includes_meals',
			'string'   =>'Incluye hospedaje y 3 comidas al día, ¡Dejate sorprender por el cheff!',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'drinsk_sold_separetly',
			'string'   =>'Las bebidas del bar se venden aparte',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'rates_may_change',
			'string'   =>'Tarifas sujetas a cambio sin previo aviso, aplican restricciones',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'purified_water',
			'string'   =>'El agua de todas las habitaciones es purificada.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'details',
			'string'   =>'DETALLES',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'room_amenities',
			'string'   =>'Comodidades',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'politics',
			'string'   =>'Políticas',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'big_bathroom',
			'string'   =>'Baño espacioso con vestidor.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'private_balcony',
			'string'   =>'Terraza privada.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'ceiling_fan',
			'string'   =>'Ventilador de techo.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'ocean_view',
			'string'   =>'Vista al mar y a la selva.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'3_meals_day',
			'string'   =>'Incluye 3 comidas al día.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'free_parking',
			'string'   =>'Estacionamiento gratis',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'wifi_disclaimer',
			'string'   =>'(Cuando el cupo está lleno y los huéspedes usan el internet al mismo tiempo, el sistema colapsa. Si sólo se usa para mensajes de WhatsApp y correos electrónicos la señal es suficiente)',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'checkin_time',
			'string'   =>'Registrarse a la 2 pm.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'checkout_time',
			'string'   =>'Salida 12 pm.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'max_2_people_room',
			'string'   =>'Máximo 2 personas en la habitación.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'dont_feed_pets_room',
			'string'   =>'Está prohibido alimentar a las mascotas en la habitación.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'admin_right',
			'string'   =>'Nos reservamos el derecho de admisión.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'cancelation_rules',
			'string'   =>'Se aplican políticas de cancelación',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'no_noise',
			'string'   =>'Está prohibido hacer ruido en las habitaciones después de las 22:00 horas.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
		array(
			'name'     =>'vegan_menu',
			'string'   =>'Tenemos un menú vegetariano, por favor avísanos al hacer la reserva.',
			'group'    =>'Rooms',
			'multiline'=>false,
		),
	);
}