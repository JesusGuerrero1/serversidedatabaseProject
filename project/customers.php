<?php
	include ('config.php');
	
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	
	//Validation for the form
	if (empty($_POST["firstname"])) {
		echo "Error: First name is required";
		header("refresh:3 url = index.php");
		return false;
	} else {
		$name = test_input($_POST["firstname"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			echo "Error: Only letters and white space allowed";
			header("refresh:3 url = index.php");
			return false;
		}
	}
	
	if (empty($_POST["lastname"])) {
		echo "Error: Last name is required";
		header("refresh:3 url = index.php");
		return false;
	} else {
		$name = test_input($_POST["lastname"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			echo "Error: Only letters and white space allowed";
			header("refresh:3 url = index.php");
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
	
	
	$sql = "INSERT INTO contactInfo(fname,lname,email,subject) VALUES('$fname','$lname','$email','$subject')";

	if (mysqli_query($conn, $sql)) {
		echo "Request sent successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	header("refresh:4 url = index.php");

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	mysqli_close($conn);
?>
