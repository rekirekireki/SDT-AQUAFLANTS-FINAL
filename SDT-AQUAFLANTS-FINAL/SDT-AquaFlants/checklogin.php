<?php
session_start();
include_once("connection.php");
$Username=$_POST['username'];
$Password=$_POST['password'];
$query = $pdo->prepare("SELECT * FROM user WHERE userName = :Username and userPassword = :Password");
$query->bindParam(':Username', $Username);
$query->bindParam(':Password', $Password);
$query->execute();

if ($query->rowCount() > 0) {
    echo "Welcome";
    $row = $query->fetch();
    $userID = $row['ID'];
    $_SESSION['userID'] = $userID;
    header("location: landingpage.php"); 
} else {
    echo "<script>alert('Sorry, Wrong Username or Password!')</script>";
    echo "<script>window.open('loginpage.php','_self')</script>";
}
?>