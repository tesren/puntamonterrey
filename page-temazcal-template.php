<?php
    /*
    Template Name: Plantilla Temazcal
    */
    get_header();

    $images = acf_photo_gallery('temazcal_gallery', get_the_ID());
?>

<div class="position-relative">

    <img src="<?php echo $images[0]['full_image_url'] ?>" alt="<?php echo get_the_title(); ?> Punta Monterrey" class="w-100" style="height:87vh; object-fit:cover;" data-fancybox="gallery">
    <div class="fondo-oscuro"></div>

    <div class="row justify-content-center justify-content-lg-start position-absolute top-0 start-0 h-100">
        <div class="col-12 col-lg-6 px-3 px-lg-5 text-center text-lg-start align-self-center z-3 text-white mb-5">
            <h1 class="le-5 fw-normal fs-0 text-uppercase mb-1"><?php echo get_the_title(); ?></h1>
            <p class="fs-5 fw-light"><?php echo get_field('first_phrase') ?></p>
        </div>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp" alt="" class="w-100 position-absolute bottom-0 start-0 z-1" loading="lazy" style="max-height:15vh; object-fit:cover; mix-blend-mode:overlay;">

</div>

<div class="position-relative mb-6 pt-5">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp" alt="" class="w-100 position-absolute top-0 start-0" loading="lazy" style="max-height:15vh; object-fit:cover;">


    <div class="container row z-3 text-white position-relative z-3 bg-black px-0">

        <div class="col-12 col-lg-4 p-5 align-self-center">
            <p class="fs-5"><?php echo get_field('first_desc') ?></p>
        </div>

        <div class="col-12 col-lg-8 px-0">
            <img src="<?php echo $images[1]['full_image_url'] ?>" alt="Temazcal de Punta Monterrey" class="w-100" style="object-fit:cover; max-height:40vh;" data-fancybox="gallery">
        </div>
        
    </div> 

</div>

<div class="mb-6" style="background-image:url('<?php echo get_template_directory_uri().'/assets/images/stripe-bg-min.webp'?>'); background-repeat: no-repeat; background-position: center; background-size: contain;">

    <div class="container row justify-content-evenly">
        <div class="col-12 col-lg-6 px-0">
            <img src="<?php echo $images[2]['full_image_url'] ?>" alt="Temazcal de Punta Monterrey" class="w-100" style="object-fit:cover; max-height:40vh;" data-fancybox="gallery">
        </div>

        <div class="col-12 col-lg-5 align-self-center bg-black text-white p-5">
            <p class="fs-5"><?php echo get_field('second_desc') ?></p>
            <a href="#gallery-1" class="btn btn-outline-light rounded-0 w-100">
                <?php pll_e('Ver Galería') ?>
            </a>
        </div>
    </div>

</div>

<?php for($i=3; $i<count($images); $i++): ?>
    <img src="<?php echo $images[$i]['full_image_url'] ?>" alt="Temazcal Punta Monterrey" class="d-none" data-fancybox="gallery">
<?php endfor; ?>

<?php get_footer(); ?>