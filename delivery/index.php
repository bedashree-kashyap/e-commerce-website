<?php 
include('config.php');
$page = $_SERVER['PHP_SELF'];
$sec ="100";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delivery Admin panel</title>
	<meta http-equiv="refresh" content="<?php echo $sec?>; URL='<?php echo $page?>'">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="DelivAdmin_style.css">
</head>
<body>


<!-- TEXT HEADER -->
<div class="text">
  <h2>NEW REQUESTS</h2>
</div>
<!-- TEXT HEADER -->

<table>
	<tr>
		<th>Phonenumber</th>
		<th>Item</th>
		<th>Date</th>
		<th>Current Status</th>
	</tr>
	<?php 
			$new_req= "SELECT * FROM orders WHERE status='NEW';";
            $result = $db->query($new_req);

			if ($result->num_rows>0) 
			{ 
    			// output data of each row
   		 		while($row = $result->fetch_assoc())
   		 	 	{ ?>
        			<tr>
						<td><a href="user_details.php?id=<?php echo $row["phonenumber"];?>"><?php echo $row["phonenumber"];?></td>
						<td><?php echo $row["item"];?></td>
						<td><?php echo $row["date"];?></td>
						<td><a href="status.php?id= <?php echo $row["id"];?>&status=<?php echo 'PENDING';?>">
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
<br>
<br>

<!-- TEXT HEADER -->
<div class="text">
  <h2>READY REQUESTS</h2>
</div>
<!-- TEXT HEADER -->

<table>
	<tr>
		<th>Phonenumber</th>
		<th>Item</th>
		<th>Date</th>
		<th>Current Status</th>
		
	</tr>
	<?php 
			$new_req= "SELECT * FROM orders WHERE status='READY';";
            $result = $db->query($new_req);

			if ($result->num_rows>0) 
			{ 
    			// output data of each row
   		 		while($row = $result->fetch_assoc())
   		 	 	{ ?>
        			<tr>
						<td><a href="user_details.php?id=<?php echo $row["phonenumber"];?>"><?php echo $row["phonenumber"];?></td>
						<td><?php echo $row["item"];?></td>
						<td><?php echo $row["date"];?></td>
						<td><a href="status.php?id=<?php echo $row["id"];?>&status=<?php echo 'DELIVERED';?>"><?php echo $row["status"];?>
						</a></td>
						
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

<br>
<br>		    	     
<br>		    	     
<br>

</body>
</html>