<?php get_header(); ?>


<div class="position-relative">

    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php echo get_the_title(); ?>" class="w-100" style="height:87vh; object-fit:cover;">
    <div class="fondo-oscuro"></div>

    <div class="row justify-content-center position-absolute top-0 start-0 h-100">
        <div class="col-12 col-lg-6 text-center align-self-center z-3">
            <h1 class="text-white le-5 fw-normal fs-0 text-uppercase"><?php echo get_the_title(); ?></h1>
        </div>
    </div>


</div>

<div class="position-relative">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp" alt="" class="w-100 position-absolute top-0 start-0 z-1" loading="lazy" style="height:20vh; object-fit:cover;">
</div>

<div class="my-6">

    <div class="container position-relative z-3">
        <?php the_content(); ?>
    </div> 

</div>


<?php get_footer(); ?>