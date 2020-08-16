<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post;
?>
<?php get_header();?>

<?php if( get_field('image_post') ): ?>
    <img src="<?php the_field('image_post'); ?>" />
<?php endif; ?>

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



<?php $pages = get_pages(array( 'child_of'=>1 )); ?>
<ul>
	<?php foreach( $pages as $page ){ ?>
		<li>
			<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
			<h1><?php echo get_the_title($page); ?></h1>
			<?php echo get_the_excerpt($page); ?>
		</li>
	<?php } ?>
</ul>
<?php
$queried_object = get_queried_object();
    var_dump( $queried_object );
  ?>


<?php get_footer();?>