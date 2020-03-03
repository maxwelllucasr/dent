<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  Hero block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	


$background = get_field('hero_background');
$headline = get_field('hero_headline');
$subtitle = get_field('hero_subtitle');
$text = get_field('hero_text');
$button_text = get_field('hero_button');

?>

<section class="hero-container" style="background-image: url(<?=$background['sizes']['big-feature']?>)">

    <div class="hero-sub-container container">
        <h2 class="hero-headline"><?=$headline?></h2>
        <h4 class="hero-subtitle"><?=$subtitle?></h4>
        <p class="hero-text"><?=$text?></p>

        <div class="hero-button-div"><a href="<?=$button_text['url']?>" class="hero-button"><?=$button_text['title']?></a></div>
    </div>


    <div class="hero-inside"></div>
</section>