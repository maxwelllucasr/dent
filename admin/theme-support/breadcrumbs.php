<?php
//-----------------------------------  // Breadcrumbs //-----------------------------------//
function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
		echo '</a></li><li class="separator"> <i class="fas fa-chevron-right"></i> </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> <i class="fas fa-chevron-right"></i> </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> <i class="fas fa-chevron-right"></i> </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            $title = get_the_title();
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
                echo $output;
                echo '</li><li class="separator"> <i class="fas fa-chevron-right"></i> </li>';

                echo '<li>'.$title.'</li>';
            } else {

                echo '<li>'.get_the_title().'</li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}