<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  JCS Gallery block		Version		 1.0.0
/* ------------------------------------------------------------------------- */

$gallery = get_field('jcs_gallery');
$squareOrFullSize = get_field('gallery_fullsize');

?>



<section class="jcs-gallery-container">
    <div class="container" style="width:90%; margin:auto;">
        <div class="columns is-multiline">
        
        <?php 
        // print_r($gallery);
        foreach($gallery as $image){
        ?>

                <div class="column is-6">
                    <img style="margin:auto;display:block;" src="<?php if ($squareOrFullSize) echo $image['url']; else echo $image['sizes']['square']; ?>">
                    <p style="text-align:center;padding-top:0.5rem"><?=$image['description']?></p>
                </div>
    <?php
        }
     ?>
        
        
        </div>
    </div>
</section>