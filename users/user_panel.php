<?php
include('config.php');
include('session.php');

// ------------------OTP verification----------------------

if(isset($_GET['item_btn']))
{
	$_SESSION['order']=mysqli_real_escape_string($db,$_GET['order_item']);
	$_SESSION['otp']="123456";
	header("Location: otp.php");
}
// ===========================================================
// ------------------------AUTOFILL form--------------------- 
$phone=$_SESSION['phonenumber'];
$user= "SELECT * FROM users WHERE phonenumber = '$phone';";
$result = $db->query($user);

  if ($result->num_rows>0) 
      { 
        $row = $result->fetch_assoc();
      }
  else 
   {
      echo "Error: " . $sql . "<br>" . $db->error;
   }  

//----------------------Registration Update-------------------

  if(isset($_POST['update']))
    {
      // taking in input from the form
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $address = mysqli_real_escape_string($db,$_POST['address']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
      

        //first checking if the user already exists in the database
        $user_update = "UPDATE users  SET name='$username', address='$address', email='$email' WHERE  phonenumber='$phone' LIMIT 1;";
        $result = $db->query($user_update);
        
        if($result)
        { 
          $_SESSION['phonenumber'] = $phone;
          header("Location:user_panel.php");
          $message = "Record updated successfully";
          echo "<script type='text/javascript'> alert('$message');</script>";
        }

        else 
        {
          echo "Error: " . $result . "<br>" . $db->error;
        } 
    }

// =============================================================


 
?>

<!DOCTYPE html>
<html>
<head>
	<title>user panel</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"charset="utf-8">
	<link rel="stylesheet" type="text/css" href="userPanel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>

  // ==============================================NAVBAR========================================
  window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          document.getElementById("navbar").style.padding = "30px 10px";
          document.getElementById("logo").style.fontSize = "25px";
        }
      else {
           document.getElementById("navbar").style.padding = "80px 10px";
           document.getElementById("logo").style.fontSize = "35px";
        }
        }
   // ---------------------------------------------------------------------------------------------

</script> 	
</head>

<body>
<a name="home"></a>
<!-- NAVBAR starts here -->

<div id="navbar" class="topnav">
  <a href="#home" id="logo">SHINERS</a>
  <div id="navbar-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <a href="logout.php">LogOut</a>
  </div>
</div>
<!-- ======================================== -->
<!-- ======================================== -->

<!-- STICKY SOCIAL BAR -->
<div class="icon-bar">
  <a href="https://www.facebook.com/shiners.in/" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="https://g.page/shiners-in/" class="google"><i class="fa fa-google"></i></a> 
  <a href="https://api.whatsapp.com/send?phone=918723031166" class="whatsapp"><i class="fa fa-whatsapp"></i></a> 
</div>
<!-- ========================================== -->

<!-- TEXT HEADER -->
<div class="text">
  <h2>SELECT YOUR PACKAGE</h2>
  <p>Our staff would come to your door to weigh the clothes and the price shall be estimated accordingly</p>
</div>
<!-- TEXT HEADER -->

<!-- ------------PRICING TABLES------------- -->
<div class="container" style="margin:15px;">
<div class="price-columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">Rs. 50/kg</li>
    <li>One Day Delivery</li>
    <li>casuals</li>
    <li>Washing + Drying</li>
    <li>Suitable for common wears for daily purposes</li>
  </ul>
</div>

<div class="price-columns">
  <ul class="price">
    <li class="header" style="background-color:#ff4500">Pro</li>
    <li class="grey">Rs 150 /kg</li>
    <li>Upto three days delivery</li>
    <li>formals</li>
    <li>Washing + Drying + Ironing</li>
    <li>Suitable for frequent use of uniforms or formals</li>
  </ul>
</div>

<div class="price-columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">Rs200/kg</li>
    <li>Upto 5-7 days delivery</li>
    <li>Delicates</li>
    <li>Washing + Drying + Ironing + Dry cleaning</li>
    <li>Suitable for delicate wears that may need extra care</li>
  </ul>
</div>
</div>
<!-- -------------PRICING TABELS-------------------- -->

<!-- FORM -->
<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="dropdown" style="margin: 15px;">
<select name="order_item">
  <option value="Basic">Basic</option>
  <option value="Pro">Pro</option>
  <option value="Premium">Premium</option>
</select>
<input type="submit" name="item_btn" value="Submit">
</div>
</form>
<!-- FORM -->

<br>
<br>
<br> 

<!-- CONTACT US starts here -->
<a name="contact"></a>
<div class="container_US">
   <div style="text-align:center">
     <h2>Keep in Touch... <a href="https://api.whatsapp.com/send?phone=918723031166"><i class="fa fa-whatsapp"></i></a></h2>
     <p>Swing by or leave us a message:</p>
   </div>
   <div class="row_contact">
    <div class="column_contact">
        <img src="contact_map.jpg" style="width:100%">
    </div>
      <div class="column_contact">
        <h2>UPDATE DETAILS</h2>
	       <form name="register" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">Name:</label>
        <input type="text" name="username" id="UserName" placeholder="<?php echo $row['name'];?>" required>
        <br>
        <br>
        <label for="address">Address:</label>
        <textarea name="address" rows="5" cols="40" id="UserAdd" placeholder="<?php echo $row['address']; ?>"></textarea>
        <br>
        <br>
        <label for="phone">Phone:</label>
        <input type="number" name="phone" disabled="" id="UserPhone" placeholder="<?php echo $row['phonenumber'] ;?>">
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="UserEmail" placeholder="<?php echo $row['email'];?>">
        <br>
        <br>
        <input type="submit" name="update" value="submit">
        </form>
      </div>
   </div>
</div>
<!-- CONTACT US ends here -->
</body>
</html>