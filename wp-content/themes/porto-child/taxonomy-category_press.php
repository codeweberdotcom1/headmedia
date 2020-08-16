<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $wp_query;
$term    = $wp_query->queried_object;
$term_id = $term->term_id;
$member_options = get_metadata( $term->taxonomy, $term->term_id, 'member_options', true ) == 'member_options' ? true : false;

?>

<?php get_header();?>



<?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
		<?php if ( category_description() ) : ?>
		<div class="page-content">
			
			<?php echo category_description(); ?>
		</div>
	<?php endif; ?>




<?php get_footer();?>