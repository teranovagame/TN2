<?php
	// Include config file
    require_once '../database.php';

    $itemid = $_GET['itemid'];

    $sql = "SELECT * FROM items WHERE id = '".$itemid."'"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
		while($row = $result->fetch_assoc()) 
		{
			echo '
				<h4 class="menu-dialog-header">'.$row['name'].' ['.$row['type'].']</h4>
				<p class="menu-dialog-text">'.$row['description'].'</p>

				<p class="menu-dialog-text"><button class="action" npcid="1"><img src="/assets/ui/target.png" width="20px" height="20px"> Take Ferium</button></p>
			';
		}
	}

?>