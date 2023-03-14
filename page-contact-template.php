<?php 
    /*
    Template Name: Plantilla Contacto
    */
    get_header(); 
?>

<div class="row justify-content-center py-5" style="min-height:100vh; background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp');">

    <div class="col-11 col-lg-6 bg-white p-3 p-lg-5" style="box-shadow: 7px 7px 0 0 #CCCCCC;">
        <h1 class="text-center mb-5"><?php echo get_the_title(); ?></h1>
        <?php echo do_shortcode( '[contact-form-7 id="524" title="Formulario de contacto 1"]'); ?>
    </div>

</div>

<?php get_footer(); ?>