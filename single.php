<?php
/* ------------------------------------------------------------------------- *
 * 	Vesst 
 *  Single		Version		 1.0.0
/* ------------------------------------------------------------------------- */	
?>
<?php get_header(); ?>
<div id="main" class="content-area relative">
    <main id="main-content" class="site-main" role="main">

		<?php wp_reset_query(); ?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
            $hero = $thumb_url_array[0];
            $data = array();
            $id = get_the_ID();
            $title = get_the_title();
            $url = get_permalink();
            
            // color
            $term_list = wp_get_post_terms($id, 'category', array("fields" => "all"));
            $currentcolor = '';
            foreach($term_list as $term_single) 
            {
                $termid = $term_single->term_id; 
                $colorvalue= get_field('category_color',  'category_' . $termid);
                if($colorvalue != '')  $currentcolor = $colorvalue;
                
            }
        ?>
    
        <div class="section-lg single p-t-50">
            <div class="container post event texy relative" style="background: <?= $colorvalue; ?>">
                <div class="event-single-content relative">
                
                <?php if (get_post_type() == 'workbench' ) { 
                    
                    $price = get_field('starting_price',$id);
                    
                    ?>




                    <section class="workbench-single">

                    <?php the_post_thumbnail(); ?>
                    <div class="workbench-single-title"><?php the_title(); ?></div>
                    <?php the_content(); ?>
                    
                    <div class="columns">

                    <div class="column is-6">
                        <?php 
                            $form_object = get_field('workbench_form',$id);
                            gravity_form_enqueue_scripts($form_object['id'], true);
                            gravity_form($form_object['id'], false, true, false, '', true, 1);  
                        ?>
                    </div>

                    <div class="column is-6">
                         <h2 class="price-tag">Price: $<?=$price?></h2>
                    </div>
                        
                    
                    </div>
                    
                    </section>







                <?php } else { ?>
                
                <div class="columns">
                    <div class="column">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <div class="event-single-box  postTitle">
                            <h1><?php the_title(); ?></h1>
                            <?php echo get_the_date(); ?>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="columns">
                    <div class="column"> 
                        <div class="event-description event-single-box">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <?php } ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

        <?php endif; ?>
    </main>
</div>
<?php get_footer(); ?>