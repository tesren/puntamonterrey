<?php
/*
 Template Name: Plantilla de El Hotel
  */
get_header();
$images = acf_photo_gallery('gallery', get_the_ID());
?>

<div class="position-relative">

    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php echo get_the_title(); ?>" class="w-100" style="height:87vh; object-fit:cover;">
    <div class="fondo-oscuro"></div>

    <div class="row justify-content-center position-absolute top-0 start-0 h-100">
        <div class="col-12 col-lg-6 text-center align-self-center z-3">
            <h1 class="text-white le-5 fw-normal fs-0 text-uppercase"><?php echo get_the_title(); ?></h1>
            <a href="https://youtu.be/nwDnZyuzdDY?si=xBOzRc9oxGrTa3Ga" data-fancybox  class="btn btn-light" id="hotel_playbtn">
                <img width="15px" src="<?= get_template_directory_uri().'/assets/icons/play-solid.svg' ?>" alt=""> <?php pll_e('Ver video') ?>
            </a>
        </div>
    </div>

</div>

<!--Primer parrafo-->
<div class="position-relative mb-6">

    <img src="<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp" alt="" class="w-100 z-1" loading="lazy" style="padding-bottom:200px;">

    <div class="row justify-content-center position-absolute z-2 top-0 start-0 h-100">

        <div class="col-11 col-lg-5 align-self-center bg-black px-4 px-lg-5 py-3 py-lg-4 position-relative overflow-hidden my-5 my-lg-0">
            <p class="text-white fs-6 fw-semibold mb-0"><?php echo get_field('primer_parrafo');?></p>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/leave-bg.webp" alt="" class="position-absolute end-0 col-6 col-lg-3" style="top:10%;">
        </div>

    </div>

</div>

<!-- Misión y Visión -->
<div class="row justify-content-center mb-6">
    <div class="col-11 col-lg-10 fs-5">
        <?php echo get_field('mision_vision'); ?>
    </div>
</div>

<!--Segundo parrafo-->
<div class="row justify-content-evenly mb-6">
    <div class="col-11 col-lg-4 align-self-center order-2 order-lg-1 mt-3 mt-lg-0 text-center">
        <div class="fs-5 mb-0 text-start mb-5"><?php echo get_field('segundo_parrafo');?></div>
        <a href="<?php echo get_the_permalink( pll_get_post(216) );?>" class="btn btn-outline-dark rounded-0 fw-bold border-3"><?php pll_e('VER HABITACIONES')?></a>
    </div>

    <div class="col-12 col-lg-6 order-1 order-lg-2">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <?php for($i=1; $i<4; $i++): ?>
                    <div class="carousel-item <?php if($i==1){echo 'active';} ?>">
                        <img src="<?php echo $images[$i]['full_image_url'];?>" class="d-block w-100" alt="Hotel Punta Monterrey" data-fancybox="gallery-1" loading="lazy">
                    </div>
                <?php endfor; ?>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</div>

<!--Tercer parrafo-->
<div class="row justify-content-center mb-6">
    <div class="col-11 col-lg-10 fs-5">
        <?php echo get_field('tercer_parrafo'); ?>
    </div>
</div>

<!-- PET & ECO FRIENDLY -->

<h2 class="text-center mb-4 mb-lg-5 px-4 px-lg-0">
    <span class="fw-bold">Punta Monterrey</span>
    <?php pll_e('Reserva ecológica y Comunidad es')?>
</h2>

<div class="row justify-content-center mb-6">

    <div class="col-5 col-lg-2 align-self-center text-center">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/pet-circle.webp" alt="Punta Monterrey Pet Friendly" class="w-100 mb-3" loading="lazy">
        <a href="<?php echo get_the_permalink( pll_get_post(514) );?>" class="link-dark fw-bold"><?php pll_e('VER MÁS')?></a>
    </div>
    <div class="col-1 fs-1 align-self-center text-center">&</div>
    <div class="col-5 col-lg-2 align-self-center text-center">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/eco-circle.webp" alt="Punta Monterrey Eco Friendly" class="w-100 mb-3" loading="lazy">
        <a href="<?php echo get_the_permalink( pll_get_post(511) );?>" class="link-dark fw-bold"><?php pll_e('VER MÁS')?></a>
    </div>

</div>

<!-- Tour virtual -->
<div class="container mb-6">
    <h2 class="text-center fw-bold le-10 mb-4 fs-1"><?php pll_e('TOUR VIRTUAL')?></h2>
    <iframe src="https://tour.puntamonterrey.com/" frameborder="0" width="100%" height="550px" loading="lazy"></iframe>
</div>

<!-- Slides -->
<?php if( count($images) > 4 ): ?>
    <h3 class="text-center fw-bold le-10 mb-4 fs-1"><?php pll_e('GALERÍA')?></h3>
    <section class="splide" id="slides-punta"  aria-label="Galería del Hotel Punta Monterrey">
        <div class="splide__track">

            <ul class="splide__list">
                <?php for($i=4; $i < count($images); $i++): ?>
                    <li class="splide__slide px-2">
                        <img src="<?php echo $images[$i]['full_image_url'];?>" alt="Galería Punta Monterrey <?php echo $i; ?>" class="w-100" data-fancybox="gallery-hotel" loading="lazy" style="height:300px; object-fit:cover;">
                    </li>
                <?php endfor; ?>
            </ul>

        </div>
    </section>
<?php endif; ?>

<!-- Amenidades -->
<div class="row justify-content-center py-5"  style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp');">

    <div class="col-11 col-lg-10 col-xl-7 bg-light px-4 px-lg-5">
        <h3 class="text-center fw-bold le-10 my-5 fs-1"><?php pll_e('AMENIDADES')?></h3>

        <div class="row mb-4">
            <div class="col-12 col-lg-4">
                
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-1.png">
                    <span class="ms-2"><?php pll_e('COMEDOR')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-2.png">
                    <span class="ms-2"><?php pll_e('ASADOR')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-3.png">
                    <span class="ms-2">CHEF</span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-4.png">
                    <span class="ms-2"><?php pll_e('TÉ & CAFÉ')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-5.png">
                    <span class="ms-2"><?php pll_e('ESTACIONAMIENTO')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-6.png">
                    <span class="ms-2">PET FRIENDLY</span>
                </div>                    
                
            </div>
            <div class="col-12 col-lg-4">
                
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-8.png">
                    <span class="ms-2"><?php pll_e('SOMBRILLAS')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-9.png">
                    <span class="ms-2"><?php pll_e('TOALLAS DE PLAYA')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-10.png">
                    <span class="ms-2"><?php pll_e('PETATES')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-11.png">
                    <span class="ms-2"><?php pll_e('HAMACAS')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-12.png">
                    <span class="ms-2"><?php pll_e('PALAPAS')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-13.png">
                    <span class="ms-2"><?php pll_e('ÁREA DE DESCANSO')?></span>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-14.png">
                    <span class="ms-2"><?php pll_e('REGADERAS')?></span>
                </div>
                
            </div>
            <div class="col-12 col-lg-4">
                
                    <div class="d-flex align-items-center justify-content-start mb-3">
                        <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-15.png">
                        <span class="ms-2"><?php pll_e('SALÓN DE YOGA')?></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-start mb-3">
                        <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-16.png">
                        <span class="ms-2">YOGA PROPS</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-start mb-3">
                        <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-17.png">
                        <span class="ms-2"><?php pll_e('ÁREA DE LECTURA')?></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-start mb-3">
                        <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-18.png">
                        <span class="ms-2">KAYAKS</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-start mb-3">
                        <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-19.png">
                        <span class="ms-2"><?php pll_e('MASAJES')?></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-start mb-3">
                        <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-20.png">
                        <span class="ms-2"><?php pll_e('ÁREA DE FOGATAS')?></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-start mb-3">
                        <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-21.png">
                        <span class="ms-2"><?php pll_e('SENDERISMO')?></span>
                    </div>
                
            </div>
        </div>

        <div class="text-center mb-5"><?php pll_e('Algunas actividades se subcontratan, hay que reservar con tiempo')?></div>
    </div>

</div>

<?php get_footer(); ?>