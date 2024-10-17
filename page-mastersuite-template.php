<?php 

    /*
    Template Name: Plantilla Master Suite
    */

    if(pll_current_language() == 'en'){
        $args = array(
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
        $args = array(
            'post_type' => 'alojamiento',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'master-suite-jaguar'
                )
            )
        );
    }

    $posts = get_posts( $args );

    $room_politics = get_posts([
        'post_type' => 'politics',
        'numberposts'=> 1,
    ]);

    $room_politics = $room_politics[0];

    get_header(); 
?>

    <article>
  

        <div class="position-relative">

            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="Master Suite Punta Monterrey" class="w-100" style="height:87vh; object-fit:cover;">

            <div class="fondo-oscuro"></div>

            <div class="row position-absolute top-0 start-0 h-100 justify-content-center z-3">
                <div class="col-12 col-lg-8 align-self-center text-center text-white">
                    <h1 class="fw-bold text-uppercase"><?php echo get_the_title(); ?></h1>
                    <hr class="col-10 col-lg-5 mx-auto">
                </div>
            </div>

        </div>

        <div class="position-relative py-5 mb-5" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp');">

            <div class="row justify-content-center position-relative z-1 my-5">

                <div class="col-10 col-lg-auto mb-3 text-center">
                    <div class="btn btn-outline-dark rounded-0 active px-5 py-3 w-100" style="box-shadow: 5px 5px 0 0 #ccc;">
                        <div class="fw-bold fs-5 text-uppercase"><?php echo get_the_title();?></div>
                        2 <?php pll_e('Personas');?>
                    </div>
                </div>

                <div class="col-10 col-lg-auto mb-3 text-center">
                    <a href="<?php echo get_the_permalink(pll_get_post(348));?>" class="btn btn-outline-dark rounded-0 px-5 py-3 w-100" style="box-shadow: 5px 5px 0 0 #ccc;">
                        <div class="fw-bold fs-5 text-uppercase"><?php echo get_the_title(pll_get_post(348));?></div>
                        2-4 <?php pll_e('Personas');?>
                    </a>
                </div>

                <div class="col-10 col-lg-auto mb-3 text-center">
                    <a href="<?php echo get_the_permalink(pll_get_post(216));?>" class="btn btn-outline-dark rounded-0 px-5 py-3 w-100" style="box-shadow: 5px 5px 0 0 #ccc;">
                        <div class="fw-bold fs-5 text-uppercase"><?php echo get_the_title(pll_get_post(216));?></div>
                        2-4 <?php pll_e('Personas');?>
                    </a>
                </div>

                <div class="col-10 col-lg-auto mb-3 text-center">
                    <a href="<?php echo get_the_permalink(pll_get_post(462)); ?>" class="btn btn-outline-dark rounded-0 px-5 py-3 w-100" style="box-shadow: 5px 5px 0 0 #ccc;">
                        <div class="fw-bold fs-5 text-uppercase"><?php echo get_the_title(pll_get_post(462));?></div>
                        2 <?php pll_e('Personas');?>
                    </a>
                </div>
            </div>

            <!-- Comentado por si regresa -->
            <!-- <div class="row justify-content-center position-relative z-1 my-5">
                <div class="col-11 col-lg-6 bg-white p-3 p-lg-5" style="box-shadow: 5px 5px 0 0 #ccc;">
                
                    <div class="pt-2 mb-4 text-center">
                        <?php pll_e('TARIFAS POR HABITACIÓN POR NOCHE EN');?> <br>
                        <?php echo get_the_title();?> <?php pll_e('DESDE');?>:
                    </div>

                    <table class="table table-borderless mb-5">
                        <tbody>
                            <tr>
                                <td class="col-6 col-lg-4"></td>
                                <td class="col-6 col-lg-8">2 <?php pll_e('Personas');?></td>
                            </tr>
                            <tr>
                                <td class="col-6 col-lg-4"><?php pll_e('Temporada alta');?></td>
                                <td class="col-6 col-lg-8 fw-bold text-decoration-underline">
                                    $<?php echo number_format(get_field('tarifa_temporada_alta'), 2); ?> <?php echo get_field('currency'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-6 col-lg-4"><?php pll_e('Temporada baja');?></td>
                                <td class="col-6 col-lg-8 fw-bold text-decoration-underline">
                                    $<?php echo number_format(get_field('tarifa_temporada_baja'), 2); ?> <?php echo get_field('currency'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-6 col-lg-4"><?php pll_e('Temporada alta');?></td>
                                <td class="col-6 col-lg-8">
                                    <?php pll_e('Enero, Febrero, Marzo, Abril, Mayo, Junio, Julio, Octubre, Noviembre, Diciembre');?>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-6 col-lg-4"><?php pll_e('Temporada baja');?></td>
                                <td class="col-6 col-lg-8">
                                    <?php pll_e('Agosto, Septiembre');?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="fs-6 fw-bold text-center">* <?php pll_e('Las bebidas del bar se venden aparte');?></div>
                    <div class="fs-6 fw-bold text-center">* <?php pll_e('Tarifas sujetas a cambio sin previo aviso, aplican restricciones.');?></div>

                </div>
            </div> -->

        </div>

        <?php if ( $posts ): ?>
                
            <?php $i=0; foreach( $posts as $post ): setup_postdata( $post ); ?>
                    
                <div class="row position-relative justify-content-center py-5 mb-5">

                    <img style="width:230px;" src="<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-small.webp" alt="" class="position-absolute top-0 start-0 mt-4 ms-4" loading="lazy">

                    <div class="col-12 col-lg-5 mb-3">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <?php $images = rwmb_meta('gallery', ['size'=>'large'], $post->ID); ?>
                                
                                <?php $i=0; foreach($images as $img): ?>
                                    <div class="carousel-item <?php if($i==0){echo 'active';} ?>">
                                        <img src="<?php echo $img['url']; ?>" class="d-block w-100" alt="<?php echo $img['title']; ?>" style="height:400px; object-fit:contain;" data-fancybox="gallery" loading="lazy">
                                    </div>
                                <?php $i++; endforeach; ?>
                                
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 align-self-center">
                        <h2 class="text-uppercase"><?php echo get_the_title($post->ID); ?></h2>
                        <div class="fw-bold mb-3"><?php pll_e('Camas');?>: <?php echo $post->bedrooms ?> | <?php pll_e('Personas');?>: <?php echo $post->people ?></div>
                        <p class="fs-6"><?php echo $post->description; ?></p>
                        <div class="fw-bold mb-4">* <?php pll_e('El agua de todas las habitaciones es purificada.');?></div>
                        <a href="<?= get_the_permalink( ); ?>" class="btn btn-outline-dark col-12 col-lg-6 rounded-0 border-2 fw-bold"><?php pll_e('Más Información');?></a>
                    </div>

                </div>

                <!-- Collapse -->
                <div class="text-center position-relative">
                    <button class="btn btn-outline-dark rounded-0 fw-superbold px-5 py-2 border border-2 border-dark z-1 position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <?php pll_e('DETALLES');?>
                    </button>
                    <hr class="w-75 mx-auto position-absolute top-50 m-0 border-bottom border-1 border-dark z-0" style="opacity:1; left:12.5%;">
                </div>
                
                
                <div class="collapse" id="collapseExample" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp');">
                    
                    <div class="row justify-content-center py-5">

                        <div class="col-11 col-lg-8 col-xl-6 px-0 bg-white" style="box-shadow: 8px 8px 0 0 #CCCCCC;">

                            <!-- Nav pills -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item border-end border-4 border-light position-relative w-50" role="presentation">
                                    <button class="nav-link active text-uppercase fw-normal py-4 rounded-0 w-100" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><?php pll_e('Comodidades');?></button>
                                </li>
                                <li class="nav-item position-relative w-50" role="presentation">
                                    <button class="m-0 nav-link text-uppercase fw-normal py-4 rounded-0 w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><?php pll_e('Políticas');?></button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <!-- Comodidades -->
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="row p-5 fs-5">
                                        <div class="col-12 col-lg-6">
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-1.png">
                                                <div>
                                                    <?php pll_e('Cama king size');?>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/jacuzzi-black.svg">
                                                <div>
                                                    Jacuzzi
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-2.png">
                                                <div>
                                                    <?php pll_e('Regadera interior y exterior');?>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-3.png">
                                                <div>
                                                    <?php pll_e('Aire acondicionado y ventilador');?>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="25px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/icon-11.png">
                                                <div>
                                                    <?php pll_e('Hamaca');?>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-5.png">
                                                <div>
                                                    <?php pll_e('La mejor vista del lugar')?>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-12 col-lg-6">                                               
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-7.png">
                                                <div>
                                                    <?php pll_e('Cocineta con frigobar y comedor')?>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-8.png">
                                                <div>
                                                    Pet Friendly
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/faq-icon-3.png">
                                                <div>
                                                    Eco Friendly
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="25px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-10.png">
                                                <div>
                                                    <?php pll_e('No hay señal telefónica en el hotel')?>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="25px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/est.png">
                                                <div>
                                                    <?php pll_e('Estacionamiento gratis')?>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-start align-items-center mb-4">
                                                <img width="20px" class="d-block me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-6.png">
                                                <div>
                                                    <?php pll_e('Amplio deck de madera techado')?>
                                                </div>
                                            </div>
                                                                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- Políticas -->
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <ul class="row p-5 fs-5">

                                        <?php $politics = rwmb_meta('politics', [], $room_politics->ID);?>
                                        <?php foreach($politics as $politic): ?>
                                            <li class="col-12 col-lg-6 mb-3 px-1 px-lg-3"><?php echo $politic; ?></li>
                                        <?php endforeach; ?>
                                        
                                    </ul>
                                </div>

                            </div>
                        </div>
                                    
                    </div>
                                   
                    <!-- Close button -->
                    <div class="text-center pb-5">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" class="btn-close fs-4" aria-label="Close"></button>
                    </div>

                </div>

                <div class="mb-6"></div>

            <?php $i++; endforeach; ?>

            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </article>

<?php get_footer(); ?>