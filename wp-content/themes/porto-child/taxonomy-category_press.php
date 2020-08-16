<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post;
?>
<?php get_header();?>

<?php
// get the current taxonomy term
$term = get_queried_object();


// vars
$image = get_field('image', $term);
$color = get_field('color', $term);

?>
<style type="text/css">
	
	.entry-title a {
		color: <?php echo $color; ?>;
	}
	
	<?php if( $image ): ?>
	.site-header {
		background-image: url(<?php echo $image['url']; ?>);
	}
	<?php endif; ?>
	
</style>
<div class="wrap">
	
	<?php // Remaining template removed from example ?>



<?php get_footer();?>