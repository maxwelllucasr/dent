<?php //---------------------  // 404'ed // ---------------------// 
	get_header();
?>
<div id="main"><!-- main -->
	<div id="main-content" class="main-content" role="main">	
		<article>
				<div class="section">		
					<div class="container paged">
							<h2 class="page-title">404</h2>
							<div class="page-content">
								<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?' ); ?></p>

								<?php get_search_form(); ?>
							</div><!-- .page-content -->
					</div>
					
				</div>
		</article>
	</div><!-- #main-content -->
</div><!-- #main -->
<?php get_footer(); ?>