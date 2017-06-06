<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Exposed
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="row mar-btm-50 single-comment-list">
    <div class="col-sm-12">
    	<?php if ( have_comments() ) : ?>
	        <h4 class="section-header mar-top-50"><span><?php
					printf( // WPCS: XSS OK.
						esc_html( _nx( 'One COMMENT', '%1$s COMMENTS', get_comments_number(), 'comments title', 'exposed' ) ),
						number_format_i18n( get_comments_number() )
					);
				?></span>
			</h4> 
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'exposed' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'exposed' ) ); ?></div>
				</div><!-- .nav-links -->
			<?php endif; // Check for comment navigation. ?>

	        <ul class="media-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ul',
						'callback' => 'exposed_comments_list' 
					) );
				?>
	        </ul>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'exposed' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'exposed' ) ); ?></div>
				</div><!-- .nav-links -->
			<?php endif; // Check for comment navigation.  
		endif; 
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'exposed' ); ?></p>
		<?php endif; ?>
      </div>
</div> 
<div class="row mar-btm-50">
	<div class="col-sm-12">
		<?php comment_form(); ?>
	</div>
</div> 