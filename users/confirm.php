<?php 
include('session.php');
	$phonenumber=$_SESSION['phonenumber'];
	$order=$_SESSION['order'];
	$sql = "INSERT INTO orders(phonenumber,item,date,status) values('$phonenumber','$order', CURDATE(),'NEW');";
	// $sql = "INSERT INTO orders(phonenumber,item,date,status) values('$phonenumber','$order','DATE: Auto CURDATE()', CURDATE(),'NEW');";
	if ($db->query($sql) === TRUE)
	 {
    	echo"new record successfully created";
    			sleep(5);
   		header("Location:user_panel.php");
    }
    else 
    {
    	echo "Error: " . $sql . "<br>" . $db->error;
    }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CONFIRMED-SHINERS</title>
</head>
<body>
	<h1>Your order has been confirmed, we will verify by phone.</h1>
	<h3>Wait for 5 seconds. 5... 4... 3... 2... 1...</h3>
</body>
</html>