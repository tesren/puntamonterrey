<?php 
    if(pll_current_language() == 'en'){
        $args_ecocabins = array(
            'post_type' => 'alojamiento',
            'numberposts' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'eco-cabins'
                )
            ),
        );
        $args_jungle = array(
            'post_type' => 'alojamiento',
            'numberposts' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'jungle-suites'
                )
            ),
        );
        $args_luxury = array(
            'post_type' => 'alojamiento',
            'numberposts' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'luxury-cabins'
                )
            ),
        );
        $args_master = array(
            'post_type' => 'alojamiento',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'master-suites'
                )
            )
        );
    }
    else{
        $args_ecocabins = array(
            'post_type' => 'alojamiento',
            'numberposts' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'cabanas-ecologicas'
                )
            ),
        );
        $args_jungle = array(
            'post_type' => 'alojamiento',
            'numberposts' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'suites-de-la-selva'
                )
            ),
        );
        $args_luxury = array(
            'post_type' => 'alojamiento',
            'numberposts' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'cabanas-de-lujo'
                )
            ),
        );
        $args_master = array(
            'post_type' => 'alojamiento',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'master-suite'
                )
            )
        );
    }

    $eco_cabins = get_posts( $args_ecocabins );
    $jungle_suites = get_posts( $args_jungle );
    $luxury_cabins = get_posts( $args_luxury );
    $master_suites = get_posts( $args_master );

    $rooms = array_merge($master_suites, $eco_cabins, $jungle_suites, $luxury_cabins);

    get_header();
?>

<div id="frontCarousel" class="carousel slide position-relative" data-bs-ride="carousel">

    <div class="carousel-inner z-1">
        <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/home-1.webp" class="d-block w-100" alt="Punta Monterrey vista" style="height:86vh; object-fit:cover;">
        </div>
        <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/home-2.webp" class="d-block w-100" alt="Punta Monterrey vista Alberca" style="height:86vh; object-fit:cover;" loading="lazy">
        </div>
        <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/home-3.webp" class="d-block w-100" alt="Punta Monterrey Recámara" style="height:86vh; object-fit:cover;" loading="lazy">
        </div>
    </div>

    <button class="carousel-control-prev z-3" type="button" data-bs-target="#frontCarousel" data-bs-slide="prev" style="width:9%;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next z-3" type="button" data-bs-target="#frontCarousel" data-bs-slide="next"style="width:9%;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    
    <div class="fondo-oscuro"></div>

    <div class="row justify-content-evenly position-absolute top-0 start-0 h-100 z-2">

        <div class="col-12 col-lg-5 align-self-center">
            <h1 class="fs-0 text-white le-10 fw-normal"><?php pll_e('DESCONECTARTE DE TODO, PARA CONECTAR CON LO QUE REALMENTE IMPORTA.');?></h1>
        </div>

        <div class="col-12 col-lg-4"></div>
        
    </div>

</div>


<!-- PET & ECO FRIENDLY -->
<div class="position-relative mb-5">

    <img src="<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp" alt="" class="w-100 z-1" loading="lazy" style="padding-bottom:200px;">

    <div class="row justify-content-center position-absolute z-2 top-0 start-0 h-100">

        <div class="col-5 col-lg-2 align-self-center text-center">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/pet-circle.webp" alt="Punta Monterrey Pet Friendly" class="w-100 mb-3" loading="lazy">
            <a href="<?php echo get_the_permalink( pll_get_post(514) );?>" class="link-dark fw-bold"><?php pll_e('VER MÁS');?></a>
        </div>
        <div class="col-1 fs-1 align-self-center text-center">&</div>
        <div class="col-5 col-lg-2 align-self-center text-center">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/eco-circle.webp" alt="Punta Monterrey Eco Friendly" class="w-100 mb-3" loading="lazy">
            <a href="<?php echo get_the_permalink( pll_get_post(511) );?>" class="link-dark fw-bold"><?php pll_e('VER MÁS');?></a>
        </div>

    </div>

</div>

<!-- Habitaciones -->
<h2 class="text-center fw-superbold le-10 mb-3"><?php pll_e('NUESTRAS HABITACIONES');?></h2>
<p class="col-11 col-lg-5 mx-auto text-center fw-bold fs-5 mb-5"><?php pll_e('NUESTRAS HABITACIONES ESTÁN DISEÑADAS EN FUNCIÓN DE LA COMODIDAD Y LA ARMONÍA CON NATURALEZA, SON PERFECTAS PARA RELAJARSE Y DISFRUTAR UNA VACACIÓN TROPICAL.');?></p>

<?php $i==1; foreach($rooms as $room):?>
    <div class="row position-relative justify-content-evenly py-5 mb-5">

        <img style="width:230px;" src="<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-small.webp" alt="" class="position-absolute top-0 mt-4 <?php if($i%2==0){echo'end-0 me-4';}else{echo'start-0 ms-4';} ?>" loading="lazy">

        <div class="col-12 col-lg-5 mb-3 <?php if($i%2==0){echo'order-1 order-lg-2';} ?>">
            <div id="carousel-cabin-<?php echo $room->ID; ?>" class="carousel slide">
                <div class="carousel-inner">
                    <?php $images = rwmb_meta('gallery', ['size'=>'large'], $room->ID); ?>
                    
                    <?php $j=0; foreach($images as $img): ?>
                        <div class="carousel-item <?php if($j==0){echo 'active';} ?>">
                            <img src="<?php echo $img['url']; ?>" class="d-block w-100" alt="<?php echo $img['title']; ?>" style="height:400px; object-fit:cover;" loading="lazy">
                        </div>
                    <?php $j++; endforeach; ?>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-cabin-<?php echo $room->ID; ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-cabin-<?php echo $room->ID; ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-12 col-lg-5 text-center align-self-center <?php if($i%2==0){echo'order-2 order-lg-1';} ?>">
            <?php $term = rwmb_meta('taxonomy_type', [], $room->ID);?>

            <h2 class="text-uppercase"><?php echo get_the_title($room->ID); ?></h2>
            <div class="fw-bold mb-3"><?php pll_e('Camas');?>: <?php echo $room->bedrooms ?> | <?php pll_e('Personas');?>: <?php echo $room->people ?></div>
            <p class="fs-5 mb-4"><?php echo $room->description; ?></p>

            <?php if($term->slug == 'cabanas-ecologicas' or $term->slug == 'eco-cabins'):?>

                <a href="<?php echo get_the_permalink(pll_get_post(462));?>" class="btn btn-outline-dark rounded-0 text-uppercase fw-bold border border-2 border-dark"><?php pll_e('Visitar');?> <?php echo $term->name; ?></a>

            <?php elseif($term->slug == 'suites-de-la-selva' or $term->slug == 'jungle-suites'):?>

                <a href="<?php echo get_the_permalink(pll_get_post(348));?>" class="btn btn-outline-dark rounded-0 text-uppercase fw-bold border border-2 border-dark"><?php pll_e('Visitar');?> <?php echo $term->name; ?></a>

            <?php elseif($term->slug == 'cabanas-de-lujo' or $term->slug == 'luxury-cabins'):?>

                <a href="<?php echo get_the_permalink(pll_get_post(216));?>" class="btn btn-outline-dark rounded-0 text-uppercase fw-bold border border-2 border-dark"><?php pll_e('Visitar');?> <?php echo $term->name; ?></a>

            <?php elseif($term->slug == 'master-suite' or $term->slug == 'master-suites'):?>

                <a href="<?php echo get_the_permalink(pll_get_post(207));?>" class="btn btn-outline-dark rounded-0 text-uppercase fw-bold border border-2 border-dark"><?php pll_e('Visitar');?> <?php echo $term->name; ?></a>

            <?php endif;?>

        </div>

    </div>
<?php $i++; endforeach; ?>


<!-- Eventos Privados -->
<div class="bg-light py-5 text-center">
    <h3 class="fw-superbold fs-2 my-5 le-10"><?php pll_e('EVENTOS PRIVADOS');?></h3>
    <p class="fw-bold fs-5 col-11 col-lg-5 mx-auto"><?php pll_e('SI ESTÁS BUSCANDO LA LOCACIÓN PERFECTA PARA ESA REUNIÓN ESPECIAL, ¡YA LA ENCONTRASTE! TE OFRECEMOS LA PRIVACIDAD DE NUESTRA PROPIEDAD Y APOYO PARA LO QUE NECESITES.');?></p>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 mb-3">
                <a href="<?php echo get_the_permalink( pll_get_post(58) );?>" class="text-decoration-none link-light">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/bodas.webp" alt="Bodas y eventos" class="w-100 z-0" loading="lazy">
                        <div class="fondo-oscuro-animated"></div>
                        <div class="row position-absolute start-0 top-0 h-100">
                            <div class="col-12 align-self-center text-white">
                                <img class="z-3 position-relative" width="50px" src="<?php echo get_template_directory_uri();?>/assets/icons/weddings-icon.webp" alt="" loading="lazy">
                                <h3 class="fs-4 fw-normal mt-3 z-3 position-relative"><?php echo get_the_title(pll_get_post(58));?></h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-lg-4 mb-3">
                <a href="<?php echo get_the_permalink( pll_get_post(82) );?>" class="text-decoration-none link-light">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/yoga.webp" alt="Yoga" class="w-100 z-0" loading="lazy">
                        <div class="fondo-oscuro-animated"></div>
                        <div class="row position-absolute start-0 top-0 h-100">
                            <div class="col-12 align-self-center text-white">
                                <img class="z-3 position-relative" width="50px" src="<?php echo get_template_directory_uri();?>/assets/icons/yoga-icon.webp" alt="" loading="lazy">
                                <h3 class="fs-4 fw-normal mt-3 z-3 position-relative"><?php echo get_the_title(pll_get_post(82));?></h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-lg-4 mb-3">
                <a href="<?php echo get_the_permalink( pll_get_post(142) );?>" class="text-decoration-none link-light">
                    <div class="position-relative">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cocina.webp" alt="Celebraciones" class="w-100 z-0" loading="lazy">
                        <div class="fondo-oscuro-animated"></div>
                        <div class="row position-absolute start-0 top-0 h-100">
                            <div class="col-12 align-self-center text-white">
                                <img class="z-3 position-relative" width="50px" src="<?php echo get_template_directory_uri();?>/assets/icons/celebrations-icon.webp" alt="" loading="lazy">
                                <h3 class="fs-4 fw-normal mt-3 z-3 position-relative"><?php pll_e('CELEBRACIONES');?></h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>

<!-- Testimonios y clima -->
<div class="position-relative" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp'); padding:80px 0;">
    <div class="container bg-white p-4">
        <div class="text-center">
            <h4 class="le-5 fw-superbold fs-2 my-5"><?php pll_e('TESTIMONIOS');?></h4>
            <div class="mb-4 fs-5 fw-normal col-11 col-lg-6 mx-auto"><?php pll_e('NUESTRA MEJOR PUBLICIDAD LA HACEN USTEDES,¡SUEÑOS QUE SE HACEN REALIDAD!');?></div>
            <div class="w-100 position-relative">
                <?php echo do_shortcode('[trustindex no-registration=tripadvisor]'); ?>
            </div>

        </div>

        
        
        <!-- Clima -->
        <div class="row justify-content-center mt-5">
            <div class="col-12">

            <?php if($lg == 'es'): ?>
                <a class="weatherwidget-io" href="https://forecast7.com/es/20d90n105d41/san-francisco/" data-label_1="San Pancho" data-label_2="CLIMA" data-theme="original" >San Pancho CLIMA</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            <?php else: ?>
                <a class="weatherwidget-io" href="https://forecast7.com/en/20d90n105d41/san-francisco/?unit=us" data-label_1="San Pancho" data-label_2="WEATHER" data-theme="original" >San Pancho WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            <?php endif; ?>

            </div>
        </div>
    
    </div>
</div>

<!-- Mapa -->
<div class="bg-black pb-1">
    <iframe title="Mapa de Google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.3929581366665!2d-105.38917408473944!3d20.936728796288907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41b203849aefa439!2sPunta%20Monterrey%20Tropical%20Beach%20Resort!5e0!3m2!1ses-419!2smx!4v1675359887863!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>