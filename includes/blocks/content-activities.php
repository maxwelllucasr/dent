<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  Activities block		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

$headline = get_field('activities_headline');
$copy = get_field('activities_copy');
$button1 = get_field('activities_button_1');
$button2 = get_field('activities_button_2');



?>

<section class="activities-container">
    <div class="container activities-inner">
        <div class="columns">

            <div class="column is-7 is-offset-1">
                <h2><?=$headline?></h2>
                <p><?=$copy?></p>
            </div>

            <div class="column is-4">
                <div class="activities-buttons">
                    <a class="activities-button-1" href="<?=$button1['url']?>"><?=$button1['title']?></a>
                    <a class="activities-button-2" href="<?=$button2['url']?>"><?=$button2['title']?></a>
                </div>
            </div>

        </div>
    </div>
</section>