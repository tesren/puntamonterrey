<?php 
    use Carbon\Carbon; 
    use Carbon\Traits\Date;
?>

<!-- Boton de whatsapp -->
<a href="https://wa.me/523221509785?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Punta%20Monterrey" class="shadow-4" id="whatsapp" target="_blank" rel="noopener" aria-label="Whatsapp contact"> 
	<img src="<?php echo get_template_directory_uri();?>/assets/icons/whatsapp-white.svg" alt="Contactar por Whatsapp">
</a>

<!-- Formulario de reservar de Reservar -->
<div class="position-fixed bottom-0 bg-secondary bg-gradient start-50 px-2 px-lg-3 z-3 col-12 col-lg-8 col-xl-6 col-xxl-5 shadow-up-3" style="transform: translateX(-50%);">
    <div class="row py-2 py-lg-3">
        <div class="col-6 col-lg-4">
            <label for="check-in" class="d-block d-lg-none text-white"><?php pll_e('Llegada');?></label>
            <input class="form-control" type="date" name="check-in" placeholder="<?php pll_e('Llegada');?>" id="check-in" value="<?php pll_e('Llegada');?>">
        </div>
        <div class="col-6 col-lg-4 mb-2 mb-lg-0">
            <label for="check-in" class="d-block d-lg-none text-white"><?php pll_e('Salida');?></label>
            <input class="form-control" type="date" name="check-out" placeholder="<?php pll_e('Salida');?>" id="check-out" value="<?php pll_e('Salida');?>">
        </div>
        
        <div class="col-12 col-lg-4 align-self-end">
            <button type="button" id="book_now" class="btn btn-orange w-100 mb-2 mb-lg-0 rounded-0 text-uppercase fw-bold"><?php pll_e('Reservar');?></button>
        </div>

    </div>
</div>



<footer class="bg-black pt-5 text-white px-4 px-lg-5">

    <div class="row justify-content-evenly pb-5 mb-5 mb-lg-0">

        <div class="col-12 col-lg-3 mb-4 mb-lg-0">
            <a href="<?php echo get_the_permalink( pll_get_post(511) );?>" class="text-decoration-none d-block mb-3 fw-bold" style="color:#6fc401">
                <img width="20px" src="<?php echo get_template_directory_uri();?>/assets/icons/hojas.webp" loading="lazy" alt=""> ECO FRIENDLY
            </a>
            <a href="<?php echo get_the_permalink( pll_get_post(514) );?>" class="text-decoration-none d-block fw-bold mb-4" style="color:#40bcd0">
                <img width="20px" src="<?php echo get_template_directory_uri();?>/assets/icons/huella.webp" loading="lazy" alt=""> PET FRIENDLY
            </a>

            <a href="<?php echo get_the_permalink(pll_get_post(88)); ?>" class="link-light d-block"><?php echo get_the_title(pll_get_post(88));?></a>
            <a href="<?php echo get_the_permalink(pll_get_post(3)); ?>" class="link-light d-block"><?php echo get_the_title(pll_get_post(3));?></a>

            <a class="link-light d-block my-3 text-decoration-none d-none d-lg-block" href="https://punto401.com/">
                <div class="align-self-center"><?php pll_e('Desarrollado por');?></div> 
                <img width="150px" src="<?php echo get_template_directory_uri(); ?>/assets/icons/punto401.svg" alt="Punto401 Marketing">
            </a>
        </div>
        

        <div class="col-12 col-lg-5 col-xl-3 text-center mb-4 mb-lg-0">
            <a href="<?php echo get_the_permalink( pll_get_post(525) ); ?>" id="footer_email" class="fw-bold btn btn-outline-light rounded-0 py-3">puntamonterreyresort@gmail.com</a>

            <address class="mt-4 d-block">
                <?php pll_e('Carretera Intl.');?> Tepic - Vallarta Km. 113,Las Lomas, Bahía de Banderas, Nayarit, México.
            </address>

            <h6><?php pll_e('Síguenos en');?></h6>
            <div class="d-flex justify-content-center mb-4">
                <a href="https://www.facebook.com/PuntaMonterreyBeach" target="_blank" rel="noopener noreferrer" class="text-decoration-none me-3" aria-label="Punta Monterrey Facebook">
                    <img width="30px" src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt="Punta Monterrey Facebook">
                </a>

                <a href="https://www.instagram.com/puntamonterrey/" target="_blank" rel="noopener noreferrer" class="text-decoration-none" aria-label="Punta Monterrey Instagram">
                    <img width="30px" src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="Punta Monterrey Instagram">
                </a>
            </div>
        </div>

        <div class="col-12 col-lg-3 text-center mb-4 mb-lg-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new_logo_footer.webp" alt="Logo Punta Monterrey" class="w-75 mx-auto mb-5 mb-lg-4" loading="lazy">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/made-in-mexico.webp" alt="Hecho en México" class="col-4 mx-auto">
            <div class="mb-5 mb-lg-3"><?php pll_e('Empresa 100% Mexicana'); ?></div>

            
        </div>

    </div>

</footer>

<?php wp_footer(); ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V2P7DHSVXK"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/third-party.js" defer></script>

<?php if( !is_front_page() ): ?>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/splide.min.js" defer></script>
<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js" defer></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox.umd.js" defer></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/flatpicker.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/flatpicker_es.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/puntamont.js" defer></script>

<script>
    // Variables para almacenar la fecha de llegada y la fecha de salida
    var start = "";
    var end = "";
    var lang = '<?php echo pll_current_language(); ?>';

    var fecha1Input = document.getElementById('check-in');
    var fecha2Input = document.getElementById('check-out');

    document.addEventListener("DOMContentLoaded", function () {

        //video en pagina de hotel
        var play_btn = document.getElementById('hotel_playbtn');
        if(play_btn){
            play_btn.click();
        }
        
        //flatpicker para ambas fechas
        flatpickr(fecha1Input, {
            minDate: "<?php echo Carbon::now()->addDay()->format('Y-m-d'); ?>",
            locale : "<?php echo pll_current_language(); ?>",
            onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length > 0) {
                    const nextDay = new Date(selectedDates[0]);
                    nextDay.setDate(nextDay.getDate() + 1);

                    const year = nextDay.getFullYear();
                    const month = (nextDay.getMonth() + 1).toString().padStart(2, "0");
                    const day = nextDay.getDate().toString().padStart(2, "0");

                    const nextDayFormatted = `${year}-${month}-${day}`;

                    fecha2Input._flatpickr.set("minDate", nextDayFormatted);
                    fecha2Input.setAttribute('min', nextDayFormatted);

                    if( typeof fecha2Input._flatpickr.selectedDates[0] === 'undefined'){
                        fecha2Input._flatpickr.setDate(nextDayFormatted);
                        fecha2Input.setAttribute('value', nextDayFormatted);
                        end = nextDayFormatted;
                    }

                }
            }
        });

        flatpickr(fecha2Input, {
            minDate: "<?php echo Carbon::now()->addDay()->format('Y-m-d'); ?>",
            locale : "<?php echo pll_current_language(); ?>",
            onChange: function(selectedDates, dateStr, instance) {
                // Comprobar si fecha2 es mayor que fecha1
                const fecha1 = fecha1Input._flatpickr.selectedDates[0];
                

                if (fecha1  &&  typeof selectedDates[0] === 'undefined') {
                    alert("<?php pll_e('La fecha de salida debe ser después que la fecha de llegada.') ?>");
                    const nextDay = new Date(fecha1);
                    nextDay.setDate(nextDay.getDate() + 1);

                    fecha2Input._flatpickr.setDate(nextDay);
                }
            }
        });            
        
    });


    // Función para abrir la página de reservas del hotel en una nueva ventana
     // Selección de fecha de llegada
     fecha1Input.addEventListener("input", function(e) {
        console.log(e.target.value);
        fecha1 = e.target.value;
        start = fecha1;
    });

    // Selección de fecha de salida
    fecha2Input.addEventListener("change", function(e) {
        endDate = new Date(e.target.value);
        end = e.target.value;
    });

    function openReservationPage() {
    if (end !== "" && start !== "") {
        if (lang == "es") {
            window.open("https://hotels.cloudbeds.com/es/reservation/gcIxzG#checkin=" + start + "&checkout=" + end);
        } else {
            window.open("https://hotels.cloudbeds.com/reservation/gcIxzG#checkin=" + start + "&checkout=" + end);
        }
    } else {
        if (lang == "es") {
            alert("Debes de ingresar un rango de fechas válido.", "error");
        } else {
            alert("You must enter a valid date range.", "error");
        }
    }
    }


    // Botón de reservar
    var reservarButton = document.getElementById("book_now");
    reservarButton.addEventListener("click", openReservationPage);

</script>

</body>
</html>             