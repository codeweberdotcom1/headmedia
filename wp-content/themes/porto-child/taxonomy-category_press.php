<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post; $term?>
<?php get_header();?>

<?php
$image = get_field('imagepress');
var_dump( $image );
if( $image ):

    // Image variables.
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // Thumbnail size attributes.
    $size = 'thumbnail';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];

    // Begin caption wrap.
    if( $caption ): ?>
        <div class="wp-caption">
    <?php endif; ?>

    <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
    </a>

    <?php 
    // End caption wrap.
    if( $caption ): ?>
        <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
        </div>
    <?php endif; ?>
<?php endif; ?>


<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'post'
));

if( $posts ): ?>
	
	<ul>
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	
	<?php endforeach; ?>
	
	</ul>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>






<?php get_footer();?>