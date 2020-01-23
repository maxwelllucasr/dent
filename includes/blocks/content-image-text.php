<?php
/* ------------------------------------------------------------------------- *
 * 	Vesst
 *  Image Text block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

$headline = get_field('text_headline');
$text = get_field('text_paragraph');
$image = get_field('text_image');

?>

<section class="text-container">
    <div class="columns">
        <div class="column is-5 text-block-image" style="background-image: url(<?=$image['url']?>)"></div>
            <div class="column is-7 text-block-text-area">
                <h2 class="text-headline"><?=$headline?></h2>
                <p class="text-paragraph"><?=$text?></p>
            </div>
    </div>
</section>
