<?php
    /*
    Template Name: Plantilla Pet-Friendly
    */
    get_header();
?>

<div class="position-relative">

    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php echo get_the_title(); ?>" class="w-100" style="height:50vh; object-fit:cover;">

    <img width="260px" src="<?php echo get_template_directory_uri(); ?>/assets/images/pet-circle.webp" alt="Eco friendly" class="position-absolute top-100 start-50 z-2" style="transform: translate(-50%, -50%);">
</div>

<div class="position-relative" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp'); padding:140px 0;">

    <div class="container position-relative z-1 bg-white p-3 p-lg-5" style="box-shadow: 5px 7px 0 0 #CCCCCC;">

        <?php echo get_the_content(); ?>
    </div> 

</div>

<?php get_footer(); ?>