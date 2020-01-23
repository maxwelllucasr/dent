<div class="voom-social-share-holder">
	<span>Share</span>
	<ul class="social-share">
		<li class="facebook">
			<!--fb-->
			<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="<?php _e('Share this post on Facebook!', 'voom')?>">
				<i class="fab fa-facebook"></i> <span>Facebook</span>
			</a>
		</li>
		<li class="twitter">
			<!--twitter-->
			<a target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>" title="<?php _e('Share this post on Twitter!', 'voom')?>">
				<i class="fab fa-twitter"></i> <span>Twitter</span>
			</a>
		</li>
	<li class="google-plus">
		<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="<?php _e('Share this post on Google Plus!', 'voom')?>">
			<i class="fab fa-google-plus-square"></i> <span>Google +</span>
		</a>
	</li>
	<li class="linkedin">
		<!--linkedin-->
		<a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&source=LinkedIn" title="<?php _e('Share this post on Linkedin!', 'voom')?>">
			<i class="fab fa-linkedin"></i> <span>LinkedIn</span></a>
	</li>
	<li class="pinterest">
		<a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>&description=<?php the_title();?> on <?php bloginfo('name'); ?> <?php echo site_url()?>" class="pin-it-button" count-layout="horizontal" title="<?php _e('Share on Pinterest','voom') ?>">
			<i class="fab fa-pinterest-square"></i> <span>Pinterest</span>
		</a>
	</li>
	<li class="email-share">
		<a title="<?php _e('Share by email','voom') ?>" href="mailto:?subject=Check this post - <?php the_title();?> &body= <?php the_permalink()?>&title="<?php the_title()?>" email"=""><i class="fa fa-envelope"></i> <span>Email</span></a>
	</li> 
	</ul>
</div>