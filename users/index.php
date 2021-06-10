<!DOCTYPE html>
<html>
<head>
	<title>Landing page</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"charset="utf-8">

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

    function collapseMenu(){
      var x = document.getElementById("navbar-right");
      if(x.style.display == "block"){
        x.style.display += " none";
      }
      else{
        x.style.display="block";
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
    <a href="user_panel.php">Order</a>
    <a href="logout.php">LogOut</a>
  </div>
</div>
<!-- ======================================== -->
<!-- ======================================== -->

<!-- ORDER BUTTON starts here -->
<div class="hero-image">
	<button onclick="location.href='login.php';" >ORDER NOW!</button>
</div>
<!-- ======================================= -->
<!-- ======================================= -->

<!-- STICKY SOCIAL BAR -->
<div class="icon-bar">
  <a href="https://www.facebook.com/shiners.in/" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="https://g.page/shiners-in/" class="google"><i class="fa fa-google"></i></a> 
  <a href="https://api.whatsapp.com/send?phone=918723031166" class="whatsapp"><i class="fa fa-whatsapp"></i></a> 
</div>
<!-- ========================================== -->
<!-- ========================================== -->

<!-- TEXT starts here-->
<div class="text">
  <h2>WHAT DO WE HAVE</h2>
  <p>Solutions to all your laundry</p>
</div>
<!-- ======================================= -->
<!-- ======================================== -->

<br>
<br>

<!-- SECTION COUNTER starts here-->
<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-truck"></i></p>
      <h3>DOOR-TO-DOOR SERVICE</h3>
      <p>we will take your clothes from your door and deliver it to you clean and safe</p>
    </div>
  </div>

  <!-- <div class="column">
    <div class="card">
      <p><i class="fa fa-hourglass"></i></p>
      <h3>PUNCTUALITY</h3>
      <p>The clothes are guaranteed to be delivered within the expected time mentioned.</p>
    </div>
  </div> -->
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-money"></i></p>
      <h3>AFFORDABLE PRICE</h3>
      <p>our services strives for the best quality cleaning for a of cash as per users convinience</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-thumbs-o-up"></i></p>
      <h3>QUALITY</h3>
      <p>we understand customers concern for their clothes, and we take the utmost care for any damage or stain.</p>
    </div>
  </div>
</div>
<!-- ========================================================= -->
<!-- ========================================================= -->

<br>
<br>

<!-- TEXT starts here-->
<div class="text" id="mid-text">
  <h2>WHY CHOOSE US?</h2>
  <p>because we understand the struggle of life</p>
  <p>And we care about your clothes</p>
</div>
<!-- ========================================================== -->
<!-- ========================================================== -->

<br>
<br>

<!-- TEXT starts here-->
<div class="text">
  <h2>CHOOSE PRICE AS PER YOUR CONVINIENCE</h2>
</div>
<!-- ========================================================== -->
<!-- ========================================================== -->

<br>
<br>

<!-- PRICE TABLE starts here -->
<div class="container">
<div class="price-columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">Rs. 50/kg</li>
    <li>One Day Delivery</li>
    <li>casuals</li>
    <li>Washing + Drying</li>
    <li>Suitable for common wears for daily purposes</li>
    <li class="grey"><a href="login.php" class="button">ORDER NOW</a></li>
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
    <li class="grey"><a href="login.php" class="button">ORDER NOW</a></li>
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
    <li class="grey"><a href="login.php" class="button">ORDER NOW</a></li>
  </ul>
</div>
</div>
<!-- =============================================================== -->
<!-- =============================================================== -->

<br>
<br>

<!-- TEXT starts here-->
<div class="text" id="mid-text">
  <h2>HAPPY CUSTOMERS</h2>
  <p>we have always try to meet 100% customer's expectations.</p>
  <p>Listen to what they have to say about us...</p>
</div>
<!-- ========================================================== -->
<!-- ========================================================== -->

<br>
<br>

<!-- TESTIMONIALS starts here -->
<div class="container_Testimonial">
  <img src="order_btn.jpg" alt="Avatar"  style="width: 90px;">
  <p><span>Chris Fox.</span> Oyo manager.</p>
  <p>John Doe saved us from a laundry disaster.</p>
</div>

<div class="container_Testimonial">
  <img src="order_btn.jpg" alt="Avatar" style="width:90px;">
  <p><span>Rebecca Flex.</span> owner of Thengal manor</p>
  <p>No one is better than Nilom.</p>
</div>

<div class="container_Testimonial">
  <img src="order_btn.jpg" alt="Avatar" style="width: 90px;">
  <p><span>john Ambrose</span> owner of Golf Resort</p>
  <p>When it comes to quality and safety, we trust shiners.</p>
</div>
<!-- =============================================================== -->
<!-- =============================================================== -->

<br>
<br>

<!-- CONTACT US starts here -->
<a name="contact"></a>
<div class="container_US">
   <div style="text-align:center">
     <h2>Contact Us</h2>
     <p>Swing by or leave us a message:</p>
   </div>
   <div class="row_contact">
    <div class="column_contact">
        <img src="contact_map.jpg" style="width:100%">
    </div>
      <div class="column_contact">
	      <form action="/action_page.php">
	        <label for="phone">Phone Number</label>
	        <input type="text" id="phone" name="phone" placeholder="Your Phone Number..">
	        <label for="subject">Subject</label>
	        <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
	        <input type="submit" value="Submit">
	      </form>
      </div>
   </div>
</div>
<!-- CONTACT US ends here -->
</body>
</html>