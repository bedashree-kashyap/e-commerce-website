<?php
include('config.php');

$id=mysqli_real_escape_string($db,$_GET["id"]);
$status=mysqli_real_escape_string($db,$_GET["status"]);

$sql= "UPDATE orders SET status='$status' WHERE id='$id';";

if($db->query($sql) == TRUE)
{
	echo "Status updated";
	header("Location:pending.php");
}
else
{
	echo "Error". $db->error;
}
?>