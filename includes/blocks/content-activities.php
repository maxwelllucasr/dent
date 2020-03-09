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
    <div class="container">
        <div class="columns">

            <div class="column is-7">
                <h2><?=$headline?></h2>
                <p><?=$copy?></p>
            </div>

            <div class="column is-5">
                <a href="<?=$button1['url']?>"><?=$button1['title']?></a>
                <a href="<?=$button2['url']?>"><?=$button2['title']?></a>
            </div>


        </div>
    </div>
</section>