<?php
  require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="<?php echo pll_current_language();?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if(is_front_page()): ?>
      <title>Punta Monterrey | Beach Resort Hotel Riviera Nayarit</title>
    <?php elseif(is_post_type_archive()):?>
      <title>Punta Monterrey | <?php echo post_type_archive_title(); ?></title>
    <?php else: ?>
      <title>Punta Monterrey | <?php echo the_title(); ?></title>
    <?php endif; ?>

    <meta name="description" content="<?php pll_e('Punta Monterrey Tropical Beach Resort es un hotel dentro de una reserva ecológica de más de 300 acres de selva con 16 habitaciones de arquitectura bioclimática y capacidad para 48 personas. Se especializan en grupos pequeños que quieren conectar con la naturaleza y ofrecen atención personalizada para eventos privados, retiros de yoga, bodas y servicios de spa. Además, el resort se preocupa por mantener la belleza natural que lo rodea, permitiendo a los huéspedes disfrutar de la privacidad y de increíbles puestas de sol, sabores del mar y la compañía de sus mascotas.');?>">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <?php if( !is_front_page() ): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/splide.min.css">
    <?php endif; ?>

    <!-- CSS -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<nav class="navbar bg-white navbar-expand-xl sticky-top">

  <div class="container-fluid">

    <a class="navbar-brand ps-3" href="<?php echo get_home_url();?>">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-punta.webp"
          width="205"
          height="auto"
          alt="Logo de Punta Monterrey">
        </img>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

      <div class="offcanvas-header">
        
        <div class="offcanvas-title" id="offcanvasNavbarLabel">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-punta.webp"
            width="185"
            height="auto"
            alt="Logo de Punta Monterrey">
          </img>
        </div>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body pe-4">

        
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'ul',
                    //'container_class'   => ' list-unstyled',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'navbar-nav justify-content-end flex-grow-1 pe-3 fw-bold',
                    //'menu_id'           => '',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        
        
      </div>
    </div>
  </div>

</nav>