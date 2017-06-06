<?php 
/**
 * Theme Custom Functions 
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


/**=====================================================================
 * Exposed Pagination
 =====================================================================*/
 

if ( ! function_exists( 'exposed_pagination' ) ){ 

	function exposed_pagination($numpages = '', $pagerange = '', $paged='') {

		if (empty($pagerange)) {
			$pagerange = 2;
		}

		global $paged;
		if (empty($paged)) {
			$paged = 1;
		}
		if ($numpages == '') {
			global $wp_query;
			$numpages = $wp_query->max_num_pages;
				if(!$numpages) {
				    $numpages = 1;
			}
		}
	 
		$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args   = array();
		$url_parts    = explode( '?', $pagenum_link );
		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}
		$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';
		$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
		$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	  	$pagination_args = array(
			'base'      => $pagenum_link,
			'format'    => $format,
			'total'     => $numpages,
			'current'   => $paged,
			'mid_size'  => 3,
			'show_all'  => False,
			'add_args'  => array_map( 'urlencode', $query_args ),
			'prev_text' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
			'next_text' => '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
			'type'      => 'list',
	  	);

	  	$paginate_links = paginate_links($pagination_args);

	  	if ($paginate_links) { 
	  		printf(esc_html__('%s','exposed'),$paginate_links); 
	  	} 
	}
}
 
 
/**=====================================================================
 * Exposed Comment List 
=====================================================================*/
 
function exposed_comments_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class('media media-custom'); ?> id="comment-<?php comment_ID() ?>">
	    <div class="media padd-btm-35 media-custom2 mar-top-75">
	        <div class="media-left">
	            <a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
	            	<?php echo get_avatar( $comment, 60 ); ?>
	            </a>
	        </div>
	        <div class="media-body">
	            <h5 class="inline-block media-heading"><?php comment_author_link() ?></h5>
	            <span class="font-10 mar-left-10 letter-spacing-1"><?php printf( esc_html__( '%1$s','exposed' ), get_comment_date( 'M n, Y', $comment ) ); ?></span>
	            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
	            <?php if ($comment->comment_approved == '0') : ?>
					<p><em><?php esc_html_e('Your comment is awaiting moderation.','exposed'); ?></em></p>
				<?php endif; ?>
	            <?php comment_text() ?>  
	        </div> 
	    </div> 
<?php } 

/**=====================================================================
 * Exposed Comment Form MOdify 
=====================================================================*/
 
function exposed_comment_fields($fields) {
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

    unset($fields['url']);

    $fields['author'] = '<div class="form-group"><div class="col-sm-4">
                            <input type="text" class="form-control input-custom2" id="inputEmail1" placeholder="Name" name="author" value="' . esc_attr( $commenter['comment_author'] ) .
    '">
                        </div>';
    $fields['email'] = '<div class="col-sm-4">
	                        <input type="email" class="form-control input-custom2" id="inputPassword2" placeholder="Email" name="email"  value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '">
	                    </div>';
    $fields['url'] = '<div class="col-sm-4">
                        <input type="text" class="form-control input-custom2" id="inputPassword3" placeholder="Web" name="url" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '">
                    </div></div>';
    return $fields;
}
add_filter('comment_form_default_fields','exposed_comment_fields');

 
/**=====================================================================
 * Exposed Comment form field order change 
=====================================================================*/
 
add_action( 'comment_form_after_fields', 'exposed_form_order_textarea' );
add_action( 'comment_form_logged_in_after', 'exposed_form_order_textarea' );

function exposed_form_order_textarea()
{
    echo '<div class="form-group mar-top-20">
        <div class="col-sm-12">
        <textarea class="form-control input-custom2" placeholder="Comment" name="comment" rows="7"></textarea>
        </div>
        </div>';
}

/**=====================================================================
 * Exposed Comment args change
=====================================================================*/
  
add_filter( 'comment_form_defaults', 'exposed_comment_form_allowed_tags' );
function exposed_comment_form_allowed_tags( $defaults ) { 

	$defaults['class_form'] = 'form-horizontal'; 
	$defaults['class_submit'] = 'button2 black-bg'; 
	$defaults['title_reply'] = wp_kses( __('Leave A Comment','exposed'  ), array('span'=> array('class' => array())) ); 
	$defaults['title_reply_before'] =  '<h4 class="section-header mar-top-50"><span>';
	$defaults['title_reply_after'] =  '</span></h4>';
    $defaults['comment_notes_before'] =  esc_html__( '','exposed' );
    $defaults['comment_field'] = '';
	$defaults['label_submit'] =  esc_html__( 'Submit','exposed' ); 
	return $defaults;

}


/**=====================================================================
 * Exposed nav menus
=====================================================================*/
 // main menu
function exposed_main_menu(){
	wp_nav_menu( array(
		'theme_location'    => 'mainmenu',
		'depth'             => 3,
		'container'         => false,
		'menu_id'        	=> 'exp',
		'menu_class'        => 'nav navbar-nav',
		'walker'       		=> new exposed_navwalker(),
		'fallback_cb'       => 'exposed_default_menu'
	));
}
 // pop up menu
function exposed_pop_menu(){
	wp_nav_menu( array(
		'theme_location'    => 'popmenu',
		'depth'             => 2,
		'container'         => false,
		'menu_id'        	=> 'popup',
		'menu_class'        => 'row', 
		'fallback_cb'       => 'exposed_default_menu'
	));
}


/**=====================================================================
 * Exposed fallback menu
=====================================================================*/
 
if(is_user_logged_in()):
	function exposed_default_menu() {
		?>
		<ul class="nav navbar-nav"> 
			<li class="dropdown active">
		        <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php esc_html_e( 'ADD MENU', 'exposed' ); ?></a> 
		    </li>                
		</ul>
		<?php
	}
endif;



/**=====================================================================
 * Exposed Category Query
=====================================================================*/

function exposed_category_query(){
	$exposed_all_terms = array();
	$exposed_term_name = array();
	$exposed_term_slug = array();
	$exposed_terms = get_terms( 'category' );
	if ( ! empty( $exposed_terms ) && ! is_wp_error( $exposed_terms ) ){
	    foreach ( $exposed_terms as $exposed_term ) {
	        $exposed_term_name[] =  $exposed_term->name;
	        $exposed_term_slug[] =  $exposed_term->term_id;
	    }
	}
	$exposed_all_terms =  array_combine($exposed_term_name, $exposed_term_slug);
	if(empty($exposed_all_terms)){
		return $exposed_all_terms = array( 'None' => 'none');
	}else{
		return $exposed_all_terms;
	}

}

/**=====================================================================
 * Exposed Category Query
=====================================================================*/

function exposed_post_query(){
	$exposed_post_title = array();
	$exposed_post_id = array();
	$exposed_posts = array();
	query_posts(array('post_type'=>'post','posts_per_page'=> -1));
	while ( have_posts() ) : the_post();
	     $exposed_post_title[] = get_the_title();
	     $exposed_post_id[] = get_the_ID();
	endwhile;
	wp_reset_query();

	$exposed_posts =  array_combine($exposed_post_title, $exposed_post_id);
	if(empty($exposed_posts)){
		return $exposed_posts = array('none' => esc_html__('None','exposed'));
	}else{
		return $exposed_posts;
	}

}



/**=====================================================================
 * Exposed Category Widget modify
=====================================================================*/

add_filter('wp_list_categories', 'exposed_add_span_cat_count');
function exposed_add_span_cat_count($minoan_links) {
	$minoan_links = str_replace('</a> (', '</a> <span>', $minoan_links);
	$minoan_links = str_replace(')', '</span>', $minoan_links);
	return $minoan_links;
}
function exposed_archive_count_span( $links ) {
	$links = str_replace( '</a>&nbsp;(', '</a><span class="post-count">', $links );
	$links = str_replace( ')', '</span>', $links );
	return $links;
}
add_filter( 'get_archives_link', 'exposed_archive_count_span' );



/**=====================================================================
 * Slider post Dropdown
=====================================================================*/

// show another post type in metabox

function exposed_cmb2_get_post_options( $query_args ) { 
    $args = wp_parse_args( $query_args, array( 
        'post_type'   => 'post', 
        'posts_per_page' => -1, 
        'post_status'    => 'publish' 
    ) );
 
    $posts = get_posts( $args );
 
    $post_options = array();
    if ( $posts ) {
        foreach ( $posts as $post ) {
          $post_options[ $post->ID ] = $post->post_title;
        }
    }
    return $post_options;
}


// remove vc shortcode
function exposed_short_text_remove_shortcode($start=0,$end=90){
	global $post;
	/* Get Post congtent */
	$content = $post->post_content;
	/* Remove visual composer shortcode like [vc_row] link that */
	$desc = strip_tags(do_shortcode($post->post_content));
	/* Remove empty spaces */
	$desc = trim(preg_replace('/\s+/',' ', $desc ));
	/* Get content with limit */
	$desc = mb_strimwidth($desc, $start, $end, '');
	echo $desc = substr($desc,0,strrpos($desc,' '));
}