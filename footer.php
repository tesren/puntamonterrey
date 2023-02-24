<footer class="bg-black pt-5 text-white px-4 px-lg-5">

    
    <div class="row justify-content-evenly mb-5">

        <div class="col-12 col-lg-3">
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'footer',
                    'depth'             => 1,
                    'container'         => 'div',
                    'container_class'   => 'w-100',
                    //'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'list-unstyled',
                    'menu_id'           => 'footer_menu',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
            ?>

            <a href="#" class="text-decoration-none d-block mb-2 fw-bold" style="color:#6fc401">ECO FRIENDLY</a>
            <a href="#" class="text-decoration-none d-block fw-bold" style="color:#40bcd0">PET FRIENDLY</a>

        </div>
        

        <div class="col-12 col-lg-3 text-center">
            <a href="#" class="link-light border border-2 border-white p-3 fw-bold d-block">puntamonterreyresort@gmail.com</a>

            <address class="mt-4 d-block">
                Carretera Intl. Tepic - Vallarta Km. 113,Las Lomas, Bahía de Banderas, Nayarit, México.
            </address>
        </div>

        <div class="col-12 col-lg-3 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_footer.webp" alt="Logo Punta Monterrey" class="w-75 mx-auto mb-5" loading="lazy">

            <h6>Síguenos en</h6>
            <div class="d-flex justify-content-center">
                <a href="https://www.facebook.com/PuntaMonterreyBeach" target="_blank" rel="noopener noreferrer" class="text-decoration-none me-3" aria-label="Punta Monterrey Facebook">
                    <img width="30px" src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt="Punta Monterrey Facebook">
                </a>

                <a href="https://www.instagram.com/puntamonterrey/" target="_blank" rel="noopener noreferrer" class="text-decoration-none" aria-label="Punta Monterrey Instagram">
                    <img width="30px" src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="Punta Monterrey Instagram">
                </a>
            </div>
        </div>

    </div>
    

    <div class="d-flex justify-content-center text-center py-2">
        <a href="#" class="link-light d-block me-2">Términos y Condiciones</a> | <a href="#" class="link-light d-block ms-2">Política de Privacidad</a>
    </div>

</footer>

<?php wp_footer(); ?>

<?php if( !is_front_page() ): ?>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/splide.min.js" defer></script>
<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/puntamont.js" defer></script>

</body>
</html>             