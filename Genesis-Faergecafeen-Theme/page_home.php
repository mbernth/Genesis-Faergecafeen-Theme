<?php
/**
 * This file adds the Landing template to the Christianshavns Færgecafe Theme.
 *
 * @author mono voce aps
 * @package Crone
 * @subpackage Customizations
 */

/*
Template Name: Home
*/

//* Add custom body class to the head
add_filter( 'body_class', 'crone_add_body_class' );
function crone_add_body_class( $classes ) {

   $classes[] = 'featured-image';
   return $classes;
   
}

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

add_action( 'wp_enqueue_scripts', 'top_mage_scripts' );
function top_mage_scripts() {
		wp_enqueue_script( 'mono-jquery', get_bloginfo( 'stylesheet_directory' ) . '/js/jquery.min.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'mono-featured-height', get_bloginfo( 'stylesheet_directory' ) . '/js/home.image.height.js', array( 'jquery' ), '1.0.0', true );
}

// Top image and text
add_action( 'genesis_after_header', 'top_image', 1 );
function top_image() {
	$image = get_field( 'top_image' );  //top image
	$headline = get_field( 'headline' );  //top headline
	$text = get_field( 'top_text' );  //top text
	$button_text = get_field( 'button_text' );  //Button text
	$button_url = get_field( 'button_url' );  //Button url
	
	if ( $image || $headline || $text || $button_text || $button_url ) {
		echo '<div class="image-section home-image" style="background-image:url(' . $image . ');">';
		echo '<div class="gradient"><div class="wrap">';
		echo '<h1>' . $headline . '</h1>';
		echo '' . $text . '';
		echo '<a href="' . $button_url . '" class="button" target="_blank">' . $button_text . '</a>';
		echo '</div></div></div>';
	}
	
}



//* Run the Genesis loop
genesis();
