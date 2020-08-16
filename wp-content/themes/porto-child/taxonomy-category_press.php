<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post;
?>
<?php get_header();?>



<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
		</div>
		<div class="col-md-6">
			<p>
				<?php if ( category_description() ) : ?>
		<div class="page-content">
			<?php echo category_description(); ?>
		</div>
	<?php endif; ?>
			</p>
		</div>
	</div>
</div>
<?php
$queried_object = get_queried_object();
    var_dump( $queried_object );
  ?>


<?php get_footer();?>