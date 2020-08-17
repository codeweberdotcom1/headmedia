<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post;
?>
<?php get_header();?>

<?php if( get_field('image_posts') ): ?>
    <img src="<?php the_field('image_posts'); ?>" />
<?php endif; ?>





<?php get_footer();?>