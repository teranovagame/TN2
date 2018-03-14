<?php
    // Include config file
    require_once 'database.php';   

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Check if email is empty
        if(empty(trim($_POST["email"])))
        {

            $email_err = 'Please enter your email.';
        } 
        else
        {
            $email = trim($_POST["email"]);
        }

        // Check if password is empty
        if(empty(trim($_POST['password'])))
        {
            $password_err = 'Please enter your password.';
        } 
        else
        {
            $password = trim($_POST['password']);
        }
        
        // Validate credentials
        if(empty($email_err) && empty($password_err))
        {
            // Prepare a select statement
            $sql = "SELECT id,email,password FROM accounts WHERE email = '".$email."'"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
	    	// output data of each row
		    	while($row = $result->fetch_assoc()) 
		    	{
                    $id = $row['id'];
                    
		        	if($row['email'] == $email)
		        	{
		        		if($row['password'] == $password)
		        		{
                                session_start();
                                $_SESSION[] = null;
                                $_SESSION['email'] = $email; 
                                $_SESSION['account_id'] = $id; 

                                header("location: index.php");
		        		}
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

<?php include('views/header.php'); ?>
<link rel="stylesheet" type="text/css" href="/interface/login.css">

        <div class="wrapper">

        	<div style="position: fixed; bottom: 0; left: 0; width: 100%;">
        		<img src="/assets/ui/login/logo.png" style="width: 100%;z-index: 99;">
        	</div>

            <h2>Continue Your Journey</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">

                    <label>Email</label>

                    <input type="text" name="email"class="form-control" value="<?php echo $email; ?>">

                    <span class="help-block"><?php echo $email_err; ?></span>

                </div>    

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                    <label>Password</label>

                    <input type="password" name="password" class="form-control">

                    <span class="help-block"><?php echo $password_err; ?></span>

                </div>

                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Play">

                </div>

                <p>Don't have an account? <a href="register.php">Start your journey now</a>.</p>

            </form>

        </div>    

    </body>

    </html>

