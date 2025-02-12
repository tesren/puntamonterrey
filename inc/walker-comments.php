<?php
	class comment_walker extends Walker_Comment {
		var $tree_type = 'comment';
		var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );
 
		// constructor – wrapper for the comments list
		function __construct() { ?>

			<section class="comments-list">

		<?php }

		// start_lvl – wrapper for child comments list
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>
			
			<section class="child-comments comments-list">

		<?php }
	
		// end_lvl – closing wrapper for child comments list
		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>

			</section>

		<?php }
		

		// start_el – HTML for comment template
		function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
			$depth++;
			$GLOBALS['comment_depth'] = $depth;
			$GLOBALS['comment'] = $comment;
			$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); 
	
			if ( 'article' == $args['style'] ) {
				$tag = 'article';
				$add_below = 'comment';
			} else {
				$tag = 'article';
				$add_below = 'comment';
			} ?>

			<article <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
				
            <div class="row justify-content-center border border-1 border-secondary rounded-2 mb-5 pt-2">
                <!--Imagen gravatar
                <div class="col-5 col-lg-2 text-center">
                    <figure class="gravatar mb-0"><?php echo get_avatar( $comment, 100, 'https://0.gravatar.com/avatar/f45834feb5ac84a69cc8bbabe902f6da?s=96&d=mm&r=g', 'Author’s gravatar' ); ?></figure>
                </div>-->

                <!--Autor, fecha-->
                <div class="col-12">
                    <div class="comment-meta post-meta" role="complementary">

                        <span class="comment-author pe-2 fw-bold fs-3 text-capitalize">
                            <?php comment_author(); ?>
                        </span>

                        <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                        <br>
                        <time class="comment-meta-item fw-light" datetime="<?php comment_date('d-m-Y') ?>T<?php comment_time('H:iP') ?>" itemprop="datePublished"><?php comment_date('jS F Y') ?>, <?php comment_time() ?></time>

                        <?php edit_comment_link('<p class="comment-meta-item">Edit this comment</p>','',''); ?>
                        <?php if ($comment->comment_approved == '0') : ?>
                        <p class="comment-meta-item"><?php pll_e('Su comentario está a la espera de moderación'); ?></p>
                        <?php endif; ?>
                    </div>
                    
                </div>

				<div class="col-12 comment-content post-content secondary-text mt-3" itemprop="text">
                    <?php comment_text() ?>
				</div>
                
            </div>
            

		<?php }

		// end_el – closing HTML for comment template
		function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

			</article>

		<?php }

		// destructor – closing wrapper for the comments list
		function __destruct() { ?>

			</section>
		
		<?php }

	}
?>