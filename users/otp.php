<?php 
include('session.php');
if(isset($_POST['otp-submit'])) {
	$otp=mysqli_real_escape_string($db,$_POST['otp']);
	if($otp==$_SESSION['otp']){
		header("location: confirm.php");
	}
	else {
		echo "ERROR";
	}
}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>VERIFICATION: SHINERS</title>
</head>
<body>
	<h3>ENTER THE OTP</h3>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="otp-submit">
		<input type="number" name="otp">
		<input type="submit" name="otp-submit">SUBMIT</input>
	</form>
</body>
</html>