<?php
/* ------------------------------------------------------------------------- *
 * 	Vesst
 *  Hero block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	


$background = get_field('hero_background');
$headline = get_field('hero_headline');
$subtitle = get_field('hero_subtitle');

?>

<section class="hero-container" style="background-image: url(<?=$background['url']?>)">

    <div class="hero-text">
        <h2 class="hero-headline"><?=$headline?></h2>
        <h4 class="hero-subtitle"><?=$subtitle?></h4>
    </div>


    <div class="hero-inside"></div>
</section>