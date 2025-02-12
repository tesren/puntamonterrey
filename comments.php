<div class="w-100 text-start" id="comments">

    <?php if( have_comments() ): ?>
        
         
             <?php 

             //$replytext = pll_e('Responder');
             
             $args = array(
                 'walker'       => new comment_walker(),
                 'max_depth'    => '1',
                 'style'        => 'ol',
                 'callback'     => null,
                 'end-callback' => null,
                 'type'         => 'all',
                 'reply-text'   => pll('Responder'),
                 'page'         => '',
                 'per_page'     => '',
                 'avatar_size'  => '',
                 'reverse_top_level'=> true,
                 'reverse_children'=> true,
                 'echo'         => true,


             );
             
             wp_list_comments($args); ?>
        


            <!--comentarios cerrados-->
           <?php if(!comments_open() && get_comments_number() ): ?>
                <p><?php echo pll_e('Comentarios cerrados'); ?></p>
         <?php endif;
        endif;?>

    <div class="text-center form-comentarios">
        <?php 

            //traducciones
             $nombre = pll__('Nombre');
            $email  = pll__('Email');
            $website= pll__('Website');
            //$labelSubmit= pll_e('Enviar');
            //$titleReply= pll_e('Deja un comentario');

            $fields = array(

                'author' => '<div class="form-group text-start mb-3"><label for="author">' . __( $nombre, 'domainreference' ) . '</label> <span class="required">*</span> <input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required /></div>',
                    
                'email' => '<div class="form-group text-start mb-3"><label for="email">' . __( $email, 'domainreference' ) . '</label> <span class="required">*</span><input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required /></div>',
                    
                'url' =>'<div class="form-group text-start last-field mb-3"><label for="url">' . __( $website, 'domainreference' ) . '</label><input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>'
				
            );

            $argsf = array(
                'label_submit'=>pll__('Enviar'),
                'title_reply' => pll__('Deja un comentario'),
                'class_submit'=> 'mb-5 mt-3 btn btn-darkgreen px-4 fs-5',
                'comment_field'=> '<div class="form-group text-start mb-3"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <span class="required">*</span><textarea id="comment" class="form-control mb-3" name="comment" rows="4" required></textarea></p>',
                'fields'      => $fields,
            );
    
            comment_form($argsf); ?>
    </div>
</div>
</div>