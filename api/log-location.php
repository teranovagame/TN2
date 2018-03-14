<?php
// Include config file
require_once '../init.php';

$player_id = $_SESSION['player_id'];
$loc = $_SESSION['location'];
$sql = "SELECT * FROM areas WHERE id = '".$loc."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		echo '<p class="area-title">'.$row['title'].'</p>
			  <p>'.$row['description'].'</p>';

		$mobs = $row['mobs'];
		$items = $row['items'];
		$exits = explode(";",$row['exits']);

		//
		$count = 0;
		$i = -1;
		foreach ($exits as $exit)
		{
			$count++;
			$i++;
			$exit_info[$i] = explode(",",$exit);
			
		}
		switch ($count)
		{
			case "1":
				echo "<p>You can move ".$exit_info[0][0]." from here.</p>";
				break;
			case "2":
				echo "<p>You can move ".$exit_info[0][0]." and ".$exit_info[1][0]." from here.</p>";
				break;
			case "3":
				echo "<p>You can move ".$exit_info[0][0].", ".$exit_info[1][0]." and ".$exit_info[2][0]." from here.</p>";
				break;
			case "4":
				echo "<p>You can move ".$exit_info[0][0].", ".$exit_info[1][0].", ".$exit_info[2][0]." and ".$exit_info[3][0]." from here.</p>";
				break;
		}

		
		//##   LIST ITEMS   ##//
		$mobs_arr = explode(",",$mobs);
		foreach($mobs_arr as $mob)
		{	
			$sql = "SELECT * FROM mobs WHERE id = '".$mob."'";
			$result = $conn->query($sql);
		    if ($result->num_rows > 0) 
		    {
				while($row = $result->fetch_assoc()) 
				{
					$name = $row['name'];
					echo '
						<p>There is a 
							<button id="mob-btn" mobid="1" class="log-btn mob">
								<img src="/assets/ui/hostile-elite.png" width="11px" height="11px">	
								'.$name.'
							</button> resting here.
						</p>
					';
				}
			}
		}


		//##   LIST ITEMS   ##//
		$items_arr = explode(",",$items);
		foreach($items_arr as $item)
		{	
			$sql = "SELECT * FROM items WHERE id = '".$item."'";
			$result = $conn->query($sql);
		    if ($result->num_rows > 0) 
		    {
				while($row = $result->fetch_assoc()) 
				{
					$singular = $row['singular_collective'];
					$name = $row['name'];
					echo '
						<p>There is a '.$singular.' of 
							<button id="item-btn" itemid="1" class="log-btn item">
								<img src="/assets/ui/item.png" width="11px" height="11px">	
								'.$name.'
							</button> lying on the ground.
						</p>
					';
				}
			}
		}

	}
}
?>
<script type="text/javascript" 
src="/interface/player_log.js"></script>