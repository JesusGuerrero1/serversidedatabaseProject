<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="assets/styles.css" />
<script type="text/javascript " src = "assets/source.js" ></script>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #333;
  color: white;
  text-align: center;
}
</style>
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


<h1 align="center">Search Results</h1>

<?php
	include('config.php');
	$type = $_POST['cartype'];	
	$year = $_POST['caryear'];
	$price = $_POST['carprice'];
	$miles = $_POST['miles'];
	
	if($type != "any"){
		$tquery = " where type = '$type'";
	}
	else{
		$tquery = " where type like '%'";
	}
	
	if($year != "any"){
		$yquery = " and year < '$year'";
	}
	else{
		$yquery = "";
	}
	
	if($price == "any"){
		$pquery = "";
	}
	else if($price == "60000"){
		$pquery = " and price > '$price'";
	}
	else{
		$pquery = " and price < '$price'";
	}
	
	if($miles == "any"){
		$mquery = "";
	}
	else if($miles == "100000"){
		$mquery = " and miles > '$miles'";
	}
	else{
		$mquery = " and miles < '$miles'";
	}
	
	$sql = "select * from usedcars" . $tquery . $yquery . $pquery . $mquery;
	$result = mysqli_query($conn,$sql);
		
	echo "<p>";
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table border = 1 bgcolor = 'white'>
		<tr>
		<th width='25%'>Information</th>
		<th width='25%'>Customer Information</th>
		<th width='50%'>Image</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td><p id='intro'>" .$row["year"]. " " .$row["make"]. "</br>"  .$row["type"]. 
			"</br>$" .number_format($row["price"],2). "</br>" .number_format($row["miles"]). " mi</p></td>";
			echo "<td><p id='intro'>" .$row["info"]. "</br></br>Owner Email: " .$row["email"]. "</p></td>";
			echo "<td><img src='upload/" .$row["image"]. "'></td>";
			echo "</tr>";
		}
	}else
	{
		echo "<tr>No results found</tr>";
	}
	echo "</table>";
	echo "</p>";
	
?>
</br>
<p align="center"><a href="searchused.php"><button class="button button1">Search Again</button></a></p>
</body>
</html>