<?php get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();?>
        <?php $imgs = rwmb_meta('gallery', ['size'=>'large', 'limit'=>20] ); ?>
                       
        <div class="container mt-5">

            <div class="position-relative mb-5">
                <img src="<?php echo $imgs[0]['url'] ?>" alt="<?php echo get_the_title();?>" class="w-100" style="max-height:75vh; object-fit:cover;">

                <div class="fondo-oscuro"></div>
            
                <div class="row position-absolute top-0 start-0 h-100 z-3">
                    <div class="col-12 align-self-center text-center">
                        <h1 class="fs-1 text-uppercase text-white fw-light mb-0"><?php echo get_the_title();?></h1>
                    </div>
                </div>

            </div>

            <div class="mb-6 fs-5">
                <?php echo the_content(); ?>
            </div>

        </div>

        <!-- Slides -->
        <?php if( count($imgs) > 1 ): ?>
            <section class="splide my-5" id="slides-punta"  aria-label="Galería del Hotel Punta Monterrey">
                <div class="splide__track">

                    <ul class="splide__list">
                        <?php for($i=0; $i < count($imgs); $i++): ?>
                            <li class="splide__slide px-2">
                                <img src="<?php echo $imgs[$i]['url'];?>" alt="Galería Punta Monterrey <?php echo $i; ?>" class="w-100" data-fancybox="gallery-yoga" loading="lazy" style="height:300px; object-fit:cover;">
                            </li>
                        <?php endfor; ?>
                    </ul>

                </div>
            </section>
        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer();?>