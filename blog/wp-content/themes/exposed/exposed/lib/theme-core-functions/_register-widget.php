<?php 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function exposed_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'exposed' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'exposed' ),
		'before_widget' => '<aside id="%1$s" class="side-bar bar-left ash-bg padd-45 recent-post">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="mar-btm-30">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar 1', 'exposed' ),
		'id'            => 'page-1',
		'description'   => esc_html__( 'Add widgets here.', 'exposed' ),
		'before_widget' => '<aside id="%1$s" class="side-bar bar-left ash-bg padd-45 recent-post page">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="mar-btm-30">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar 2', 'exposed' ),
		'id'            => 'page-2',
		'description'   => esc_html__( 'Add widgets here.', 'exposed' ),
		'before_widget' => '<aside id="%1$s" class="side-bar bar-left ash-bg padd-45 page-menu page">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class=" yellow">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar 3', 'exposed' ),
		'id'            => 'page-3',
		'description'   => esc_html__( 'Add widgets here.', 'exposed' ),
		'before_widget' => '<aside id="%1$s" class="side-bar bar-left ash-bg padd-45 recent-post page">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="mar-btm-30">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar 4', 'exposed' ),
		'id'            => 'page-4',
		'description'   => esc_html__( 'Add widgets here.', 'exposed' ),
		'before_widget' => '<aside id="%1$s" class="side-bar bar-left ash-bg padd-45 recent-post page">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="mar-btm-30">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar 5', 'exposed' ),
		'id'            => 'page-5',
		'description'   => esc_html__( 'Add widgets here.', 'exposed' ),
		'before_widget' => '<aside id="%1$s" class="side-bar bar-left ash-bg padd-45 recent-post page">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="mar-btm-30">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'exposed' ),
		'id'            => 'sidebar-f',
		'description'   => esc_html__( 'Add widgets here.', 'exposed' ),
		'before_widget' => '<div class="col-md-4 col-sm-6 col-xs-12"><div id="%1$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="section-header"><span>',
		'after_title'   => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'exposed_widgets_init' );




//Adding widgets file
if ( file_exists( EXPOSED_DIR . '/inc/widgets/exposed-widget.php' )) { 
    require EXPOSED_DIR . '/inc/widgets/exposed-widget.php';
}
