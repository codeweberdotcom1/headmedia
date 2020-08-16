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

<?php if ( category_description() ) : ?>
		<div class="page-content">
			<?php echo category_description(); ?>
		</div>
	<?php endif; ?>

	<div class="member-row members-container row <?php echo porto_generate_column_classes( $porto_settings['member-columns'] ); ?>">
				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'content', 'archive-member' );
				}
				?>
			</div>
			<?php porto_pagination(); ?>
		</div>
		<?php wp_reset_postdata(); ?>




<?php get_footer();?>