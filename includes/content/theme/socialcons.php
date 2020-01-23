<ul class="socialcons">
	<?php 
		$facebook = get_field('facebook','option');
		$twitter = get_field('twitter','option');
		$pinterest = get_field('pinterest','option');
		$youtube = get_field('youtube','option');
		$vimeo = get_field('vimeo','option');
		$google = get_field('google','option');
		$linkedin = get_field('linkedin','option');
		$flickr = get_field('flickr','option');
		$rss = get_field('rss','option');
		$insta = get_field('instagram','option');
	?>
	<!--Youtube-->
	<?php if ( $youtube ) { ?>
	<li><a target="_blank" href="<?= $youtube; ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing Youtube--><?php } ?>
	
	<!--Pinterest-->
	<?php if ( $pinterest ) { ?>
	<li><a  target="_blank" href="<?= $pinterest; ?>"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing Pinterest--><?php } ?>
	
	<!--Facebook-->
	<?php if( $facebook ) { ?>
	<li><a target="_blank" href="<?= $facebook; ?>"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing Facebook--><?php } ?>
	
	<!--Twitter-->
	<?php if ( $twitter ) { ?>
	<li><a  target="_blank" href="<?= $twitter; ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing Twitter--><?php } ?>
	
	<!--Vimeo-->
	<?php if ( $insta ) { ?>
	<li><a target="_blank" href="<?= $insta; ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing Instagram--><?php } ?>
	
	<!--Vimeo-->
	<?php if ( $vimeo ) { ?>
	<li><a target="_blank" href="<?= $vimeo; ?>"><i class="fab fa-vimeo" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing Vimeo--><?php } ?>
	<!--Linkedin-->
	<?php if ( $linkedin ) { ?>
	<li><a target="_blank" href="<?= $linkedin; ?>"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing Linkedin--><?php } ?>
	<!--GooglePlus-->
	<?php if ( $google ) { ?>
	<li><a target="_blank" href="<?= $google; ?>"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing GooglePlus--><?php } ?>
	<!--Flickr-->
	<?php if ( $flickr ) { ?>
	<li><a target="_blank" href="<?= $flickr; ?>"><i class="fab fa-flickr" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing Flickr--><?php } ?>
	<!--RSS-->
	<?php if ( $rss ) { ?>
	<li><a target="_blank" href="<?= $rss; ?>"><i class="fab fa-rss" aria-hidden="true"></i></a></li>
	<?php } else { ?><!--Missing RSS--><?php } ?>
</ul>