<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $wp_query;


?>

<?php get_header();?>

<?php
$terms = get_terms(
  array(
    'taxonomy'   => 'my_taxonomy',
    'hide_empty' => true,
    'pad_counts'  => true,
    'orderby' => 'count',
    'order' => 'DESC',
  )
);
  
if ( ! empty( $terms ) && is_array( $terms ) ) {
  echo '<ul class="list-my_taxonomy">';
  foreach ( $terms as $term ) { ?>
    <li>
      <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
        <?php echo $term->name; ?> (<?php echo $term->count; ?>)
      </a>
    </li>
    <?php
  }
  echo '</ul>';
}
?>




<?php get_footer();?>