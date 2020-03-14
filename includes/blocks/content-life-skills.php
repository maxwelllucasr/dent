<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  Life Skills block		Version		 1.0.0
/* ------------------------------------------------------------------------- */


$headline = get_field('skills_headline');
$copy = get_field('skills_copy');
$button = get_field('skills_button');
?>


<section class="life-skills-container">
    <div class="container life-skills-container-inner">
        <h2><?=$headline?></h2>
        <p><?=$copy?></p>
        <a class="life-skills-button" href="<?=$button['url']?>"><?=$button['title']?></a>
    </div>
</section>
