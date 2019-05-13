<?php
	include('config.php');
	
	$type = $_POST['type'];
	$make = $_POST['make'];	
	$year = $_POST['year'];
	$miles = $_POST['miles'];
	$price = $_POST['price'];
	$email = $_POST['email'];
	$info = $_POST['info'];
	
	if (empty($_POST["make"])) {
		echo "Error: Please enter the make of the car.";
		header("refresh:3 url = sell.php");
		return false;
	} else {
		$name = test_input($_POST["make"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			echo "Error: Only letters and white space allowed";
			header("refresh:3 url = sell.php");
			return false;
		}
	}
	
	if (empty($_POST["year"])) {
		echo "Error: Please enter the year of the car.";
		header("refresh:3 url = sell.php");
		return false;
	} else {
		if (!is_numeric($year)) {
			echo "Error: Only numerical values allowed.";
			header("refresh:3 url = sell.php");
			return false;
		}
	}
	
	if (empty($_POST["miles"])) {
		echo "Error: Please enter the miles of the car.";
		header("refresh:3 url = sell.php");
		return false;
	} else {
		if (!is_numeric($miles)) {
			echo "Error: Only numerical values allowed.";
			header("refresh:3 url = sell.php");
			return false;
		}
	}
	
	if (empty($_POST["price"])) {
		echo "Error: Please enter the price of the car.";
		header("refresh:3 url = sell.php");
		return false;
	} else {
		if (!is_numeric($price)) {
			echo "Error: Only numerical values allowed.";
			header("refresh:3 url = sell.php");
			return false;
		}
	}
	
	if (empty($_POST["email"])) {
		echo "Error: Email is required";
		header("refresh:3 url = index.php");
		return false;
	} else {
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Error: Invalid email format";
			header("refresh:3 url = index.php");
			return false;
		}
	}
	
	$year = filter_var($year, FILTER_SANITIZE_NUMBER_INT);
	$price = filter_var($price, FILTER_SANITIZE_NUMBER_INT);
	$miles = filter_var($miles, FILTER_SANITIZE_NUMBER_INT);
	
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["pic"]["name"]);
	$image = basename($_FILES["pic"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["pic"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check file size
	if ($_FILES["pic"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
			$sql = "INSERT INTO usedcars(make,type,year,price,miles,email,info,image) VALUES('$make','$type','$year','$price','$miles','$email','$info','$image')";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	
	if (mysqli_query($conn, $sql)) {
		echo "Car listed successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	header("refresh:4 url = sell.php");

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	mysqli_close($conn);
?>
