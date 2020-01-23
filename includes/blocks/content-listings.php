<?php
/* ------------------------------------------------------------------------- *
 * 	Vesst
 *  Listings block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	


$posts = get_posts(array(
	'posts_per_page'	=> -1,
    'post_type'			=> 'workbench',
    'orderby'           => 'menu_order',
    'order'             => 'DESC',
));

?>

<section class="listing-container">

<?php foreach($posts as $post) { 
        setup_postdata( $post );
        $thumb_id = get_post_thumbnail_id($post->ID);
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'big-feature', true);
        $service_thumb = $thumb_url_array[0];
        $title = $post->post_title;
        $url = get_permalink($post);
    ?>
    <div class="workbench-listing columns">

        <a href="<?=$url?>" class="column is-5"><img class="workbench-thumb" src="<?=$service_thumb?>"></a>
       
       <div class="column is-7">
            <h4 class="workbench-listing-title"><a href="<?=$url?>"><?=$title?></a></h4>
            <h5 class="listing-starting-label">Starting At</h5>

            <h4 class="listing-starting-price"><?= get_field('starting_price', $post->ID)?></h4>
        </div>

    </div>
    <?php } ?>



</section>