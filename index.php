<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace 
 *  Index / Blog		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

get_header(); 	
$blog_title = get_the_title( get_option('page_for_posts', true) );
$filter = get_field('filter_text', 'option')
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
		<!-- <div class="container"> -->
			<h1 class="bold"><?= $blog_title; ?></h1>
			<!--<h5><?= $filter; ?></h5>
			<ul>
				<?php wp_list_categories( array(
					'orderby'    => 'name',
					'title_li' => ' ',
					'show_count' => false,
					'exclude'    => array( 10 )
				) ); ?> 
			</ul>
		</div> -->
	</div>
	
	<div id="blog-content" class="main-content section white" role="main">
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
