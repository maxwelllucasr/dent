<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace 
 *  Archive		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

get_header(); 	
?>
<style type="text/css">
<?php
$categories = get_categories();
foreach($categories as $category) { 
	//print_r($category);
	$custom_field = get_field('category_color', $category );
	if($custom_field) {
		echo ".cat-item-" . $category->term_id . " a {";
		echo "background-color:" . $custom_field;
		echo "} ";
		echo ".category-" . $category->slug . " article {";
		echo "background-color:" . $custom_field;
		echo "} ";
	}
} 
?>
</style>

<div id="main"> <!-- main -->
	<div id="hero" class="cover section p-b-5">
		<div class="container">
			<h1 class="bold">
				<?php
				if ( is_404() || is_category() || is_tag() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h1 class="bold">					
						<?php single_cat_title(); ?>
					</h1>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1 class="bold">					
						<?php single_tag_title(); ?>
					</h1>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1 class="bold">					
						<?php the_time('F jS, Y'); ?>
					</h1>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1 class="bold">
						<?php the_time('F, Y'); ?>
					</h1>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h1 class="bold">
						<?php the_time('Y'); ?>
					</h1>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1 class="bold"> Archives</h1>
				<?php } 
				 }?>	
		
			</h1>
			
		</div>
	</div>
	
	<div id="blog-content" class="main-content section-sm white" role="main">
		<!-- Blog Post Feed -->
		<div class="container">
			<div class="columns is-multiline">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
					<div data-id="post-<?php the_ID(); ?>" <?php post_class('column is-6 feed'); ?> >
						<article onclick="location.href='<?php the_permalink(); ?>';" style="cursor: pointer;">

							<?php
							$post_date = get_the_date( 'F n, Y' );

							$thumbnail_id = get_post_thumbnail_id();
							$thumbnail_url= wp_get_attachment_image_src($thumbnail_id, 'small_thumb', true);
							$thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
							$hero = $thumbnail_url[0];
							if ( has_post_thumbnail() ) { ?>
								<div class="blog-feature">
									<img class="hundred" src="<?= $hero; ?>">
								</div>
							<?php } ?>						
								
							<div class="blog-feed has-text-white	">
								<div class="post-header">
									<h2 class="has-text-white	">
										<?php the_title(); ?>
									</h2>
								</div>
								
								<section class="post-section">
									<div class="entry-content">
										<h3 class="has-text-white	"><?= $post_date; ?></h3>
										<?php the_excerpt(); ?>
									</div>
								</section>
								
								<div class="post-footer">
									<a class="text-link bold" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
								</div>
							</div>
						</article>
					</div><!-- data id --><!-- post class -->
				<?php endwhile; ?>
				<?php endif;?>
			</div>
		</div>
	</div>	
</div><!-- main -->
<?php get_footer(); ?>
