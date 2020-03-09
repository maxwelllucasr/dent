<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  Trauma Training block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

$headline = get_field('trauma_headline');
$text = get_field('trauma_copy');
$button = get_field('trauma_button');
$icon = get_field('trauma_icon');

?>



<section class="trauma-training-container">
    <div class="trauma-training-inside container">

        <div class="columns">
        
        <div class="column is-5">
            <div class="trauma-icon-outside">
                <img class="trauma-icon" src="<?=$icon['url']?>">
        
            
            </div>
        </div>

        <div class="column is-7">
            <h2 class="trauma-training-headline"><?=$headline?></h2>
            <p class="trauma-training-text"><?=$text?></p>
            <a href="<?=$button['url']?>"  class="trauma-training-button">
                <p>
                    <?=$button['title']?>
                </p>
            </a>
        </div>
    
        </div>
    </div>
</section>