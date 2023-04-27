<?php
session_start();

if(isset($_SESSION["userID"])){
	
	$uid = $_SESSION["userID"];
	
	$query = $pdo->prepare("SELECT * FROM users WHERE ID = :uid");
	$query->bindParam(':uid',$uid);
	$query->execute();
	
	while($row = $query->fetch()){
			$pangalan = $row['FirstName'];
	}
	
	
} else {
	header("location: loginpage.php");
	die();
}
?>