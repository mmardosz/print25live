<?php
include('parser.php');
include('ifended.php');

date_default_timezone_set("America/Chicago");

function fetch_location($location){

$url = $location;
$counter = 0;

foreach (fetch_events($url) as $instance){
	
?>	
	<tr>
		<td><strong>	<?php echo $instance['event_name']; ?></strong></td>
		<td>			<?php echo $instance['event_title']; ?></td>
		<td>ID: 		<?php echo $instance['id']; ?></td>
		<td>			<?php echo $instance['event_type_name']; ?></td>
		<td>Start: 		<?php echo date("g:i A", strtotime($instance['eventstart'])); ?></td>
		<td>End: 		<?php echo date("g:i A", strtotime($instance['eventend'])); ?></td>
		<td>
			
		<?php 

		if((ifEnded($instance['eventstart'], $instance['eventend']) == 2)){
			echo '<span class="label label-danger">Taking place</span>';
					
		}
				
		else if(ifEnded($instance['eventstart'], $instance['eventend']) == 1){
			echo '<span class="glyphicon glyphicon-ok"></span>';
		}
				
		else {
			echo '<span class="label label-info">Event scheduled</span>';
		}

		?>
		
		</td>
	<tr>

<?php
	}
}
?>
