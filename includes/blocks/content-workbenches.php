<?php
/* ------------------------------------------------------------------------- *
 * 	Vesst
 *  Workbenches block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	


$headline = get_field('workbench-headline');

$terms = get_terms( array(
    'taxonomy' => 'type_category',
    'hide_empty' => true,
) );

$posts = get_posts(array(
	'posts_per_page'	=> -1,
    'post_type'			=> 'workbench',
    'orderby'           => 'menu_order',
    'order'             => 'DESC',
));
?>


<section class="workbenches-container">
<h2 class="workbench-headline"><?=$headline?></h2>
    <div class="workbench-items">
            <?php
                foreach($terms as $key=>$post){ ?>
                    <span class="workbench-item"><?=$terms[$key]->name?></span>
            <?php } ?>
        </div>
        <div class="workbench-listings-main-page columns is-multiline">
            <?php foreach($posts as $post) { 
                setup_postdata( $post );
                $thumb_id = get_post_thumbnail_id($post->ID);
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'big-feature', true);
                $service_thumb = $thumb_url_array[0];
                $title = $post->post_title;
                $url = get_permalink($post);
                $roundedCorners = get_field('rounded_thumbnail_corners', $post->ID);
            ?>
            <div class="workbench-listing-main-page column is-4">

            <a href="<?=$url?>"><img class="workbench-thumb" src="<?=$service_thumb?>" style="<?php if(!is_null($roundedCorners)) { ?>border-radius:10px;<?php } ?>"></a>
                <a href="<?=$url?>"><h4 class="workbench-title"><?=$title?></h4></a>
                <h5 class="workbench-starting-label">Starting At</h5>

                <h4 class="starting-price"><?= get_field('starting_price', $post->ID)?></h4>

            </div>
            <?php } ?>
        </div>
</section>

