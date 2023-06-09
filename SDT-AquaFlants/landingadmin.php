<?php
session_start();
if (!isset($_SESSION["userID"])) {
	header("location: index.html");
	die();
}

include_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Choose Your Garden Type</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat|Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="landingadmin.css">
</head>
<body>    
  <video id="bg-video" autoplay muted loop>
    <source src="bgvid.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <div class="navBar">
    <ul>
    <li class="title"><a>AquaFlants</a></li>
      <li class="interact"><a href="landingadmin.php">Home</a></li>
        <li class="interact" style="float:right"><a class="active" href="logout.php">Log-out</a></li>
    </ul>
</div>

  <div class="container">
    <div class="card-deck">
      <div class="card mb-4">
        <img class="card-img-top" src="questionmark.gif" alt="questionmark">
        <div class="card-body">
          <h5 class="card-title">Plant Suggestion</h5>
          <a href="approveplanttable.php" class="btn btn-primary">Proceed</a>
        </div>
      </div>
      <div class="card mb-4">
        <img class="card-img-top" src="change.gif" alt="change">
        <div class="card-body">
          <h5 class="card-title">Edit a Plant Information</h5>
          
          <a href="edittableplant.php" class="btn btn-primary">Edit</a>
        </div>
      </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
