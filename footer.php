<?php use Carbon\Carbon; ?>

<!-- Boton de whatsapp -->
<a href="https://wa.me/523221509785?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Punta%20Monterrey" id="whatsapp" target="_blank" rel="noopener" aria-label="Whatsapp contact"> 
	<img src="<?php echo get_template_directory_uri();?>/assets/icons/whatsapp-white.svg" alt="Contactar por Whatsapp">
</a>

<!-- Boton de Reservar -->
<button type="button" class="btn btn-outline-dark rounded-4 text-uppercase fw-bold" id="reservation-button" data-bs-toggle="modal" data-bs-target="#reservationModal">
  <?php pll_e('Reserva ya');?>
</button>

<!-- Modal de reservar -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <div class="modal-title fs-5 fw-superbold text-uppercase" id="reservationModalLabel"><?php pll_e('Selecciona las fechas');?></div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <label for="check-in"><?php pll_e('Llegada');?></label>
        <input class="form-control mb-3" type="date" name="check-in" id="check-in" min="<?php echo Carbon::now()->addDay()->format('Y-m-d'); ?>">

        <label for="check-out"><?php pll_e('Salida');?></label>
        <input class="form-control" type="date" name="check-out" id="check-out" min="<?php echo Carbon::now()->addDays(2)->format('Y-m-d'); ?>">
      </div>

      <div class="modal-footer">
        <button type="button" id="book_now" class="btn btn-outline-dark w-100 rounded-0 text-uppercase fw-bold"><?php pll_e('Reservar');?></button>
      </div>

    </div>
  </div>
</div>


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
                    'menu_class'        => 'list-unstyled fw-bold',
                    'menu_id'           => 'footer_menu',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
            ?>

            <a href="<?php echo get_the_permalink( pll_get_post(511) );?>" class="text-decoration-none d-block mb-2 fw-bold" style="color:#6fc401">
                <img width="20px" src="<?php echo get_template_directory_uri();?>/assets/icons/hojas.webp" loading="lazy" alt=""> ECO FRIENDLY
            </a>
            <a href="<?php echo get_the_permalink( pll_get_post(514) );?>" class="text-decoration-none d-block fw-bold" style="color:#40bcd0">
                <img width="20px" src="<?php echo get_template_directory_uri();?>/assets/icons/huella.webp" loading="lazy" alt=""> PET FRIENDLY
            </a>

        </div>
        

        <div class="col-12 col-lg-3 text-center">
            <a href="<?php echo get_the_permalink( pll_get_post(525) ); ?>" class="link-light border border-2 border-white p-3 fw-bold d-block">puntamonterreyresort@gmail.com</a>

            <address class="mt-4 d-block">
                <?php pll_e('Carretera Intl.');?> Tepic - Vallarta Km. 113,Las Lomas, Bahía de Banderas, Nayarit, México.
            </address>
        </div>

        <div class="col-12 col-lg-3 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_footer.webp" alt="Logo Punta Monterrey" class="w-75 mx-auto mb-5" loading="lazy">

            <h6><?php pll_e('Síguenos en');?></h6>
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
        <a href="<?php echo get_the_permalink(pll_get_post(88)); ?>" class="link-light d-block me-2"><?php echo get_the_title(pll_get_post(88));?></a>
         | 
        <a href="<?php echo get_the_permalink(pll_get_post(3)); ?>" class="link-light d-block ms-2"><?php echo get_the_title(pll_get_post(3));?></a>
    </div>

</footer>

<?php wp_footer(); ?>

<?php if( !is_front_page() ): ?>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/splide.min.js" defer></script>
<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/puntamont.js" defer></script>

<script>
    // Variables para almacenar la fecha de llegada y la fecha de salida
    var start = "";
    var end = "";
    var lang = '<?php echo pll_current_language(); ?>';


    // Selección de fecha de llegada
    var fecha1Input = document.getElementById("check-in");
    fecha1Input.addEventListener("input", function(e) {
        console.log(e.target.value);
        fecha1 = e.target.value;
        start = fecha1;
    });

    // Selección de fecha de salida
    var fecha2Input = document.getElementById("check-out");
    fecha2Input.addEventListener("input", function(e) {
        endDate = new Date(e.target.value);
        end = e.target.value;
    });

    fecha1Input.addEventListener("change", () => {
        const checkInDate = new Date(fecha1Input.value);
        const nextDay = new Date(checkInDate);
        nextDay.setDate(checkInDate.getDate() + 2);

        const year = nextDay.getFullYear();
        const month = (nextDay.getMonth() + 1).toString().padStart(2, "0");
        const day = nextDay.getDate().toString().padStart(2, "0");

        const nextDayFormatted = `${year}-${month}-${day}`;

        fecha2Input.setAttribute("min", nextDayFormatted);
    });

    // Función para abrir la página de reservas del hotel en una nueva ventana
    function openReservationPage() {
    if (end !== "" && start !== "") {
        window.open("https://hotels.cloudbeds.com/reservation/gcIxzG#checkin=" + start + "&checkout=" + end);
    } else {
        if (lang == "es") {
            alert("Debes de ingresar un rango de fechas.", "error");
        } else {
            alert("You must enter a date range.", "error");
        }
    }
    }


    // Botón de reservar
    var reservarButton = document.getElementById("book_now");
    reservarButton.addEventListener("click", openReservationPage);

</script>

</body>
</html>             