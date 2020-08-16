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

<?php if ( category_description() ) : ?>
		<div class="page-content">
			<?php echo category_description(); ?>
		</div>
	<?php endif; ?>

<?php
$queried_object = get_queried_object();
    var_dump( $queried_object );
  ?>


<?php get_footer();?>