<?php
    /*
    Template Name: Plantilla Eco-Friendly
    */
    get_header();
?>

<div class="position-relative">

    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php echo get_the_title(); ?>" class="w-100" style="height:50vh; object-fit:cover;">

    <img width="260px" src="<?php echo get_template_directory_uri(); ?>/assets/images/eco-circle.webp" alt="Eco friendly" class="position-absolute top-100 start-50 z-2" style="transform: translate(-50%, -50%);">
</div>

<div class="position-relative" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp'); padding:140px 0;">

    <div class="container position-relative z-1">

        <div class="w-100">

            <div class="text-center mb-4">
                
                <a target="_blank" rel="noopener noreferrer" href="https://www.tripadvisor.com/Hotel_Review-g7109171-d2366461-Reviews-Punta_Monterrey_Tropical_Beach_Resort-Las_Lomas_Pacific_Coast.html">
                    <img src="https://www.tripadvisor.com/img/cdsi/langs/awards/GreenLeaders_Logo-17354-2.png" alt="TripAdvisor" class="widGRNImg" id="S_GREEN_LEADER_LOGO">
                </a>
                    
            </div>
            
            <div class="w-100 bg-white p-2 p-lg-5" style="box-shadow: 5px 7px 0 0 #CCCCCC;">
                <div class="card rounded-0 border border-top-0 border-start-0 border-end-0 border-dark border-1">

                    <div class="card-header bg-white" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link-dark collapsed fw-bold fs-1 w-100 d-flex" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <img class="me-2 align-self-center" height="45px" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/faq-icon-1.png"> ENERGÍA ELÉCTRICA <span class="extralight-font">+</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="">
                        <div class="card-body p-5">
                            <?php echo get_field('electric_energy');?>
                        </div>
                    </div>

                </div>

                <div class="card rounded-0 border border-top-0 border-start-0 border-end-0 border-dark border-1">
                    <div class="card-header bg-white" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link-dark collapsed fw-bold fs-1 w-100 d-flex" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <img class="me-2 align-self-center" height="45px" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/faq-icon-2.png"> AGUA POTABLE <span class="extralight-font">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="">
                        <div class="card-body p-5">
                            <?php echo get_field('clean_water');?>
                        </div>
                    </div>
                </div>

                <div class="card rounded-0 border border-top-0 border-start-0 border-end-0 border-dark border-1">
                    <div class="card-header bg-white" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link-dark collapsed fw-bold fs-1 w-100 d-flex" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <img class="me-2 align-self-center" height="45px" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/faq-icon-3.png"> RESIDUOS SÓLIDOS <span class="extralight-font">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="">
                        <div class="card-body p-5">
                            <?php echo get_field('solid_trash');?>
                        </div>
                    </div>
                </div>

                <div class="card rounded-0 border border-top-0 border-start-0 border-end-0 border-dark border-1">
                    <div class="card-header bg-white" id="heading4">
                        <h5 class="mb-0">
                            <button class="btn btn-link-dark collapsed fw-bold fs-1 w-100 d-flex" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <img class="me-2 align-self-center" height="45px" src="<?php echo get_template_directory_uri()?>/assets/icons/amenities/faq-icon-4.png"> PRÁCTICAS AMBIENTALES DE OPERACIÓN <span class="extralight-font">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-bs-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4" style="">
                        <div class="card-body p-5">
                            <?php echo get_field('eco_responsability');?>                        
                        </div>
                    </div>
                </div>
            </div>

        </div>
            
    </div> 

</div>

<?php get_footer(); ?>