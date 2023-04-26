<?php
include_once("connection.php");
	$fname = ($_POST['firstname']);
	$lname = ($_POST['lastname']);
	$email = ($_POST['email']);
	$username = ($_POST['username']);
	$password =($_POST['password']);

	
	$insertQuery = $pdo->prepare("INSERT INTO user (firstName, lastName, email, userName, userPassword) 
	VALUES (:ufname,:ulname, :uemail, :username, :upassword)");
	$insertQuery->bindParam(':ufname',$fname);
	$insertQuery->bindParam(':ulname',$lname);
	$insertQuery->bindParam(':username',$username);
	$insertQuery->bindParam(':uemail',$email);
	$insertQuery->bindParam(':upassword',$password);
	$insertQuery->execute();
	if($insertQuery){
		echo "<script>alert('Successfully Registered')</script>";
		echo "<script>window.open('dashboard.php','_self')</script>";
	} else {
		echo "<script>alert('Error in Registering')</script>";
	}
?>
