<?php 

function fetch_events($url){
	
	$data = file_get_contents($url);
	$data = simplexml_load_string($data);
	$instances = array();
	
	date_default_timezone_set("America/Chicago");

	foreach ($data->children('r25', true) as $instance){
		$instances[] = array(

				'profile_description'	=> $instance-> profile_description,
				'event_name'			=> $instance-> event_name,
				'id'					=> $instance-> reservation_id,
				'eventstart'			=> $instance-> event_start_dt,
				'eventend'				=> $instance-> event_end_dt,
				'event_title'			=> $instance-> event_title,
				'event_type_name'		=> $instance-> event_type_name
				);
	}
	
	return($instances);
}
?>