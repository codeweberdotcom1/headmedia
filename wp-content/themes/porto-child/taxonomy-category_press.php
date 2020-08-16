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
   $tax = $wp_query->get_queried_object();
   echo ''. $tax->name . '';
   echo "<br>";
   echo ''. $tax->description .''; 
?>



<?php get_footer();?>