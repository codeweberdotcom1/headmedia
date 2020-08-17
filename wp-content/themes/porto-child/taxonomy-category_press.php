<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post; ?>
<?php get_header();?>



    <p><?php 
$tekst = get_field('tekst');
var_dump($tekst);
    echo get_field('tekst'); ?> </p>
    



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



<?php get_footer();?>