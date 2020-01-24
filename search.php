<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace 
 *  Search Template		Version		 1.0.0
/* ------------------------------------------------------------------------- */	
?>
<?php get_header(); ?>

<div id="limber"><!-- main -->
	<div id="search-content" class="main-content" role="main">
		<div id="hero" class="cover ">
			<div class="navy section">
				<div class="container">	
					<h1>Search Results:</h1>
					<h3>&quot;<?php echo get_search_query(); ?>&quot;</h3>
				</div>
			</div>
		</div>
		
		
		<div id="blog-content" class="main-content" role="main">
		<!-- Blog Post Fee -->
		<div class="section white">
			<div class="container">
			<?php if ( have_posts() ) :  // results found?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="section">
					<div class="span-six table">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
						<?php the_excerpt(); ?>
						<a class="button green-button" role="button" href="<?php the_permalink(); ?>">View</a><br><br>
						<hr>
					</div>
				</article>
				
				<?php endwhile; ?>
				<?php else :  // no results?>
				<article>
					<h1>No Results Found.</h1>
				</article>
			<?php endif; ?>
			</div>
		</div>
	</div><!-- #main-content -->
</div><!-- main -->
<?php get_footer(); ?>