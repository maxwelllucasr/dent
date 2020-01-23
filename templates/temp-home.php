<?php
/*
	Template Name: Home Page
*/
/* ------------------------------------------------------------------------- *
 * 	Rugged
 *  Home Template 1.0.0
/* ------------------------------------------------------------------------- */
?>

<?php get_header(); ?>
<div id="main" class="content-area relative">
	<main id="main-content" class="site-main" role="main">

		<?php wp_reset_query(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Page Content -->
		
		<?php the_content(); ?>
	
		<!-- Page Content -->
		<?php endwhile; ?>
		<?php endif; ?>
		
	</main>
</div>
<?php get_footer(); ?>