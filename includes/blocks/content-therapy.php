<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  Animal Therapy block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

$color = get_field('animal_therapy_color');
$headline = get_field('animal_therapy_headline');
$copy = get_field('animal_therapy_copy');
$button = get_field('animal_therapy_button');
$icon = get_field('animal_therapy_icon');


?>

<section class="therapy-container " <?php if($color!=""){ ?> style="background-color: <?=$color?>" <?php } ?>>
    <div class="container therapy-container-inner">
        <div class="columns">


             <div class="column is-1 is-hidden-mobile">
                <div class="therapy-strip"></div>

             </div>
        <!-- Text -->
            <div class="column is-6">
                <h2><?=$headline?></h2>
                <p><?=$copy?></p>
                <a class="therapy-button" href="<?=$button['url']?>"><span><?=$button['title']?></span></a>

            </div>

        <!-- Icon -->
            <div class="column is-5">
                <img class="therapy-icon" src="<?=$icon['sizes']['square']?>">

            </div>
        </div>
    </div>
</section>