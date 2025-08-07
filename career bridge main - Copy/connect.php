<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$skill = $_POST['skill'];
	$education = $_POST['education'];
	$experience= $_POST['experience'];
	$companyname = $_POST['companyname'];
	// Database connection
	$conn = new mysqli('localhost','root','','test3');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number,skill,education,experience,companyname) values(?, ?, ?, ?, ? , ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssissss", $firstName, $lastName, $gender, $email, $password, $number,$skill,$education,$experience,$companyname);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>