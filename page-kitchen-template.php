<?php
/*
 Template Name: Plantilla Cocina
  */
get_header();
$images = acf_photo_gallery('kitchen_gallery', get_the_ID());
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat&display=swap');
    .font-caveat{
        font-family: 'Caveat', cursive;  
    }
</style>

<div class="container my-6 bg-black text-white p-3 p-lg-5 position-relative">
    <h1 class="text-center fw-superbold text-uppercase mb-4"><?php echo get_the_title();?></h1>
    <h2 class="text-center font-caveat mb-6">"EL AMOR PUEDE ESPERAR, EL HAMBRE NO"</h2>

    <div class="font-caveat position-absolute start-0 le-10 ps-5 d-none d-lg-block" style="font-size:180px; top:120px; color:#333333;">LA COCINA</div>

    <div class="font-caveat position-absolute text-center start-0 le-10 ps-5 d-block d-lg-none z-3 text-white" style="font-size:60px; top:220px;">LA COCINA</div>

    <div class="row position-relative z-2">
        <div class="col-12 col-lg-4 align-self-center">
            <img src="<?php echo $images[0]['full_image_url'];?>" class="d-block w-100" alt="Hotel Punta Monterrey">
        </div>
        <div class="col-12 col-lg-7 p-0">
            <div class="p-3 p-lg-5 border-white border-4 border-end border-bottom"><?php echo get_the_content(); ?></div>
        </div>
    </div>

    <img width="250px" src="<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-small.webp" alt="" class="position-absolute bottom-0 start-0 ps-5 pb-5 z-1 d-none d-lg-block">

</div>

<!-- Slides -->
<?php if( count($images) > 1 ): ?>
    <h3 class="text-center fw-bold le-10 mb-4 fs-1">GALERÍA</h3>
    <section class="splide mb-6" id="slides-punta"  aria-label="Galería del Hotel Punta Monterrey">
        <div class="splide__track">

            <ul class="splide__list">
                <?php for($i=0; $i < count($images); $i++): ?>
                    <li class="splide__slide px-2">
                        <img src="<?php echo $images[$i]['full_image_url'];?>" alt="Galería Punta Monterrey <?php echo $i; ?>" class="w-100" loading="lazy" style="height:300px; object-fit:cover;">
                    </li>
                <?php endfor; ?>
            </ul>

        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>