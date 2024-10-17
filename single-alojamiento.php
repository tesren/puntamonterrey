<?php 
    $room_politics = get_posts([
        'post_type' => 'politics',
        'numberposts'=> 1,
    ]);
    $room_politics = $room_politics[0];
?>

<?php get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();?>
        <?php $images = rwmb_meta('gallery', ['limit'=>25, 'size'=>'large']); ?>
                       
        <div class="container mt-5">

            <div class="d-flex justify-content-start mb-3">
                <h1 class="fs-1 text-uppercase fw-light mb-0"><?php echo get_the_title();?></h1>

                <button onclick="share('<?= get_the_title() ?>', '<?= rwmb_meta('description')?>', '<?= get_the_permalink() ?>')" class="btn p-0 align-self-center d-inline d-lg-none darkblue-text fs-5 ms-3 me-1">
                    <img width="20px" src="<?= get_template_directory_uri()?>/assets/icons/share-nodes-solid.svg" alt="Compartir">
                </button>
            </div>


            <div class="row mb-5">

                <div class="col-12 col-lg-8 p-1">
                    <img src="<?php echo $images[0]['url']; ?>" alt="<?php echo get_the_title();?>" class="w-100" style="height:65vh; object-fit:cover;" data-fancybox="gallery">
                </div>

                <div class="col-12 col-lg-4 px-0">

                    <div class="row">
                        <div class="col-6 col-lg-12 p-1">
                            <img src="<?php echo $images[1]['url']; ?>" alt="<?php echo get_the_title();?>" class="w-100" style="height:21vh; object-fit:cover;" data-fancybox="gallery">
                        </div>

                        <div class="col-6 col-lg-12 p-1 d-none d-lg-block">
                            <img src="<?php echo $images[2]['url']; ?>" alt="<?php echo get_the_title();?>" class="w-100" style="height:21vh; object-fit:cover;" data-fancybox="gallery">
                        </div>

                        <div class="col-6 col-lg-12 p-1">
                            <div class="position-relative">
                                <img src="<?php echo $images[3]['url']; ?>" alt="<?php echo get_the_title();?>" class="w-100" style="height:21vh; object-fit:cover;" data-fancybox="gallery">
                                <div class="fondo-oscuro"></div>
                                <div class="fondo-oscuro"></div>

                                <div class="row position-absolute top-0 start-0 h-100 z-2">
                                    <div class="col-12 align-self-center text-center">
                                        <a href="#gallery-1" class="link-light text-decoration-none fw-bold"><?php pll_e('VER TODAS LAS FOTOS'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <?php for($i=4; $i<count($images); $i++): ?>
                    <img src="<?php echo $images[$i]['url']; ?>" alt="<?php echo get_the_title();?>" class="d-none" data-fancybox="gallery">
                <?php endfor; ?>

            </div>

            <div class="mb-5">
                <h2><?php pll_e('Descripción'); ?></h2>
                <p class="text-secondary fs-5"><?= rwmb_meta('description')?></p>
            </div>

            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="fs-5"><?php pll_e('Huéspedes'); ?></div>
                    <div class="fs-2"><?= rwmb_meta('people') ?></div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="fs-5"><?php pll_e('Camas'); ?></div>
                    <div class="fs-2"><?= rwmb_meta('bedrooms') ?></div>
                </div>

                <!-- <div class="col-12 col-lg-5">
                    <div class="fs-5"><?php pll_e('Precios desde'); ?></div>
                    <div class="fs-2">
                        <span data-bs-toggle="tooltip" data-bs-title="<?php pll_e('Precio para 2 personas en TEMPORADA BAJA'); ?>">
                            $<?= number_format(rwmb_meta('two_people_low'),2) ?> <?= rwmb_meta('currency') ?>
                        </span>
                        <span class="fs-5">/ <?php pll_e('noche'); ?></span>
                    </div>
                </div> -->

            </div>

            <hr class="w-100 my-5">

            <div class="row">

                <!-- Amenidades -->
                <div class="col-12 col-lg-6">
                    <h2 class="mb-4"><?php pll_e('Comodidades'); ?></h2>
                    <div class="row mb-5 fs-5 fw-light">
                        
                        
                        <?php 
                            $terms = get_the_terms( get_the_ID(), 'tipo' );
                            $tipo = $terms[0]->name;
                        ?>
                        
                        <!-- Recordar ponerlo en inglés tambíen -->
                        <?php if( $tipo == 'Master Suite Jaguar' or $tipo == 'Jaguar Master Suite'): ?>

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

                        <?php elseif($tipo == 'Jungle Suites' or $tipo == 'Suites de la Selva' ): ?>
                            <div class="col-lg-6">
                                <div class="mb-4 d-flex">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-1.png"></div>
                                    <div>
                                        <p class="mb-0">1 <?php pll_e('Cama king size');?></p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex align-items-center">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-2.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Regadera y baño con luz solar natural.');?></p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex align-items-center">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-3.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Aire Acondicionado y ventilador.');?></p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-4.png"></div>
                                    <div>
                                        <p class="mb-0">Bar</p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex align-items-center">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-5.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Vista de la selva.');?></p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex align-items-center">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-6.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Terraza privada');?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">                       
                                <div class="mb-4 d-flex align-items-center">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-8.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('El hotel es');?> <span class="medium-font text-underline">Pet Friendly</span>.</p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-9.png"></div>
                                    <div>
                                        <p class="mb-0">WiFi</p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex align-items-center">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-10.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('No hay señal telefónica en el hotel.');?></p>
                                    </div>
                                </div>
                                
                                <div class="mb-4 d-flex align-items-center">
                                    <div><img width="25px" class="me-2" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/est.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Estacionamiento gratis');?></p>
                                    </div>
                                </div>
                            </div>
                        <?php elseif($tipo == 'Cabañas Palmas' or $tipo == 'Las Palmas Cabins' ): ?>
                            <div class="col-lg-6">
                                <div class="mb-4 d-flex justify-content-start align-items-center">
                                    <div><img width="25px" class="me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-2.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Baño espacioso con vestidor.');?></p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-start align-items-center">
                                    <div><img width="25px" class="me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-8.png"></div>
                                    <div>
                                        <p class="mb-0">Pet Friendly.</p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-start align-items-center">
                                    <div><img width="25px" class="me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-6.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Terraza privada.');?></p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-start align-items-center">
                                    <div><img width="25px" class="me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-3.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Ventilador de techo.');?></p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-start align-items-center">
                                    <div><img width="25px" class="me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-5.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Vista al mar y a la selva.');?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">                                                      
                                
                                <div class="mb-4 d-flex justify-content-start align-items-center">
                                    <div><img width="25px" class="me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/est.png"></div>
                                    <div>
                                        <p class="mb-0"><?php pll_e('Estacionamiento gratis');?></p>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-start">
                                    <div><img width="25px" class="me-2" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/room-icon-9.png"></div>
                                    <div>
                                        <p class="mb-0">WIFI.</p>
                                    </div>
                                </div>                                                        
                            </div>
                        <?php elseif($tipo == 'Cabañas de las Aves' or $tipo == 'Bird View Cabins' ): ?>
                            <div class="col-lg-6">
                                <div class="d-flex justify-content-start mb-4">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-1.png"></div>
                                    <div>
                                        <?php if($post->ID == pll_get_post(588) or $post->ID == pll_get_post(306) ): ?>
                                            1 <?php pll_e('cama King size y tapanco con 1 cama queen size.');?>
                                        <?php elseif($post->ID == pll_get_post(326)): ?>
                                            1 <?php pll_e('cama King size');?>
                                        <?php else: ?>
                                            1 <?php pll_e('cama King size y tapanco con 2 camas individuales.');?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4 align-items-center">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-2.png"></div>
                                    <div>
                                        <?php pll_e('Regadera y baño con luz solar natural');?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4 align-items-center">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-3.png"></div>
                                    <div>
                                        <?php pll_e('Aire Acondicionado y ventilador');?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-4.png"></div>
                                    <div>
                                        Bar
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4 align-items-center">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-5.png"></div>
                                    <div>
                                        <?php pll_e('Vista de la selva.');?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4 align-items-center">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-6.png"></div>
                                    <div>
                                        <?php pll_e('Amplio “deck” de madera techado.');?>
                                    </div>
                                </div>

                                <?php if( $post->ID != pll_get_post(590) ): ?>
                                    <div class="d-flex justify-content-start mb-4 align-items-center">
                                        <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-7.png"></div>
                                        <div>
                                            <?php pll_e('Frigobar');?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class="col-lg-6">                                               
                                <div class="d-flex justify-content-start mb-4">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-8.png"></div>
                                    <div>
                                        <?php pll_e('El hotel es');?> <span class="medium-font text-underline">Pet Friendly</span>.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-9.png"></div>
                                    <div>
                                        WiFi
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4 align-items-center">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/room-icon-10.png"></div>
                                    <div>
                                        <?php pll_e('No hay señal telefónica en el hotel.');?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4 align-items-center">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/yoga.png"></div>
                                    <div>
                                        <?php pll_e('Junto a la sala de Yoga.');?>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-start mb-4 align-items-center">
                                    <div><img class="me-2" width="25px" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/est.png"></div>
                                    <div>
                                        <?php pll_e('Estacionamiento gratis.');?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                
                    </div>
                </div>

                <!-- Politicas -->
                <div class="col-12 col-lg-6">
                    <h3 class="fs-2"><?php pll_e('Políticas'); ?></h3>
                    <ul class="row p-5 fs-5">

                        <?php $politics = rwmb_meta('politics', [], $room_politics->ID);?>
                        <?php foreach($politics as $politic): ?>
                            <li class="col-12 col-lg-6 mb-3 px-1 px-lg-3"><?php echo $politic; ?></li>
                        <?php endforeach; ?>
                        
                    </ul>
                </div>
            </div>
            
            <h3 class="mb-1 fs-2"><?php pll_e('Ubicación del Hotel'); ?></h3>
            <div class="text-secondary mb-3">Punta Monterrey, Nayarit</div>
            <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.3907141832815!2d-105.38706050541438!3d20.93681897514492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84213d41a5051e37%3A0x41b203849aefa439!2sPunta%20Monterrey%20Tropical%20Beach%20Resort!5e0!3m2!1ses-419!2smx!4v1689097014256!5m2!1ses-419!2smx" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <div class="text-center" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp'); padding:90px 0;">
            <img class="rounded-circle mb-3" src="<?php echo $images[0]['url'];?>" alt="<?php echo $images[0]['title'];?>" style="object-fit:cover; width:200px; height:200px;">
            <h4 class="text-uppercase fs-2 mb-3">
                <span class="fw-bold d-block">Punta Monterrey </span>
                <span class="fw-light"><?php pll_e('está esperando');?> </span>
                <span class="fw-bold"><?php pll_e('por ti');?></span>
            </h4>

            <?php if(pll_current_language() == 'es'): ?>

                <?php if( rwmb_meta('cloud_link') ):?>
                    <a href="https://hotels.cloudbeds.com/es/reservation/gcIxzG#room_type=<?php echo rwmb_meta('cloud_link'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark rounded-0 py-3 px-5">
                        <?php pll_e('Reservar'); ?>
                    </a>
                <?php else: ?>
                    <a href="https://hotels.cloudbeds.com/es/reservation/gcIxzG#" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark rounded-0 py-3 px-5">
                        <?php pll_e('Reservar'); ?>
                    </a>
                <?php endif; ?>

            <?php else: ?>

                <?php if( rwmb_meta('cloud_link') ):?>
                    <a href="https://hotels.cloudbeds.com/reservation/gcIxzG#room_type=<?php echo rwmb_meta('cloud_link'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark rounded-0 py-3 px-5">
                        <?php pll_e('Reservar'); ?>
                    </a>
                <?php else: ?>
                    <a href="https://hotels.cloudbeds.com/reservation/gcIxzG#" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark rounded-0 py-3 px-5">
                        <?php pll_e('Reservar'); ?>
                    </a>
                <?php endif; ?>

            <?php endif; ?>

        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer();?>