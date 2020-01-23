<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
$events = array(
	'post_type'        => 'event',
	'posts_per_page' => -1
);

$data = array();
$query = new WP_Query( $events );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {

		$query->the_post();

		$id = get_the_ID();
		$title = get_the_title();
		$url = get_permalink();

		$times = get_field('event_daystimes', $id);
		// Color
		$term_list = wp_get_post_terms($id, 'event_category', array("fields" => "all"));
		$currentcolor = '';
		foreach($term_list as $term_single) 
		{
			$termid = $term_single->term_id; 
			$colorvalue= get_field('event_category_color',  'category_' . $termid);
			if($colorvalue != '')  $currentcolor = $colorvalue;
			
		}
		//write_log($currentcolor);

		if($times)
		{
			foreach($times as $time)
			{
				$start = $time['start_time'];
				$end = $time['end_time'];

				$data[] = array(
					'id'   		=> $id,
					'title'   	=> $title,
					'url' 		=> $url,
					'start'   	=> $start,
					'end'  		=> $end,
					'color'  	=> $currentcolor
			 	);
			}
		}
	} // end while
} // end if
wp_reset_query();
//
echo json_encode($data);

?>
