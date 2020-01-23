<?php 
/* ------------------------------------------------------------------------- *
 * 	Vesst
 *  Video block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

$embed = get_field('video_embed');
$headline = get_field('workshop_video_headline');
$subtitle = get_field('workshop_video_subtitle');

?>

<section class="workbench-video-container">
    <h2 class="workbench-video-headline"><?=$headline?></h2>
    <h4 class="workbench-video-subtitle"><?=$subtitle?></h4>

    <iframe src="<?=$embed?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>