<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  Respite block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	


$headline = get_field('respite_headline');
$copy = get_field('respite_copy');
$button = get_field('respite_button');
$background = get_field('respite_background');

?>

<section class="respite-container" style="background-image: url(<?=$background['url']?>)">
<div class="respite-inside"></div>
<div class="container">


    <div class="columns is-centered">
        <div class="column is-6"><h2 class="respite-overlay"><?=$headline?></h2></div>
    </div>

    <div class="columns is-centered">
        <div class="column is-10"><p class="respite-overlay"><?=$copy?></p></div>
    </div>

    <div class="columns is-centered">
        <div class="column is-6"><a href="<?=$button['url']?>" class="respite-button respite-overlay"><span><?=$button['title']?></span></a></div>
    </div>

</div>
</section>