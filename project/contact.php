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

<div class="container">
	<h2 align="center">Request Appointment</h2>
	<form method="post" action="customers.php" name="myForm">	
		<label for="firstname">First Name</label>
		<input type="text" id="firstname" name="firstname" placeholder="Your first name..">
		</br>
		<label for="lastname">Last Name</label>
		<input type="text" id="lastname" name="lastname" placeholder="Your last name..">
		</br>
		<label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="email@email.com">
		</br>
		<label for="subject">Subject</label>
		<textarea id="subject" name="subject" placeholder="Set up appointment to.." style="height:150px"></textarea>
		<input type="submit" value="Submit">
	</form>
</div>

</body>
</html>
