<?php
include_once("connection.php");
$fname = ($_POST['firstname']);
$lname = ($_POST['lastname']);
$email = ($_POST['email']);
$username = ($_POST['username']);
$password =($_POST['password']);

// Check if the username already exists in the database
$checkQuery = $pdo->prepare("SELECT COUNT(*) as count FROM user WHERE userName = :username");
$checkQuery->bindParam(':username', $username);
$checkQuery->execute();
$result = $checkQuery->fetch(PDO::FETCH_ASSOC);

if ($result['count'] > 0) {
    echo "<script>alert('Username already exists')</script>";
    echo "<script>window.open('createaccount.php','_self')</script>";
} else {
    // Insert the new user into the database
    $insertQuery = $pdo->prepare("INSERT INTO user (firstName, lastName, email, userName, userPassword) 
    VALUES (:ufname, :ulname, :uemail, :username, :upassword)");
    $insertQuery->bindParam(':ufname', $fname);
    $insertQuery->bindParam(':ulname', $lname);
    $insertQuery->bindParam(':username', $username);
    $insertQuery->bindParam(':uemail', $email);
    $insertQuery->bindParam(':upassword', $password);
    $insertQuery->execute();
    if ($insertQuery) {
        echo "<script>alert('Successfully Registered')</script>";
        echo "<script>window.open('mainpage.php','_self')</script>";
    } else {
        echo "<script>alert('Error in Registering')</script>";
    }
}
?>