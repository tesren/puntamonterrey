<?php get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post();?>
        <?php $categories = get_the_category(); ?>
                       
        <div class="container">

            <div class="my-4 d-flex">
                <?php foreach($categories as $cat): ?>
                    <div class="badge bg-dark fs-6 fw-light rounded-pill me-3"><?php echo $cat->name; ?></div>
                <?php endforeach; ?>
                
                <div class="me-3 align-self-center"><?php echo get_the_date(); ?></div>
                <div class="align-self-center"><?php echo get_the_author(); ?></div>
            </div>

            <h1 class="fs-1 text-uppercase fw-light mb-3"><?php echo get_the_title();?></h1>

            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' )?>" alt="<?php echo get_the_title();?>" class="w-100 mb-5" style="max-height:75vh; object-fit:cover;">

            <div class="mb-6 fs-5">
                <?php echo the_content(); ?>
            </div>

        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer();?>