<?php get_header(); ?>

    <div class="position-relative">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/massages.webp" alt="<?php echo get_the_title();?>" class="w-100" style="height:50vh; object-fit:cover;">

        <div class="fondo-oscuro"></div>

        <div class="row h-100 position-absolute top-0 start-0 z-2">
            <div class="col-12 align-self-center text-center text-white">
                <h1 class="fs-1 text-uppercase fw-light mb-0"><?php pll_e('Masajes') ?></h1>
            </div>
        </div>
    </div>

    <?php if( have_posts() ): ?>

        <div class="py-5" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp');">

            <div class="container bg-white px-4 px-lg-5 my-6 py-3">
                <h2 class="text-center fw-superbold le-10 my-5"><?php pll_e('MASAJES DISPONIBLES');?></h2>

                <div class="row">
                    <?php while( have_posts() ): the_post();?>

                        <?php $imgs = rwmb_meta('gallery', ['limit'=>1, 'size'=>'large'] ) ?>

                        <div class="col-12 px-0 card mb-4 rounded-0 shadow-2 retreat-card">
                            <a href="<?php echo get_the_permalink() ?>" class="link-dark text-decoration-none">

                                <div class="row g-0">
                                    <div class="col-lg-4">
                                        <img src="<?php echo $imgs[0]['url'];?>" class="w-100" alt="<?php echo get_the_title(); ?>" style="object-fit:cover; height:300px;">
                                    </div>
                                    <div class="col-lg-8 align-self-center">
                                        <div class="card-body">
                                            <h3 class="card-title fs-4"><?php echo get_the_title(); ?></h3>
                                            <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>

            </div>

        </div>

    <?php endif; ?>

<?php get_footer();?>