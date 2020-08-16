<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post;
?>
<?php get_header();?>


<?php $term = get_queried_object();

$terms = get_terms( '$term' );

if( $terms && ! is_wp_error($terms) ){
	echo "<ul>";
	foreach( $terms as $term ){
		echo "<li>". $term->name ."</li>";

	}
	echo "</ul>";
}


<?php get_footer();?>