<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  Hero block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

$headline = get_field('trauma_headline');
$text = get_field('trauma_copy');
$button = get_field('trauma_button');
$icon = get_field('trauma_icon');

?>



<section class="trauma-training-container">
    <div class="trauma-training-inside">
    <?=$headline?>
    <?=$text?>
    <?=$button['url']?>
    <?=$icon?>
    <div>
</section>