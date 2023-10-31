<?php get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();?>

        <?php 
            $images = rwmb_meta('retreat_gallery', ['limit'=>20, 'size'=>'large']);

            $start_day = date('d', strtotime(rwmb_meta('start_date')));
            $start_month = date('F', strtotime(rwmb_meta('start_date')));
            $start_year = date('Y', strtotime(rwmb_meta('start_date')));

            $end_day = date('d', strtotime(rwmb_meta('end_date')));
            $end_month = date('F', strtotime(rwmb_meta('end_date')));
            $end_year = date('Y', strtotime(rwmb_meta('end_date')));

            if( pll_current_language() == 'es' ){
                $start = $start_day.' de '. pll__($start_month) .' del '.$start_year ;
                $end_date = $end_day.' de '. pll__($end_month).' del '.$end_year ;
            }else{
                $start = pll__($start_month).' '.$start_day.' '.$start_year ;
                $end_date = pll__($end_month).' '.$end_day.' '.$end_year ;
            }
        ?>

        <div class="position-relative">
            <img src="<?php echo $images[0]['url'] ?>" alt="<?php echo get_the_title();?>" class="w-100" style="height:50vh; object-fit:cover;">

            <div class="fondo-oscuro"></div>

            <div class="row h-100 position-absolute top-0 start-0 z-2">
                <div class="col-12 align-self-center text-center text-white">
                    <h1 class="fs-2 text-uppercase fw-light mb-0"><?php echo get_the_title();?></h1>
                </div>
            </div>
        </div>
                       
        <div class="container row justify-content-center my-5">

            <div class="col-12 col-lg-9 px-2 px-lg-5 mb-5 mb-lg-0 align-self-center">
                <small><?php pll_e('Fechas'); ?></small>
                <h2 class="mb-4"><?php echo $start ?> - <?php echo $end_date ?></h2>

                <?php echo the_content(); ?>
            </div>
            
            <?php $img_leader = rwmb_meta('leader_image', ['limit'=>1, 'size'=>'medium']); ?>
            <?php if( isset($img_leader) ): ?>
                <div class="col-12 col-lg-3 mx-auto card my-5 align-self-center px-0">
                    <img src="<?php echo $img_leader[0]['url'] ?>" alt="<?php echo rwmb_meta('leader_name');?>" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo rwmb_meta('leader_name');?></h5>
                        <p class="card-text mb-4 fw-bold"><?php pll_e('Organizador'); ?></p>
                        <a href="<?php echo rwmb_meta('retreat_website')?>" class="btn btn-outline-dark w-100 rounded-0" target="_blank" rel="noopener noreferrer">
                            <?php pll_e('Visitar sitio web') ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

        </div>

        <!-- Slides -->
        <?php if( count($images) > 1 ): ?>
            <section class="splide my-5" id="slides-punta"  aria-label="Galería del Hotel Punta Monterrey">
                <div class="splide__track">

                    <ul class="splide__list">
                        <?php for($i=0; $i < count($images); $i++): ?>
                            <li class="splide__slide px-2">
                                <img src="<?php echo $images[$i]['url'];?>" alt="Galería Punta Monterrey <?php echo $i; ?>" class="w-100" data-fancybox="gallery-yoga" loading="lazy" style="height:300px; object-fit:cover;">
                            </li>
                        <?php endfor; ?>
                    </ul>

                </div>
            </section>
        <?php endif; ?>

        <div class="text-center" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/stripe-bg-min.webp'); padding:90px 0;">

            <img class="rounded-circle mb-3" src="<?php echo get_template_directory_uri();?>/assets/images/home-1.webp" alt="<?php echo $images[0]['title'];?>" style="object-fit:cover; width:200px; height:200px;">
            
            <h4 class="text-uppercase fs-2 mb-3">
                <span class="fw-bold d-block">Punta Monterrey </span>
                <span class="fw-light"><?php pll_e('está esperando');?> </span>
                <span class="fw-bold"><?php pll_e('por ti');?></span>
            </h4>

            <?php if(pll_current_language() == 'es'): ?>

                <a href="https://hotels.cloudbeds.com/es/reservation/gcIxzG#" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark rounded-0 py-3 px-5">
                    <?php pll_e('Reservar'); ?>
                </a>
               
            <?php else: ?>
 
                <a href="https://hotels.cloudbeds.com/reservation/gcIxzG#" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark rounded-0 py-3 px-5">
                    <?php pll_e('Reservar'); ?>
                </a>

            <?php endif; ?>

        </div>


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer();?>