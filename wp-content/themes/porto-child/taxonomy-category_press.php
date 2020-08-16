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


    $terms = get_queried_object();
    foreach($terms as $term) {
        echo  get_term_link($term);
    }
  ?>


<?php get_footer();?>