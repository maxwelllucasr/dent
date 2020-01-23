<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
$termID = get_queried_object()->term_id;

$events = array(
	'post_type'        => 'event',
	'tax_query' => array(
		array(
			'taxonomy' => 'event_category',
			'field' => 'term_id',
			'terms' => $termID
		)
	)
);
$data = array();
$query = new WP_Query( $events );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$id = get_the_ID();
		$title = get_the_title();
		//$start = get_field('start_time');
		//$end = get_field('end_time');
		$url = get_permalink();
		$times = get_field('event_daystimes');
		if($times)
		{
			foreach($times as $time)
			{
				$start = $time['start_time'];
				$end = $time['end_time'];

				$data[] = array(
					'id'   	=> $id,
					'title'   => $title,
					'url' 	=> $url,
					'start'   => $start,
					'end'  	=> $end
			 	);
			}
		}
	} // end while
} // end if
wp_reset_query();

echo json_encode($data);

?>
