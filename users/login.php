<?php
	include('config.php');
	session_start();

	//$errors = array();

// -------Login verififcation-------

	if(isset($_POST['login']))
	{
    	$phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

    	$sql = "SELECT * from users where phonenumber='$phonenumber' AND password='$password';";
    	$result = $db->query($sql);
        $count = mysqli_num_rows($result);
      		if($count == 1)
      		{    
                                $_SESSION['phonenumber'] = $phonenumber;

        		header("Location: index.php");
      		}
      		else 
      		{
        		echo "WRONG PASSWORD";
       		}
    }
?>

<!-------------------- FORM ------------------------------>

<!DOCTYPE html>
<html>
<head>
	<title>Login-SignIn</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"charset="utf-8">
</head>
<body>

<div class="card">
  <div class="container">    
    <h2>Login</h2>
    <form name="login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    	<label for="phonenumber">Phone number:</label>
    	<input type="number" name="phonenumber" required>
    	<br>
    	<br>
    	<label for="password">Password:</label>
    	<input type="password" name="password" required>
    	<br>
    	<br>
        <input type="submit" name="login" value="submit">
        <p>New Member?</p><a href="register.php">SignUp</a>
    </form>
  </div>
</div>
   
</body>
</html>