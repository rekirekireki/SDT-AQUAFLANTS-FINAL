<?php
session_start();
include_once("connection.php");

$Username=$_POST['username'];
$Password=$_POST['password'];

// Check if the user exists in the user table
$user_query = $pdo->prepare("SELECT * FROM user WHERE userName = :Username and userPassword = :Password");
$user_query->bindParam(':Username', $Username);
$user_query->bindParam(':Password', $Password);
$user_query->execute();

if ($user_query->rowCount() > 0) {
    // User found in user table
    $row = $user_query->fetch();
    $userID = $row['ID'];
    $_SESSION['userID'] = $userID;
    header("location: landingpage.php"); 
} else {
    // User not found in user table, check in admin_user table
    $admin_query = $pdo->prepare("SELECT * FROM adminusers WHERE userName = :Username and password = :Password");
    $admin_query->bindParam(':Username', $Username);
    $admin_query->bindParam(':Password', $Password);
    $admin_query->execute();
    
    if ($admin_query->rowCount() > 0) {
        // User found in admin_user table
        $row = $admin_query->fetch();
        $userID = $row['adminUniqueID'];
        $_SESSION['userID'] = $userID;
        header("location: landingadmin.php"); 
    } else {
        // User not found in either table
        echo "<script>alert('Sorry, Wrong Username or Password!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>