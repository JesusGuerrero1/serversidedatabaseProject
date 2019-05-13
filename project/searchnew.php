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


<h1 align="center">Search New Cars</h1>


<table>
	<form name="searchNew" method="post" action="newresults.php">
	<tr bgcolor="#f2f2f2" height="200px">
			<td>
			<label for="cartype">Car Type</label>
			<select id="cartype" name="cartype">
				<option value="any">Any Type</option>
				<option value="Sedan">Sedan</option>
				<option value="Truck">Truck</option>
				<option value="Coupe">Coupe</option>
				<option value="SUV">SUV</option>
				<option value="Convertible">Convertible</option>
			</select>
			</td>
			<td>
			<label for="caryear">Car Year</label>
			<select id="caryear" name="caryear">
				<option value="any">Any Price</option>
				<option value="2000">&lt; 2000</option>
				<option value="2010">&lt; 2010</option>
				<option value="2020">&lt; 2020</option>
			</select>
			</td>
			<td>
			<label for="carprice">Car Price</label>
			<select id="carprice" name="carprice">
				<option value="any">Any Price</option>
				<option value="10000">&lt; $10,000</option>
				<option value="20000">&lt; $20,000</option>
				<option value="30000">&lt; $30,000</option>
				<option value="40000">&lt; $40,000</option>
				<option value="50000">&lt; $50,000</option>
				<option value="60000">&gt; $50,000</option>
			</select>
			</td>
			<td align="center">
			<input type="submit" value="Search">
			</td>
	</tr>
	</form>
</table>
</br>



</body>
</html>
