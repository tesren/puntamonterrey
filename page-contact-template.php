<?php 
    /*
    Template Name: Plantilla Contacto
    */

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    
    // Codigo del form
    if( isset($_POST['submit']) and empty($_POST['subject']) ){

        if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce']) ) {
            // nonce check failed
            die( 'Security check' );
        }
        else{
    
            $client_name = $_POST['client_name'];
            $client_email = $_POST['client_email'];
            $client_phone = $_POST['client_phone'];
            $client_message = $_POST['client_message'];
            
            $author_id = get_current_user_id() ?: 1;

            //creamos post
            $message_post = array(
                'post_type'   => 'mensaje',
                'post_title'   =>  $client_name,
                'post_status'  => 'publish',
                'post_author'  => $author_id,
                'meta_input'   => array(
                    'contact_name' => $client_name,
                    'contact_email' => $client_email,
                    'contact_phone' => $client_phone,
                    'contact_message' => $client_message,
                ),
            );

            wp_insert_post($message_post);


            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'mail.puntamonterrey.com';              //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'info@puntamonterrey.com';                     //SMTP username
                $mail->Password   = 'montPunta$23';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('info@puntamonterrey.com', 'Punta Monterrey');
                $mail->addAddress('puntamonterreyresort@gmail.com');               //Name is optional
                $mail->addReplyTo('info@puntamonterrey.com', 'Information');
                $mail->addBCC('erick@punto401.com');

                //Content
                $mail->isHTML(false);                                  //Set email format to HTML
                $mail->Subject = 'Contacto desde el sitio web de Punta Monterrey';
                $mail->Body = "Un cliente ha dejado sus datos en un formulario del sitio web de Punta Monterrey"."\r\n"."\r\n";
                $mail->Body .= "Info del cliente"."\r\n";
                $mail->Body .= "Nombre: ".$client_name." \r\n";
                $mail->Body .= "Email: ".$client_email." \r\n";
                $mail->Body .= "Tel: ".$client_phone." \r\n";
                $mail->Body .= "Mensaje: ".$client_message." \r\n"."\r\n";
                $mail->Body .= "Contacto desde ".home_url()." \r\n";

                $mail->send();
                
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


            //wp_safe_redirect( $_SERVER['REQUEST_URI'] );
            wp_safe_redirect(add_query_arg('form-submitted', true, home_url($wp->request)));

    
        }
      
    
    }

    get_header(); 
?>

<div class="row justify-content-center py-5" style="min-height:80vh; background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/stripe-bg-min.webp');">

    <div class="col-11 col-lg-6 bg-white p-3 p-lg-5" style="box-shadow: 7px 7px 0 0 #CCCCCC;">
        <h1 class="text-center mb-5"><?php echo get_the_title(); ?></h1>
        
        <form action="" method="post">
            <?php wp_nonce_field( -1, '_wpnonce', true, true); ?>

            <div class="fs-5 mb-3">Envíanos un mensaje</div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Nombre" required>
                <label for="floatingInput">Nombre</label>
            </div>

            <div class="d-none">
                <input type="text" name="subject" id="subject" placeholder="Asunto">
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="client_email" name="client_email" placeholder="Email" required>
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="phone" class="form-control" id="client_phone" name="client_phone" placeholder="Teléfono">
                <label for="client_phone">Teléfono</label>
            </div>

            <div class="form-floating mb-4">
                <textarea class="form-control" placeholder="Escribe tu mensaje" id="client_message" name="client_message" style="height: 130px"></textarea>
                <label for="floatingTextarea">Mensaje</label>
            </div>

            <input type="submit" name="submit" value="Enviar" <?php if(isset($_GET['form-submitted'])){echo 'disabled';}; ?> class="btn btn-dark w-100 rounded-0">

        </form>

        <?php if(isset($_GET['form-submitted'])):?>
            <div class="fs-5 text-success text-center my-3">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/circle-check-regular.svg" alt="" width="20px"> Gracias, su mensaje ha sido enviado
            </div>
        <?php endif;?>

    </div>

</div>

<?php get_footer(); ?>