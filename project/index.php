<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/styles.css" />
<script type="text/javascript " src = "assets/source.js" ></script>

</head>
<body>
<h1>
<IMG SRC="assets/carImage.png" height="50" width="75" hspace="10">
CAR DEALERSHIP
</h1>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="services.php">Services</a>
  <div class="dropdown">
    <button class="dropbtn">Cars For Sale 
    </button>
    <div class="dropdown-content">
      <a href="searchnew.php">Search New</a>
      <a href="searchused.php">Search Used</a>
      <a href="sell.php">Sell Your Car</a>
    </div>
  </div> 
</div>
</br>

<h2 align="center">Featured Cars</h2>
<IMG SRC="upload/2016Lexus.jpg" height="50%" width="33%">
<IMG SRC="upload/2017hyundai.jpg" height="50%" width="33%">
<IMG SRC="upload/2019hyundai.jpg" height="50%" width="33%">

<hr>

<div class="container">
	<h2 align="center">Contact Us</h2>
	<form method="post" action="customers.php" name="myForm">	
		<label for="firstname">First Name</label>
		<input type="text" id="fistname" name="firstname" placeholder="Your name..">
		</br>
		<label for="lastname">Last Name</label>
		<input type="text" id="lastname" name="lastname" placeholder="Your last name..">
		</br>
		<label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="email@email.com">
		</br>
		<label for="subject">Subject</label>
		<textarea id="subject" name="subject" placeholder="(Optional)" style="height:150px"></textarea>
		<input type="submit" value="Submit">
	</form>
</div>

<hr>

<h2 align="center">About</h2>
<p id="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Donec blandit id augue quis iaculis. 
Suspendisse tellus velit, consectetur sit amet tellus vitae, ornare molestie enim. 
Duis efficitur purus at posuere tincidunt. Nunc elementum, metus sed sodales elementum, sapien felis efficitur quam, gravida interdum massa neque ut magna. 
Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
Vestibulum metus nulla, ultrices nec varius in, tempor et mi. Sed rutrum in orci nec tincidunt. 
In semper rhoncus eleifend. Sed pharetra ligula vel tincidunt sagittis. 
Duis accumsan leo nec nulla luctus, ac pulvinar enim faucibus. 
Morbi viverra tempor scelerisque. Maecenas quis iaculis ipsum. 
Donec sed metus lectus. Suspendisse placerat metus sed nulla interdum tempus. 
In ullamcorper vel lorem sed pharetra.
</p>
</body>
</html>
