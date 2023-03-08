<?php
/*
 Template Name: Plantilla Bar
  */
get_header();
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat&display=swap');
    .font-caveat{
        font-family: 'Caveat', cursive;  
    }
</style>

<div class="position-relative">

    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php echo get_the_title(); ?>" class="w-100" style="height:87vh; object-fit:cover;">
    <div class="fondo-oscuro"></div>

    <div class="row justify-content-center position-absolute top-0 start-0 h-100">
        <div class="col-12 col-lg-6 text-center align-self-center z-3">
            <h1 class="text-white le-5 fw-normal fs-0 text-uppercase"><?php echo get_the_title(); ?></h1>
        </div>
    </div>

    <div class="row justify-content-center position-absolute bottom-0 start-0 pb-5">
        <div class="col-auto text-center align-self-center z-3">
            <h2 class="text-white le-5 fw-normal fs-3 bg-black border border-white border-3 text-uppercase p-3 font-caveat">"Para las penas, las copas llenas"</h2>
        </div>
    </div>

</div>

<div class="position-relative mb-6 pt-5">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp" alt="" class="w-100 position-absolute top-0 start-0 z-1" loading="lazy" style="min-height:20vh;">

    <div class="container position-relative z-3">
        <?php the_content(); ?>
    </div> 

</div>




<?php get_footer(); ?>