<?php
/*
 Template Name: Plantilla Experiencias
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
<div class="position-relative mb-6 pb-5 pb-lg-0">

    <img src="<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp" alt="" class="w-100 z-1" loading="lazy" style="padding-bottom:200px;">

    <div class="row justify-content-center position-absolute z-2 top-0 start-0 h-100">

        <div class="col-11 col-lg-5 align-self-center bg-black px-4 px-lg-5 py-3 py-lg-4 position-relative overflow-hidden my-5 my-lg-0">
            <p class="text-white fs-6 fw-semibold mb-0"><?php echo get_field('primer_parrafo');?></p>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/leave-bg.webp" alt="" class="position-absolute end-0 col-6 col-lg-3" style="top:10%;">
        </div>

    </div>

</div>


<!-- Actividades -->
<div class="row justify-content-center py-5"  style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp');">

    <div class="col-11 col-lg-10 col-xl-8 bg-light px-4 px-lg-5 my-6">
        <h2 class="text-center fw-superbold le-10 my-5">ACTIVIDADES DISPONIBLES</h2>

        <div class="row pb-5">
            <div class="col-12 mb-5">
                <img src="<?php echo $images[0]['full_image_url']; ?>" alt="<?php echo $images[0]['title']; ?>" class="w-100">
            </div>

            <div class="col-12 col-lg-6 fs-6">
                <ul>
                    <li class="mb-4 d-flex align-items-center justify-content-start">
                        <img width="35px" class="me-1" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-8.png">
                        <span>Caminata a la playa del barro</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center justify-content-start">
                        <img width="35px" class="me-1" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-21.png">
                        <span>Caminata a las tinajas (albercas de piedra natural)</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center justify-content-start">
                        <img width="35px" class="me-1" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-31.png">
                        <span>Caminata al orquideario</span>
                    </li>
                    
                </ul>
            </div>
            <div class="col-12 col-lg-6 fs-6">
                <ul>
                    <li class="mb-4 d-flex align-items-center justify-content-start">
                        <img width="35px" class="me-1" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/fishing.png">
                        <span>Pesca deportiva de playa</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center justify-content-start">
                        <img width="35px" class="me-1" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/sailboat.png">
                        <span>Pesca deportiva en mar abierto</span>
                    </li>
                    <li class="mb-4 d-flex align-items-center justify-content-start">
                        <img width="35px" class="me-1" src="<?php echo get_template_directory_uri();?>/assets/icons/amenities/icon-18.png">
                        <span>Paseo en Kayak y SUP</span>
                    </li>
                    
                </ul>
            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>