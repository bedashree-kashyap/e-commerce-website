
<?php 
include('config.php');
$page = $_SERVER['PHP_SELF'];
$sec ="100";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<meta http-equiv="refresh" content="<?php echo $sec?>; URL='<?php echo $page?>'">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>

<!-- TEXT HEADER -->
<div class="text">
  <h2>PENDING REQUESTS</h2>
</div>
<!-- TEXT HEADER -->

<!-- TABLE -->
<table>
	<tr>
		<th>Phonenumber</th>
		<th>Package</th>
		<th>Date</th>
		<th>Check to make them Ready</th>
		
	</tr>
	<?php 
			$new_req= "SELECT * FROM orders WHERE status='PENDING';";
            $result = $db->query($new_req);

			if ($result->num_rows>0) 
			{ 
    			// output data of each row
   		 		while($row = $result->fetch_assoc())
   		 	 	{ ?>
        			<tr>
						<td><a href="user_details.php?id=<?php echo $row["phonenumber"];?>"><?php echo $row["phonenumber"];?></a></td>
						<td><?php echo $row["item"];?></td>
						<td><?php echo $row["date"];?></td>
						<td><a href="status.php?id= <?php echo $row["id"];?>&status=<?php echo 'READY';?>">
							<?php echo $row["status"];?></a></td>
						
					</tr>
   				<?php
   			}

			}
			 
			 else 
			{
   				echo "0 results";
		    }

		    ?>		     

	
</table>
<!-- TABLE -->

<br>
<br>
<br>
<br>


	
<!-- --------------------------LISTS----------- -->

<button onclick="location.href='pending.php';" class="button">Pending</button>
<button onclick="location.href='ready.php';" class="button">Ready</button>
<button onclick="location.href='delivered.php';" class="button">Delivered</button></a>

<!-- ------------------------LISTS--------------- -->

</body>
</html>