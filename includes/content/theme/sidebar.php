<?php

$image1 = get_field('sidebar_image_1','options');
$image2 = get_field('sidebar_image_2','options');
$image3 = get_field('sidebar_image_3','options');
$image4 = get_field('sidebar_image_4','options');

$text1 = get_field('sidebar_text_1','options');
$text2 = get_field('sidebar_text_2','options');
$text3 = get_field('sidebar_text_3','options');
$text4 = get_field('sidebar_text_4','options');

$link1 = get_field('sidebar_link_1','options');
$link2 = get_field('sidebar_link_2','options');
$link3 = get_field('sidebar_link_3','options');
$link4 = get_field('sidebar_link_4','options');
?>

<a href="<?=$link1?>"><div class="sidebar-button cover" style="background-image: url(<?=$image1['url']?>)"><?=$text1?></div></a>
<a href="<?=$link2?>"><div class="sidebar-button cover" style="background-image: url(<?=$image2['url']?>)"><?=$text2?></div></a>
<a href="<?=$link3?>"><div class="sidebar-button cover" style="background-image: url(<?=$image3['url']?>)"><?=$text3?></div></a>
<a href="<?=$link4?>"><div class="sidebar-button cover" style="background-image: url(<?=$image4['url']?>)"><?=$text4?></div></a>