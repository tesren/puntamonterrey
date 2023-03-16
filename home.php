<?php 
    get_header(); 
?>

    <div class="position-relative">

        <img src="<?php echo get_the_post_thumbnail_url( get_page_by_title( 'Blog' ), 'full' ); ?>" alt="<?php echo get_the_title(get_page_by_title( 'Blog' )); ?>" class="w-100" style="height:50vh; object-fit:cover;">
        <div class="fondo-oscuro"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 h-100">
            <div class="col-12 col-lg-6 text-center align-self-center z-3">
                <h1 class="text-white le-5 fw-normal fs-0 text-uppercase"><?php echo get_the_title( get_page_by_title( 'Blog' ) ); ?></h1>
            </div>
        </div>

    </div>
   

    <?php if ( have_posts() ): ?>
        <div class="container my-6">
            <h2 class="fw-bold text-uppercase fs-4 text-center mb-5">Relájate en el paraíso: Un blog de Punta Monterrey</h2>
            <div class="row">
                <?php while( have_posts() ): the_post();?>
                    
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card w-100 rounded-0 border border-dark">
                            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ); ?>" class="w-100" style="height:300px; object-fit:cover;" alt="<?php echo get_the_title(get_the_ID()); ?>">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo get_the_title(get_the_ID()); ?></h3>
                                <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php echo get_the_permalink();?>" class="btn btn-outline-dark rounded-0 w-100">
                                    <?php pll_e('VER MÁS'); ?>
                                </a>
                            </div>
                        </div>
                    </div>    

                <?php endwhile; ?>
            </div>
                
        </div>
    <?php endif; ?>


<?php get_footer(); ?>