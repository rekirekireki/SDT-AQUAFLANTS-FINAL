<?php
session_start();
include_once("connection.php");

$user_id = $_SESSION['userID'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Update the user info in the database
$updateQuery = $pdo->prepare("UPDATE user SET firstName = :ufname, lastName = :ulname, email = :uemail, userName = :username, userPassword = :upassword WHERE ID = :user_id");
$updateQuery->bindParam(':user_id', $user_id);
$updateQuery->bindParam(':ufname', $fname);
$updateQuery->bindParam(':ulname', $lname);
$updateQuery->bindParam(':username', $username);
$updateQuery->bindParam(':uemail', $email);
$updateQuery->bindParam(':upassword', $password);
$updateQuery->execute();
echo "<script>window.open('profile.php','_self')</script>";
?>