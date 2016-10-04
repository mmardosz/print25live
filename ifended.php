<?php

function ifEnded($timeOfStart, $timeOfEnd)
{

	if ((strtotime($timeOfStart) < time()) && (strtotime($timeOfEnd) > time())) {
	    return 2; // currently going on
	}
	else if (strtotime($timeOfEnd) < time()) {
		return 1; // in the past
	}
	else
		return 0; // ended
}
?>
