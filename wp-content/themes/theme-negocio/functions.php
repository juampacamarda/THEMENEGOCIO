<?php
//nav menu and thumbnails
if (function_exists('register_nav_menus')){
	register_nav_menus (array('superior'=>'Menu Principal Superior'));
	register_nav_menus (array('footer-a'=>'Menu footer a'));
	register_nav_menus (array('footer-b'=>'Menu footer b'));

}
function add_link_atts($atts) {
$atts['class'] = "nav-link";
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');
//navlink
if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' );
}
//mostrar barra admin
if (is_user_logged_in()) {
    show_admin_bar(true);
}#end if
//abajo carga shortcodes
// Adding Shortcodes to the_excerpt() function
add_filter('the_excerpt', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');
//abao carga estilos
function loviz_scripts(){
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() .'/assets/scss/theme-negocio.min.css');
	wp_enqueue_script('theme-js', get_stylesheet_directory_uri() .'/assets/theme-negocio.min.js');

}
add_action('wp_enqueue_scripts','loviz_scripts');
//subir svg
function custom_mimes( $mimes = array() ) {
	// New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'custom_mimes' );
//fin subir svg