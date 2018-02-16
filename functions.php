<?php
function remove_parent_theme_features() {
}
add_action( 'after_setup_theme', 'remove_parent_theme_features', 1 );

/* ==================== */

function remove_dashboard_meta() {
    remove_meta_box('mk_posts_like_stats', 'dashboard', 'normal'); //Removes the 'incoming links' widget
}
add_action('admin_init', 'remove_dashboard_meta');

/* ==================== */

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '
  
  <style>
  </style>
  
  ';
}

/* ==================== */

function modify_cpt_custom_post_type1() {
    global $wp_post_types;
    $p1 = 'edge';
	
    if ( empty ( $wp_post_types[ $p1 ] )
        or ! is_object( $wp_post_types[ $p1 ] )
        or empty ( $wp_post_types[ $p1 ]->labels )
        )
        return;
	
    $wp_post_types[ $p1 ]->publicly_queryable    	= false;
	//$wp_post_types[ $p ]->labels->name     			= 'Parceiros';
	//$wp_post_types[ $p ]->labels->menu_name     	= 'Parceiros';
	//$wp_post_types[ $p ]->labels->all_items     	= 'Ver todos';
	//$wp_post_types[ $p ]->labels->add_new     		= 'Adicionar';
	//$wp_post_types[ $p ]->labels->featured_image    = 'Logo';
	//$wp_post_types[ $p ]->labels->singular_name		= 'Parceiro';
	//$wp_post_types[ $p ]->labels->edit_item 		= 'Parceiro';
	//$wp_post_types[ $p ]->labels->add_new_item 		= 'Adicionar Parceiro';
}
add_action( 'wp_loaded', 'modify_cpt_custom_post_type1', 0 );

/* ==================== */

/* ==================== */

function modify_cpt_custom_post_type2() {
    global $wp_post_types;
	$p2 = 'tab_slider';
    	
	if ( empty ( $wp_post_types[ $p2 ] )
        or ! is_object( $wp_post_types[ $p2 ] )
        or empty ( $wp_post_types[ $p2 ]->labels )
        )
        return;
	
	$wp_post_types[ $p2 ]->publicly_queryable    	= false;
}
add_action( 'wp_loaded', 'modify_cpt_custom_post_type2', 0 );

/* ==================== */

/* ==================== */

function modify_cpt_custom_post_type3() {
    global $wp_post_types;
	$p3 = 'slideshow';

	if ( empty ( $wp_post_types[ $p3 ] )
        or ! is_object( $wp_post_types[ $p3 ] )
        or empty ( $wp_post_types[ $p3 ]->labels )
        )
        return;

	$wp_post_types[ $p3 ]->publicly_queryable    	= false;
}
add_action( 'wp_loaded', 'modify_cpt_custom_post_type3', 0 );

/* ==================== */

/* ==================== */

function modify_cpt_custom_post_type4() {
    global $wp_post_types;
	$p4 = 'pricing';

	if ( empty ( $wp_post_types[ $p4 ] )
        or ! is_object( $wp_post_types[ $p4 ] )
        or empty ( $wp_post_types[ $p4 ]->labels )
        )
        return;
	
	$wp_post_types[ $p4 ]->publicly_queryable    	= false;
}
add_action( 'wp_loaded', 'modify_cpt_custom_post_type4', 0 );

/* ==================== */

/* ==================== */

function modify_cpt_custom_post_type5() {
    global $wp_post_types;
	$p5 = 'faq';

	if ( empty ( $wp_post_types[ $p5 ] )
        or ! is_object( $wp_post_types[ $p5 ] )
        or empty ( $wp_post_types[ $p5 ]->labels )
        )
        return;
	
	$wp_post_types[ $p5 ]->publicly_queryable    	= false;
}
add_action( 'wp_loaded', 'modify_cpt_custom_post_type5', 0 );

/* ==================== */

/* ==================== */

function modify_cpt_custom_post_type6() {
    global $wp_post_types;
	$p6 = 'banner_builder';

	if ( empty ( $wp_post_types[ $p6 ] )
        or ! is_object( $wp_post_types[ $p6 ] )
        or empty ( $wp_post_types[ $p6 ]->labels )
        )
        return;

	$wp_post_types[ $p6 ]->publicly_queryable    	= false;
}
add_action( 'wp_loaded', 'modify_cpt_custom_post_type6', 0 );

/* ==================== */

/* ==================== */

function modify_cpt_custom_post_type7() {
    global $wp_post_types;
	$p7 = 'animated-columns';
    		
	if ( empty ( $wp_post_types[ $p7 ] )
        or ! is_object( $wp_post_types[ $p7 ] )
        or empty ( $wp_post_types[ $p7 ]->labels )
        )
        return;
	
	$wp_post_types[ $p7 ]->publicly_queryable    	= false;
}
add_action( 'wp_loaded', 'modify_cpt_custom_post_type7', 0 );

/* ==================== */

/* ==================== */

function modify_cpt_custom_post_type8() {
    global $wp_post_types;
	$p8 = 'photo_album';

	if ( empty ( $wp_post_types[ $p8 ] )
        or ! is_object( $wp_post_types[ $p8 ] )
        or empty ( $wp_post_types[ $p8 ]->labels )
        )
        return;
	
	$wp_post_types[ $p8 ]->publicly_queryable    	= false;
}
add_action( 'wp_loaded', 'modify_cpt_custom_post_type8', 0 );

/* ==================== */