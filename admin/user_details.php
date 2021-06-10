<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		User Details
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="userDetails.css">
</head>
<body>

	<table>
	   	<tr>
		   	<th>Name</th>
		   	<th>Address</th>
		   	<th>Email</th>
		   	<th>Phone Number</th>
		</tr>
	<?php
	   // if(isset($_GET['id']))
	   $id = mysqli_real_escape_string($db,$_GET['id']); 
	   $details = "SELECT * FROM users WHERE phonenumber ='$id';";
	   $result=$db->query($details);
	   while($row = $result->fetch_assoc())
	   {
	   ?>

	   
		<tr>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["address"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["phonenumber"]?></td>
		</tr>   	
	   </table>
	<?php
	    }
	    ?>

</body>
</html>