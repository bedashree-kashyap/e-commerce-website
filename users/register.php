<?php 
	
	include('config.php');
	session_start();

//---------Registration verification--------------

	if(isset($_POST['register']))
    {
    	// taking in input from the form
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $address = mysqli_real_escape_string($db,$_POST['address']);
        $phonenumber = mysqli_real_escape_string($db,$_POST['phone']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
    	

        //first checking if the user already exists in the database
        $user_check = "SELECT * FROM users WHERE email='$email' OR phonenumber='$phonenumber' LIMIT 1";
        $result = $db->query($user_check);
        $user = mysqli_fetch_assoc($result);
        

        if($user) //if the user exists
        {
        	if($user['phonenumber'] == $phonenumber)
        	{
        		echo "User already exists";
        	}
        	if($user['email'] == $email)
        	{
        		echo "Email already exists";
        	}
        }

        //if no errrors
       
        else
        {
      
        $sql = "INSERT INTO users(name,password,address,email,phonenumber) VALUES('$username','$password','$address','$email','$phonenumber');";
        	if ($db->query($sql) === TRUE)
        	 {
		    	echo"new record successfully created";
    			$_SESSION['phonenumber'] = $phonenumber;
           		 header("Location:user_panel.php");
		    }
		    else 
		    {
		    	echo "Error: " . $sql . "<br>" . $db->error;
		    }	

    	
       
        }
     } 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register-SignUp</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"charset="utf-8">
</head>
<body>
<div class="card">
    <div class="container">
        <h2>Register</h2>
        <form name="register" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">Name:</label>
        <input type="text" name="username" required>
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <br>
        <label for="address">Address:</label>
        <textarea name="address" rows="5" cols="40"></textarea>
        <br>
        <br>
        <label for="phone">Phone Number:</label>
        <input type="number" name="phone">
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <br>
        <input type="submit" name="register" value="submit">
        </form>
    </div>   
</div>
</body>
</html>