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
$term = get_queried_object();

$draught_links = array();

foreach ( $terms as $term ) {
        $draught_links[] = $term->name;
    }
?>


<?php get_footer();?>