<?php
    /*
    Template Name: Plantilla Museo vivo
    */
    get_header();
?>


<!-- Inicio -->
<div class="row justify-content-evenly py-5 bg-lightblue position-relative mb-6">

    <div class="col-12 col-lg-5 align-self-center position-relative z-1">
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

    <div class="col-lg-5 align-self-center position-relative z-1">
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

        <h3><?php pll_e('Sinopsis') ?></h3>
        <div><?= get_the_content(); ?></div>

    </div>

    <div class="col-12 col-lg-4">
        <h3 class="fw-bold mb-3"><?php pll_e('Guia ecológica del Museo Vivo') ?> - Punta Monterrey</h3>

        <?php
            $precio = 2300;
        ?>

        <div class="mb-3 fs-4">
            <span class="text-green"><?php pll_e('Precio') ?>:</span> $<?= number_format($precio) ?> MXN
        </div>

        <a href="#" class="btn btn-darkgreen w-100 mb-3 rounded-0">
            <?php pll_e('Comprar ahora') ?>
        </a>

        <a href="" class="btn btn-green w-100 rounded-0">
            <?php pll_e('Vista previa') ?>
        </a>
    </div>

</div>


<?php get_footer(); ?>