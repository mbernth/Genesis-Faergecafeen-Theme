<?php
/**
 * This file adds the Landing template to the Christianshavns Færgecafe Theme.
 *
 * @author mono voce aps
 * @package Crone
 * @subpackage Customizations
 */

/*
Template Name: Events
*/

//* Add custom body class to the head
add_filter( 'body_class', 'crone_add_body_class' );
function crone_add_body_class( $classes ) {

   $classes[] = 'events';
   return $classes;
   
}

//* Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

/* check if the flexible content field has rows of data
add_action( 'genesis_after_entry_content', 'mono_flexible_gridset', 1 );
function mono_flexible_gridset() {
	
	if( have_rows('content_rows') ):

		// loop through the rows of data
    	while ( have_rows('content_rows') ) : the_row();

        	if( get_row_layout() == 'full_width_column' ):
				
				if (get_sub_field('hide')){
					}else{
					
				if (get_sub_field('dark_background')){
				echo '<div class="gridcontainer dark_background">';
					}else{
				echo '<div class="gridcontainer">';
				}
				
				echo '<div class="wrap">';
					echo '<div class="coll1">';
						if ( get_sub_field('headline') ){
							echo '<h2 class="entry-title">';
        					the_sub_field('headline');
							echo '</h2>';
						}else{
						}
						the_sub_field('content');
					echo '</div>';
				echo '</div>';
				echo '</div>';
				
				}
				
        	elseif( get_row_layout() == 'two_columns' ):
			
				if (get_sub_field('hide')){
					}else{
						
				if (get_sub_field('dark_background')){
				echo '<div class="gridcontainer dark_background">';
					}else{
				echo '<div class="gridcontainer">';
				}
				
				echo '<div class="wrap">';
					echo '<div class="coll2">';
						if ( get_sub_field('headline_left') ){
							echo '<h2 class="entry-title">';
        					the_sub_field('headline_left');
							echo '</h2>';
						}else{
						}
						if ( get_sub_field('image_left') ){
							echo '<img src="';
        					the_sub_field('image_left');
							echo '">';
						}else{
						}
						the_sub_field('content_left');
					echo '</div>';
					echo '<div class="coll2">';
						if ( get_sub_field('headline_right') ){
							echo '<h2 class="entry-title">';
        					the_sub_field('headline_right');
							echo '</h2>';
						}else{
						}
						if ( get_sub_field('image_right') ){
							echo '<img src="';
        					the_sub_field('image_right');
							echo '">';
						}else{
						}
						the_sub_field('content_right');
					echo '</div>';
				echo '</div>';
				echo '</div>';
				
				}
				
			elseif( get_row_layout() == 'three_columns' ):
				
				if (get_sub_field('hide')){
					}else{
						
				if (get_sub_field('dark_background')){
				echo '<div class="gridcontainer dark_background">';
					}else{
				echo '<div class="gridcontainer">';
				}
				
				echo '<div class="wrap">';
					echo '<div class="coll3">';
        				the_sub_field('headline_left_3');
					echo '</div>';
					echo '<div class="coll3">';
						the_sub_field('headline_center');
					echo '</div>';
					echo '<div class="coll3">';
						the_sub_field('headline_right_3');
					echo '</div>';
				echo '</div>';
				echo '</div>';
				
				}
				
			elseif( get_row_layout() == 'four_columns' ):
			
				if (get_sub_field('hide')){
					}else{
						
				if (get_sub_field('dark_background')){
				echo '<div class="gridcontainer dark_background">';
					}else{
				echo '<div class="gridcontainer">';
				}

				echo '<div class="wrap">';
					echo '<div class="coll4">';
        				the_sub_field('gridset_4_1');
					echo '</div>';
					echo '<div class="coll4">';
						the_sub_field('gridset_4_2');
					echo '</div>';
					echo '<div class="coll4">';
						the_sub_field('gridset_4_3');
					echo '</div>';
					echo '<div class="coll4">';
						the_sub_field('gridset_4_4');
					echo '</div>';
				echo '</div>';
				echo '</div>';
				}
				
			elseif( get_row_layout() == 'full_width_area' ):
				
				if (get_sub_field('hide')){
					}else{
				echo '<div class="gridcontainer">';
				}
					echo '<div class="coll1">';
						the_sub_field('full_width');
					echo '</div>';
				echo '</div>';
				
				
        	endif;

    	endwhile;

	else :

    // no layouts found

	endif;

}
*/


//* Run the Genesis loop
genesis();
