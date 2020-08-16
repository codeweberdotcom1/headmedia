<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $wp_query;
$term    = $wp_query->queried_object;
$term_id = $term->term_id;


?>

<?php get_header();?>


<?php $term = get_queried_object();?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
		<?php if ( category_description() ) : ?>
		<div class="page-content">
			
			<?php echo category_description(); ?>
		</div>
	<?php endif; ?>




<?php get_footer();?>