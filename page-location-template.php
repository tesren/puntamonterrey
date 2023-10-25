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

        <div class="col-11 col-lg-7 align-self-center bg-black px-4 px-lg-5 py-3 py-lg-5 position-relative overflow-hidden my-2 my-lg-5 my-lg-0">
            <p class="text-white fs-6 fw-semibold mb-0"><?php echo get_field('primer_parrafo');?></p>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/leave-bg.webp" alt="" class="position-absolute end-0 col-6 col-lg-3" style="top:10%;">
        </div>

        <div class="w-100"></div>


        <div class="col-11 col-lg-9 col-xl-7 px-0">

            <div class="row justify-content-between px-0">
                <div class="col-12 col-lg-5 bg-light px-4 py-5 text-center mt-4" style="box-shadow: 8px 8px 0 0 #ccc;">
                    <a href="https://wa.me/523221509785?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Punta%20Monterrey" class="text-decoration-none link-dark">
                        <img width="60px" src="<?php echo get_template_directory_uri();?>/assets/icons/whatsapp.svg" alt="">
                        <div class="fs-5 fw-light my-3">Whatsapp:</div>
                        <div class="fs-5 fw-bold">(+52) 322 150 9785</div>
                    </a>
                </div>

                <div class="col-12 col-lg-5 bg-light px-2 py-5 text-center mt-4" style="box-shadow: 8px 8px 0 0 #ccc;">
                    <a href="mailto:puntamonterreyresort@gmail.com" class="text-decoration-none link-dark">
                        <img width="60px" src="<?php echo get_template_directory_uri();?>/assets/icons/mail-dark.svg" alt="">
                        <div class="fs-5 fw-light my-3">Email:</div>
                        <div class="fw-bold" style="font-size:0.9rem;">puntamonterreyresort@gmail.com</div>
                    </a>
                </div>
            </div>
            

        </div>

        

    </div>

</div>

<!-- Ubicación -->
<div class="row justify-content-center mb-6 position-relative">
    <div class="col-11 col-lg-4 p-3 p-lg-5 border border-dark border-3 text-center position-relative z-2">
        <img width="48px" src="<?php echo get_template_directory_uri();?>/assets/icons/location-pin-grey.svg" alt="" loading="lazy" class="position-absolute start-50" style="top:-30px;transform: translateX(-50%);">
        <h2 class="text-uppercase fs-6 mb-4"><?php pll_e('Estamos ubicados en')?>...</h2>
        <address class="fw-bold">
            <?php pll_e('Carretera Intl.')?> Tepic - Vallarta Km. 113, Las Lomas, Bahía de Banderas, Nayarit, México.
        </address>
    </div>

    <img class="d-none d-lg-block position-absolute z-1" style="width:200px; right:400px; bottom:-25px;" src="<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-small.webp" alt="" loading="lazy">

</div>

<div class="row justify-content-center mb-6">

    <div class="col-12 col-lg-6 mb-5">
        <h2 class="text-uppercase text-center fs-4 mb-3"><?php pll_e('Desde')?> Puerto Vallarta</h2>
        <p>
            <?php echo get_field('vallarta_route') ?>
        </p>
    </div>

    <div class="w-100"></div>

    <div class="col-12 col-lg-6">
        <h3 class="text-uppercase text-center fs-4 mb-3"><?php pll_e('Desde')?> Guadalajara</h3>
        <p>
            <?php echo get_field('gdl_route') ?>
        </p>
    </div>

</div>

<div class="container mb-6 position-relative px-2 px-lg-5">
    <h3 class="text-uppercase fw-bold"><?php pll_e('Ubicación')?></h3>
    <iframe class="z-3 position-relative" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.5453481905665!2d-105.3868452196413!3d20.935452704446032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84213d41a5051e37%3A0x41b203849aefa439!2sPunta%20Monterrey%20Tropical%20Beach%20Resort!5e0!3m2!1ses-419!2smx!4v1678224348013!5m2!1ses-419!2smx" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <img class="d-none d-lg-block position-absolute z-1" style="width:300px; right:0; bottom:-25px;" src="<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-small.webp" alt="" loading="lazy">
</div>

<!-- Otros Hoteles -->
<section class="container row justify-content-center mb-6">
    <h3 class="text-uppercase text-center fw-bold mb-5"><?php pll_e('Otros hoteles que recomendamos')?></h3>

    <div class="col-12 col-lg-4 mb-4 mb-lg-0">

        <a href="https://www.puntomita.com/" class="text-decoration-none link-dark">
            <div class="card w-100 rounded-0 shadow-4">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/puntomita.webp" class="w-100" alt="Hotel Punto Mita en Nayarit" loading="lazy">
                <div class="card-body">
                    <div class="card-title text-center fw-bold fs-3">Punto Mita</div>
                    <p class="card-text"><?php pll_e('Punto Mita el alojamiento más ecológico en el corazón de Punta de Mita a solo 4 cuadras de la playa. Un espacio innovador y amigable con 12 Suites de lujo y un Eco Hostal. En nuestra terraza encontrarás nuestra cafetería con vista panorámica al mar, las islas Marietas y el Cerro del Mono.')?></p>
                    <div class="btn btn-outline-dark rounded-0 w-100"><?php pll_e('Visitar')?></div>
                </div>
            </div>
        </a>

    </div>

    <div class="col-12 col-lg-4">

        <a href="https://palmartropical.com/" class="text-decoration-none link-dark">
            <div class="card w-100 rounded-0 shadow-4">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/palmar.webp" class="w-100" alt="Hotel Punto Mita en Nayarit" loading="lazy">
                <div class="card-body">
                    <div class="card-title text-center fw-bold fs-3">Palmar Tropical</div>
                    <p class="card-text"><?php pll_e('PALMAR Hotel Tropical es un hotel boutique en el corazón de San Pancho (San Francisco, Nayarit). A menos de cinco minutos a pie de la playa, cerca de restaurantes y tiendas y sigue siendo un santuario tranquilo. Toma una clase de yoga o simplemente relájate en la piscina. Concepto ecológico en el diseño contemporáneo mexicano.')?></p>
                    <div class="btn btn-outline-dark rounded-0 w-100"><?php pll_e('Visitar')?></div>
                </div>
            </div>
        </a>

    </div>

</section>



<?php get_footer(); ?>