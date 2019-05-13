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
	<h2 align="center">Sell Your Car</h2>
	<form method="post" action="listcar.php" name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">	
		<label for="type">Type</label>
		<select id="type" name="type">
				<option value="Sedan">Sedan</option>
				<option value="Truck">Truck</option>
				<option value="Coupe">Coupe</option>
				<option value="SUV">SUV</option>
				<option value="Convertible">Convertible</option>
		</select>
		</br>
		<label for="make">Make</label>
		<input type="text" id="make" name="make" placeholder="Toyota, Ford, BMW...">
		</br>
		<label for="year">Year</label>
		<input type="text" id="year" name="year" placeholder="Car Year">
		</br>
		<label for="miles">Miles</label>
		<input type="text" id="miles" name="miles" placeholder="50,000 mi">
		</br>
		<label for="price">Price</label>
		<input type="text" id="price" name="price" placeholder="$10,000">
		</br>
		<label for="email">Contact Info</label>
		<input type="text" id="email" name="email" placeholder="email@email.com">
		</br>
		<label for="info">Other Info</label>
		<textarea id="info" name="info" placeholder="MPG, Transmission, Repairs, etc.." style="height:150px"></textarea>
		</br>
		<label for="pic">Upload Image</label></br>
		<input type="file" id="pic" name="pic">
		</br>
		<input type="submit" value="Submit">
	</form>
</div>

</body>
</html>
