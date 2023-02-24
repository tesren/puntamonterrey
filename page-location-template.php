<?php
/*
 Template Name: Plantilla de Ubicación
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
<div class="position-relative py-5 mb-6" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp')">

    <div class="row justify-content-center">

        <div class="col-11 col-lg-6 align-self-center bg-black px-4 px-lg-5 py-3 py-lg-5 position-relative overflow-hidden my-2 my-lg-5 my-lg-0">
            <p class="text-white fs-6 fw-semibold mb-0"><?php echo get_field('primer_parrafo');?></p>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/leave-bg.webp" alt="" class="position-absolute end-0 col-6 col-lg-3" style="top:10%;">
        </div>

        <div class="w-100"></div>


        <div class="col-11 col-lg-6 px-0">

            <div class="row justify-content-between px-0">
                <div class="col-12 col-lg-5 bg-light px-4 py-5 text-center mt-4" style="box-shadow: 8px 8px 0 0 #ccc;">
                    <a href="https://wa.me/523221509785?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Punta%20Monterrey" class="text-decoration-none link-dark">
                        <img width="60px" src="<?php echo get_template_directory_uri();?>/assets/icons/whatsapp.svg" alt="">
                        <div class="fs-5 fw-light my-3">Whatsapp:</div>
                        <div class="fs-4 fw-bold">(+52) 322 150 9785</div>
                    </a>
                </div>

                <div class="col-12 col-lg-5 bg-light px-2 py-5 text-center mt-4" style="box-shadow: 8px 8px 0 0 #ccc;">
                    <a href="mailto:puntamonterreyresort@gmail.com" class="text-decoration-none link-dark">
                        <img width="60px" src="<?php echo get_template_directory_uri();?>/assets/icons/mail-dark.svg" alt="">
                        <div class="fs-5 fw-light my-3">Email:</div>
                        <div class="fs-6 fw-bold">puntamonterreyresort@gmail.com</div>
                    </a>
                </div>
            </div>
            

        </div>

        

    </div>

</div>



<?php get_footer(); ?>