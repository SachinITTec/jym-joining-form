<?php
	$text = $_POST['text'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$add = $_POST['add'];
	$phone = $_POST['phone'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(text, phone, email, add, phone) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $text, $phone, $email, $add, $phone);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
 