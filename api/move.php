<?php
require_once('../init.php');

$loc = $_SESSION['loc'];
$intention = $_GET['dir'];
$can_move = 0;

$loc = $_SESSION['location'];
$sql = "SELECT * FROM areas WHERE id = '".$loc."'";
$result = $conn->query($sql);
$success = 0;
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$exits = explode(";",$row['exits']);
		foreach ($exits as $exit)
		{

			$exit_info[] = explode(",",$exit);
			foreach ($exit_info as $check)
			{
				var_dump($check);
				if($check[0] == $intention)
				{
					$success = 1;
					$log = "You move ".$check[0].".";
					$new_loc = $check[1];
				}
				else
				{
					$log = "You cannot move ".$intention." from here.";

				}
			}
			
		}
	}
}


if($success == 1)
{		
	$sql = "UPDATE `players` SET `location` = ".$new_loc." WHERE `id` = ".$_SESSION['player_id'];
	$_SESSION['location'] = $new_loc;
}
player_log_write($log);
//make function
