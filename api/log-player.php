<?php
// Include config file
require_once '../init.php';
$player_id = $_SESSION['player_id'];
$player_log = $_SESSION['player_log'];
$player_log_format = array_reverse($player_log);

foreach ($player_log_format as $log_entry)
{
	echo "<p>".$log_entry."</p>";
}



?>