<style>
table {
    font-size: 100%;
}

h3 {
    font-size: 100%;
}
td {
    width: 15%;
}

/* Print Styles */
@media print {
h1 { font-size:70%; }
h3 { font-size:70%; }
td { font-size:50%; }
}

</style>

<?php
include('events.php');

echo "<h1>Today is " . date("l, M d (d/m/Y)") . " </h1>";
echo '<button class="btn btn-default" onClick="window.print()">Print this page</button>';
echo "<h3>Report generated at " . date("h:i:s A") . " </h3>";


echo '<h3>B-104</h3><table class="table table-condensed ">'; 
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=9");
echo '</table>';

echo '<h3>B-105</h3><table class="table table-condensed ">';
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=194");
echo '</table>';

echo '<h3>CBM-114</h3><table class="table table-condensed ">';
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=362");
echo '</table>';

echo '<h3>CBM-158</h3><table class="table table-condensed ">';
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=368");
echo '</table>';

echo '<h3>LWH-2108</h3><table class="table table-condensed ">';
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=330");
echo '</table>';

echo '<h3>LWH-2054</h3><table class="table table-condensed ">';
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=323");
echo '</table>';

echo '<h3>FA-104</h3><table class="table table-condensed ">';
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=77");
echo '</table>';

echo '<h3>FA-108</h3><table class="table table-condensed ">';
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=79");
echo '</table>';

echo '<h3>BBH-242</h3><table class="table table-condensed ">';
fetch_location("https://25live.collegenet.com/25live/data/neiu/run/reservations.xml?space_id=493");
echo '</table>';

echo "<h3>
		Data from <a href='https://25live.collegenet.com/25live/data/neiu/'>https://25live.collegenet.com/25live/data/neiu/</a> - Report generated at " . date("h:i:s A") . " for " . date("l, M d (d/m/Y)") . " - mmmardo1</h3>";

?>
<div class="finished"></div>