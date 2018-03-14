<?php
session_start();
require_once 'database.php';


//$log_max_length = 7;

function player_log_write($log_entry)
{
	date_default_timezone_set('Australia/Melbourne');
	$date = date('m/j h:i:s', time());
	$log_entry = "<p>[".$date."] ".$log_entry."</p>";
	if(count($_SESSION['player_log']) >= 20) 
	{
		//remove element from beginning if max length
		array_shift($_SESSION['player_log']); 
		//then write
		array_push($_SESSION['player_log'],$log_entry);
	}
	else
	{
		array_push($_SESSION['player_log'],$log_entry);
	}
}