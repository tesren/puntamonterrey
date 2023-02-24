<?php
/*
 Template Name: Plantilla de Eventos
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

<!--Segundo parrafo-->
<div class="row justify-content-evenly mb-6">
    <div class="col-11 col-lg-4 align-self-center order-2 order-lg-1 mt-3 mt-lg-0 text-center">
        <div class="fs-5 mb-0 text-start mb-5"><?php echo get_field('segundo_parrafo');?></div>
        <a href="#" class="btn btn-outline-dark rounded-0 fw-bold border-3">PÓNTE EN CONTACTO</a>
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
                        <img src="<?php echo $images[$i]['full_image_url'];?>" class="d-block w-100" alt="Hotel Punta Monterrey" loading="lazy">
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
    <div class="col-11 col-lg-8 fs-5">
        <?php echo get_field('tercer_parrafo'); ?>
    </div>
</div>

<!-- Slides -->
<?php if( count($images) > 4 ): ?>
    <section class="splide" id="slides-punta"  aria-label="Galería del Hotel Punta Monterrey">
        <div class="splide__track">

            <ul class="splide__list">
                <?php for($i=4; $i < count($images); $i++): ?>
                    <li class="splide__slide px-2">
                        <img src="<?php echo $images[$i]['full_image_url'];?>" alt="Galería Punta Monterrey <?php echo $i; ?>" class="w-100" loading="lazy" style="height:300px; object-fit:cover;">
                    </li>
                <?php endfor; ?>
            </ul>

        </div>
    </section>
<?php endif; ?>

<!-- Amenidades -->
<div class="row justify-content-center py-5"  style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp');">

    <div class="col-11 col-lg-10 col-xl-7 bg-light px-4 px-lg-5">
        <h2 class="text-center fw-bold le-10 mt-5 mb-4">AMENIDADES PARA BODAS</h2>

        <h3 class="fs-6 text-center mb-5">Punta Monterrey cuenta con una cartera de proveedores para los siguientes servicios.</h3>

        <div class="row">
            <div class="col-12 col-lg-4">
                
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-22.png">
                    <span class="ms-2">SERVICIO DE CATERING</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-23.png">
                    <span class="ms-2">MESEROS</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-24.png">
                    <span class="ms-2">CHEF &amp; COCINEROS</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-25.png">
                    <span class="ms-2">TÉ &amp; CAFÉ</span>
                </div>
                
            </div>

            <div class="col-12 col-lg-4">
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-26.png">
                    <span class="ms-2">LUZ Y SONIDO</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-27.png">
                    <span class="ms-2">DJ</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-28.png">
                    <span class="ms-2">PISTA DE BAILE</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-29.png">
                    <span class="ms-2">MOBILIARIO</span>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-30.png">
                    <span class="ms-2">SERVICIO DE TAXI</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-31.png">
                    <span class="ms-2">DECORACIÓN</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-32.png">
                    <span class="ms-2">VINOS &amp; LICORES</span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-start">
                    <img width="35px" alt="" loading="lazy" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-33.png">
                    <span class="ms-2">REPOSTERÍA</span>
                </div>
            </div>

        </div>

        <div class="text-center my-5">Te contactamos con los mejores proveedores de la region.</div>
    </div>

</div>


<?php get_footer(); ?>