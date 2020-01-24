<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace 
 *  Page		Version		 1.0.0
/* ------------------------------------------------------------------------- */	
?>
<?php get_header(); ?>
	<div id="main" class="content-area relative">
		<main id="main-content" class="site-main" role="main">

			<?php wp_reset_query(); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php 
					if ( is_front_page() && is_home() ) { ?>

					<?php the_content(); ?>

					<?php } elseif ( is_front_page()){
					// Static homepage
					the_content();
					
					} elseif ( is_home()){
					
					// Blog page
					
					} else {
					
					// Everything else
					$large_image_url = null;
					if ( has_post_thumbnail()) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'big-feature'); ?>
				
				<?php } ?>

				
				<section class="text-container">
					<!-- <div class="columns"> -->
						<!-- <div class="column is-9 text-wysiwyg"> -->
							<?php the_content(); ?>
						<!-- </div> -->

						<!-- <div class="column is-3">
							
						</div> -->
					<!-- </div> -->
				</section> 
					

				<?php } ?>

				<?php endwhile; ?>

				<?php endif; ?>

		</main>
	</div>
<?php get_footer(); ?>