<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post;
?>
<?php get_header();?>


<?php $term = get_queried_object();?>

<?php 

// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  

$GLOBALS['wp_embed']->post_ID = $taxonomy . '_' . $term_id;

?>


<?php get_footer();?>