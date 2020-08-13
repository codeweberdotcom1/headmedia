<?php

add_action( 'wp_enqueue_scripts', 'porto_child_css', 1001 );

// Load CSS
function porto_child_css() {
	// porto child theme styles
	wp_deregister_style( 'styles-child' );
	wp_register_style( 'styles-child', esc_url( get_stylesheet_directory_uri() ) . '/style.css' );
	wp_enqueue_style( 'styles-child' );

	if ( is_rtl() ) {
		wp_deregister_style( 'styles-child-rtl' );
		wp_register_style( 'styles-child-rtl', esc_url( get_stylesheet_directory_uri() ) . '/style_rtl.css' );
		wp_enqueue_style( 'styles-child-rtl' );
	}
}



<?php 




function services($atts, $content = null){
    ob_start();
	
global $porto_settings, $porto_layout, $post, $porto_member_socials;

$featured_posts = get_field($atts['field']);
		
if( $featured_posts ): ?>
    <ul class="porto-info-list block-ul-zw mb-0">
    <?php  foreach( $featured_posts as $post ): 
        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); 
?>
        <li class="porto-info-list-item"><i class="porto-info-icon fas fa-chevron-circle-right"></i>
			<div class="porto-info-list-item-desc" font-size:="" 16px;="" style="font-size: 16px;"><a title="Перейти к услуге <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
<?php
    $output = ob_get_contents();
    ob_end_clean(); 
    return  $output;
}?>
<?php
add_shortcode( 'service', 'services' );?>