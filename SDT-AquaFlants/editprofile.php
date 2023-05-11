<?php
session_start();
if (!isset($_SESSION["userID"])) {
	header("location: index.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="editprofile.css">
  <title>Edit Account Information</title>
</head>
<body>

  <video id="bg-video" autoplay muted loop>
    <source src="bgvid.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video> 

  <video id="bg-video" autoplay muted loop>
    <source src="bgvid.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <div class="navBar">
			<ul>
				<li class="title"><a>AquaFlants</a></li>
				<li class="interact"><a href="landingpage.php">Home</a></li>
        <li class="interact"><a href="profile.php">Profile</a></li>
				<li class="interact"><a href="view.php">View Plants</a></li>
				<li class="interact"><a href="addplant.php">Add Plants</a></li>
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


<div class="container">
    <h1>Edit Account Information</h1>
<form action="profileedit.php" method="post">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" >
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" >
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" >
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" >
  </div>
    <div class="button-group">
      <button class="primary" type="submit">Submit</button>
      <button class="secondary" type="button" onclick="window.location.href='profile.php';">Cancel</button>
    </div>
  </form>
</body>
</html>
