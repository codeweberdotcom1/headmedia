<?php
/*
 * Template Name: My custom view
 * Template Post Type: category_press
 */ 

global $porto_settings, $porto_layout, $post; ?>
<?php get_header();?>

<?php
	global $porto_settings, $porto_layout, $post, $porto_member_socials;
	

if ( have_posts() ) : ?>

				<div class="container">
					<h1 class="vc_custom_heading h2-hm-zw mb-4 align-left"><?php post_type_archive_title(); ?></h1>
					<?php  foreach( $posts as $post ): 
        // Setup this post for WP functions (variable must be named $post).
											setup_postdata($post); 
											?>
					<div class="row  p-3 mb-3 shadow-hm-zw">
						<div class="col-2 pl-0 d-none d-lg-block">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="col-12 col-md-12 col-lg-10">
							<div class="row">
								<div class="col-4 col-md-2 d-block d-lg-none">
									<?php the_post_thumbnail('thumbnail'); ?>
								</div>
								<div class="col-8 col-md-10 d-block title-block">
									<a href="<?php the_permalink(); ?>"><h3 class="mb-0 mb-lg-3"><?php the_title(); ?></h3></a>
								</div>
								<div class="porto-separator col-12  mt-3 mt-lg-0"><hr class=" separator-line align_center solid" style="background-color:rgba(0,0,0,0.06);"></div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<?php $featured_posts1 = get_field('spisok_podkategorij_dlya_vyvoda');

			if( $featured_posts1 ): ?>
									<ul class="ulli list-serviсes-hm list list-icons mb-0">
										<?php  foreach( $featured_posts1 as $post ): 
        // Setup this post for WP functions (variable must be named $post).
							setup_postdata($post); 
							?>
											<li class="mb-2 list-item">
												<a class="text-secondary" title="Перейти к услуге <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</li>
										<?php endforeach; ?>
									</ul>
									<i title="Перейти к услуге <?php the_title(); ?>" class="red-tooltip view-more Simple-Line-Icons-arrow-right-circle font-weight-semibold"></i>
									<?php 
    // Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata(); ?>
<?php endif; ?>	
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<?php 
    // Reset the global post object so that the rest of the page works correctly.
				wp_reset_postdata(); ?>
			<?php endif; ?>

<?php get_footer();?>