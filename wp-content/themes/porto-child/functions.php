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
        <li style="padding-top: 0.4em; padding-bottom: 0.4em" class="porto-info-list-item"><i style="font-size: 1.1rem; color: #00396F;" class="porto-info-icon far fa-check-circle"></i>
			<div class="porto-info-list-item-desc" font-size:="" 16px;="" style="font-size: 16px;"><a class="text-secondary" title="Перейти к услуге <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></li>
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
add_shortcode( 'service', 'services' );




function services01($atts, $content = null){
    ob_start();
	
global $porto_settings, $porto_layout, $post, $porto_member_socials;

$featured_posts = get_field($atts['field']);
		
if( $featured_posts ): ?>
    <ul class="porto-info-list block-ul-zw mb-0">

    <?php  foreach( $featured_posts as $post ): 
        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); 
?>
        <li style="padding-top: 0.4em; padding-bottom: 0.4em" class="porto-info-list-item"><i style="font-size: 1.1rem; color: #00396F;" class="porto-info-icon far fa-check-circle"></i>
			<div class="porto-info-list-item-desc" font-size:="" 16px;="" style="font-size: 16px;"><a class="text-secondary" title="Перейти к услуге <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></li>
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
add_shortcode( 'service01', 'services01' );?>




<?php function services02($atts, $content = null){
    ob_start();
	
global $porto_settings, $porto_layout, $post, $porto_member_socials;

$featured_posts = get_field($atts['field']);
		
if( $featured_posts ): ?>
<div class="container">
	<div class="row">
		<div class="col-2 d-none d-lg-block">
			<img alt="Bootstrap Image Preview" src="https://via.placeholder.com/150" />
		</div>
		<div class="col-12 col-md-12 col-lg-10">
			<div class="row">
				<div class="col-4 col-md-2 d-block d-lg-none">
					<img alt="Bootstrap Image Preview" src="https://via.placeholder.com/100" />
				</div>
				<div class="col-8 col-md-10 d-block title-block">
					<a href="#"><h3 class="mb-0 mb-lg-3"><?php echo $atts['field1'] ?></h3></a>
				</div>
<div class="porto-separator col-12  mt-3 mt-lg-0"><hr class=" separator-line align_center solid" style="background-color:rgba(0,0,0,0.06);"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="ulli list-serviсes-hm list list-icons mb-0">
						<?php  foreach( $featured_posts as $post ): 
        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); 
?>
						<li class="mb-2 list-item">
							<a class="text-secondary" title="Перейти к услуге <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
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
add_shortcode( 'service02', 'services02' );?>






<?php function services03($atts, $content = null){
    ob_start();
	
global $porto_settings, $porto_layout, $post, $porto_member_socials;

$featured_posts = get_field($atts['field']);


if( $featured_post ): ?>
    <h3><?php echo esc_html( $featured_post->post_title ); ?></h3>
<?php endif; 




    $output = ob_get_contents();
    ob_end_clean(); 
    return  $output;
}?>
<?php
add_shortcode( 'service03', 'services03' );?>

