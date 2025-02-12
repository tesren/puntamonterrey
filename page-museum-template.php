<?php
    /*
    Template Name: Plantilla Museo vivo
    */
    get_header();
?>


<!-- Inicio -->
<div class="row justify-content-evenly py-4 py-lg-5 bg-lightblue position-relative mb-6">

    <div class="col-12 col-lg-5 align-self-center position-relative z-1 order-2 order-lg-1">
        <h1 class="fw-bold text-green mb-5">
            <div class="d-flex">
                <div class="align-self-end me-0 me-lg-2"><?= get_the_title() ?></div>
                <img class="d-none d-lg-block" width="90px" src="<?= get_template_directory_uri().'/assets/images/eagle-guide.webp' ?>" alt="<?= get_the_title() ?> Punta Monterrey">
            </div>

            <div>PUNTA MONTERREY</div>

        </h1>


        <h2 class="fw-bold fs-4 text-darkgreen mb-4"><?php pll_e('Vive una experiencia única.') ?></h2>
        <p class="text-darkgreen mb-4">
            <?php pll_e('Sumérgete en la naturaleza mientras disfrutas de la tranquilidad y belleza de Punta Monterrey. Explora nuestro santuario natural a través del Museo Vivo y descubre de cerca la diversidad de flora y fauna que hace de este lugar un verdadero paraíso. Aprende, conecta y enamórate de la naturaleza mientras contribuyes a su conservación.') ?>
        </p>
        <h2 class="fw-bold fs-4 text-darkgreen mb-4"><?php pll_e('¡Tu próxima aventura te espera!') ?></h2>

        <img src="<?= get_template_directory_uri().'/assets/images/deer-guide.webp'?>" alt="<?= get_the_title() ?> Punta Monterrey" class="w-50">
        
    </div>

    <div class="col-lg-5 align-self-center position-relative z-1 order-1 order-lg-2 mb-3 mb-lg-0">
        <img src="<?= get_template_directory_uri().'/assets/images/jaguar-guide.webp' ?>" alt="<?= get_the_title() ?> Punta Monterrey" class="w-100">
    </div>

    <img src="<?= get_template_directory_uri().'/assets/images/stripe-bg-min.webp' ?>" alt="" class="position-absolute w-100 start-0 z-0" style="top:30%;">

</div>


<!-- Detalles de la guía -->
<div class="row row justify-content-evenly mb-6 text-darkgreen">

    <div class="col-12 col-lg-7">

        <!-- Preview -->
        <div class="row mb-5">
            <div class="col-3 px-1">
                <img src="<?= get_template_directory_uri().'/assets/images/guia-punta-monterrey-2.webp' ?>" alt="Guía del museo vivo de Punta Monterrey" class="w-100 mb-1">
                <img src="<?= get_template_directory_uri().'/assets/images/guia-punta-monterrey-3.webp' ?>" alt="Guía del museo vivo de Punta Monterrey" class="w-100 mb-1">
                <img src="<?= get_template_directory_uri().'/assets/images/guia-punta-monterrey-4.webp' ?>" alt="Guía del museo vivo de Punta Monterrey" class="w-100">
            </div>

            <div class="col-9 px-1 h-100">
                <img src="<?= get_template_directory_uri().'/assets/images/guia-punta-monterrey-1.webp' ?>" alt="Guía del museo vivo de Punta Monterrey" class="w-100 h-100 object-fit-cover">
            </div>
        </div>

    </div>

    <div class="col-12 col-lg-4 position-relative">

        <div class="position-relative z-2">
            <h3 class="fw-bold mb-3"><?php pll_e('Guía ecológica del Museo Vivo') ?> - Punta Monterrey</h3>
    
            <?php
                $precio = 2300;
            ?>
    
            <div class="mb-3 fs-4 d-flex">
                <div id="rating-section"><?= do_shortcode( '[stars_rating_avg] ' )?></div>
                <div class="align-self-center" style="min-width:50%;">
                   <!--  <span class="text-green"><?php pll_e('Precio') ?>:</span> $<?= number_format($precio) ?> MXN -->
                </div>
            </div>
    
            <a href="#" class="btn btn-darkgreen w-100 mb-3 rounded-0 disabled">
                <?php pll_e('Proximamente') ?>
            </a>
    
            <a href="#preview" class="btn btn-green w-100 rounded-0">
                <?php pll_e('Vista previa') ?>
            </a>
        </div>


        <div class="mt-6 text-darkgreen position-relative z-2">
            <h3 class="fs-2"><?php pll_e('Características') ?></h3>

            <ul class="list-unstyled fs-5">

                <li>
                    <strong><?php pll_e('Idioma') ?></strong>: <?php pll_e('Español, Inglés') ?>
                </li>

                <li>
                    <strong><?php pll_e('Páginas') ?></strong>: 108
                </li>

                <li>
                    <strong><?php pll_e('Tiempo de lectura') ?></strong>: 2 <?php pll_e('horas') ?>
                </li>

            </ul>

        </div>

        <img src="<?= get_template_directory_uri().'/assets/images/arbol-guia.webp' ?>" alt="" class="position-absolute top-50 end-0 w-50 z-1 d-none d-xxl-block">
    </div>

    <div class="col-12 col-lg-7 mt-3 mt-lg-0">
        <h3><?php pll_e('Sinopsis') ?></h3>
        <?= get_the_content(); ?>
    </div>

    <div class="col-4"></div>

</div>

<div class="mb-6" id="preview">

    <div class="row justify-content-center py-5" style="background-image: url('<?= get_template_directory_uri().'/assets/images/stripe-bg-min.webp' ?>');">
    
        <div class="col-12 col-lg-6 col-xxl-5 bg-black px-5 pt-4 pb-5 text-white position-relative">

            <div class="d-flex justify-content-between mb-4">
                <h4 class="mb-0 align-self-end"><?php pll_e('Hecha un vistazo al demo de nuestra guía.') ?></h4>
                <img width="60px" src="<?= get_template_directory_uri().'/assets/images/sapo-guia.webp' ?>" class="ms-4" alt="">
            </div>
    
            <p class="fs-5 mb-0"><?php pll_e('Un hermoso ecosistema que podemos apreciar como un museo lleno de colores, sonidos y vida.') ?></p>

        </div>
    
    </div>

    <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/33f8374ad5.html" style="border: 1px solid lightgray; width: 100%; height: 75vh;"></iframe>

</div>

<div class="row justify-content-evenly">

    <div class="col-12 col-lg-3 mb-5 mb-lg-0">
        <div class="border border-secondary p-4 rounded-2">
            <div><?= do_shortcode( '[stars_rating_avg] ' )?></div>
            <img src="<?= get_template_directory_uri().'/assets/images/new-logo-punta.webp' ?>" alt="Logo de Punta Monterrey" class="w-75 d-block mx-auto mt-5">
        </div>
    </div>

    <div class="col-12 col-lg-8 col-xxl-7">
        <?php comments_template(); ?>
    </div>

</div>


<?php get_footer(); ?>