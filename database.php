<?php	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "game_data";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    	echo $conn->connect_error;
	}
	echo "<!--Connected successfully-->";

	function get_current_attributes()
	{
		$sql = "SELECT health,max_health,stam,max_stam,will,max_will FROM players WHERE id='1'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
	    // output data of each row
	    	while($row = $result->fetch_assoc()) 
	    	{
	        	$attr["health"] = $row["health"];
	    	}
		} 
		else 
		{
	    	echo "0 results";
		}

		$conn->close();
	}
?> 