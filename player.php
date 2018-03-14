
<?php 
require_once('database.php');
include('views/header.php'); 

session_start();
$_SESSION['player_log'] = array();
$account_id = $_SESSION['account_id'];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Check if email is empty
    if(empty(trim($_POST["player"])))
    {
    	$player_err = 'Please select a character.';

    }
    else
    {
    	session_start();

    	$sql = "SELECT id,first_name,last_name,level,location FROM players WHERE account_id = '".$account_id."' && id = '".$_POST['player']."'"; 
    	echo $sql;

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
	    	// output data of each row
		    	while($row = $result->fetch_assoc()) 
		    	{
                    
		        	if($row['id'] == $_POST['player'])
		        	{
                                session_start();
                                $_SESSION['player_id'] = $row['id']; 
                                $_SESSION['first_name'] = $row['first_name'];
                                $_SESSION['last_name'] = $row['last_name'];
                                $_SESSION['level'] = $row['level'];
                                $_SESSION['location'] = $row['location'];

                                header("location: index.php");
		        	}
		    	}
			} 
			else 
			{
		    	echo "0 results";
			}

			$conn->close();
    }
}

?>
<link rel="stylesheet" type="text/css" href="/interface/login.css">

<div class="wrapper">

	<div style="position: fixed; bottom: 0; left: 0; width: 100%;">
        <img src="/assets/ui/login/logo.png" style="width: 100%;z-index: 99;">
    </div>

            <h2>Choose A Character</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group">
                    <?php

                    $sql = 
                    "SELECT id,first_name,last_name,level FROM players WHERE account_id='".$account_id."'"; 
            		$result = $conn->query($sql);

            		if ($result->num_rows > 0) 
            		{
		    			// output data of each row
			    		while($row = $result->fetch_assoc()) 
			    		{
			    			echo "<p><input type='radio' name='player' value='".$row['id']."'>[Lv. ".$row['level']."] ".$row['first_name']." ".$row['last_name'];
	                    	
	                    }
	                    echo "<p><input type='radio' name='player' value='99'>Create new character";
                	}
                	else 
					{
		    			echo "0 results";
					}

					$conn->close();

                    ?>

                    <span class="help-block"><?php echo $player_err; ?></span>

                    <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Play">

                </div>