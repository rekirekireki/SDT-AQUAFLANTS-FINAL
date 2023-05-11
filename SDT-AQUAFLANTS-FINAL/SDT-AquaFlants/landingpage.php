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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="landingpage.css">

</head>

<body>
<video id="bg-video" autoplay muted loop>
        <source src="bgvid.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>  
	<div class="pageOne">
		<!-- NAVIGATION BAR -->
		<div class="navBar">
			<ul>
				<li class="title"><a>AquaFlants</a></li>
				<li class="interact"><a href="landingpage.php">Home</a></li>
				<li class="interact"><a href="view.php">View Plants</a></li>
				<li class="interact"><a href="writer.php">Add Plants</a></li>
				<li class="title">
					<a>
						<form action="search.php" method="post">
							<input class="search" type="text" name="search" placeholder="Search a Plants...">
						</form>
					</a>
				</li>
				<li class="interact" style="float:right"><a class="active" href="logout.php">Log-out</a></li>
			</ul>
		</div>



		<!-- BODY, DITO KAYO MAG LAGAY NG CONTENT -->
		<div class="parentCont1"> 
    <div class="card-deck">
              <div class="card mb-4">
                <img class="card-img-top" src="profile.jpg" alt="Small-Scale Backyard">
                <div class="card-body">
                  <h5 class="card-title">Profile Page</h5>
                  <a href="profile.html" class="btn btn-primary">See Your Profile</a>
                </div>
              </div>
              <div class="card mb-4">
                <img class="card-img-top" src="calendar.png" alt="Large-Scale Backyard">
                <div class="card-body">
                  <h5 class="card-title">Garden Type</h5>
                  <a href="selectgarden.html" class="btn btn-primary">Select Garden Type</a>
                </div>
              </div>
            </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>