<?php
session_start();
if (isset($_SESSION["userID"])) {
	header("location: landingpage.php");
	die();
}

include_once("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <video id="bg-video" autoplay muted loop>
        <source src="bgvid.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video> 
	<header>
		<div class="navBar">
			<ul>
				<li class="title"><h1><a>AquaFlants</a></h1></li>

				<li class="title">
					<a>
						<form action="search.php" method="post">
							<input class="search" type="text" name="search" placeholder="Search a Plants...">
						</form>
					</a>
				</li>
			</ul>
		</div>
	</header>
    <div class="top">
        <h1 class="bo">AquaFlants</h1><br>
        <h2 class="ba">We Plant Plants</h2>
    </div>
	<div class="mama">
		<div class="login">
	    <main>
		    <form id="login-form" action="#" method="post">
			    <h3><label for="username">Username or Email:</label></h3>
			    <input type="text" id="username" name="username" required>
			    <h3><label for="password">Password:</label></h3>
			    <input type="password" id="password" name="password" required>
			    <button type="submit">Login</button>
		    </form>
	    </main>
		</div>
		<div class="container">
			<h1 class="yo">Create an Account</h1>
			<form action="file.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
				  <label for="First Name">First Name:</label>
				  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name" required>
				</div>
				<div class="form-group">
				  <label for="Last Name">Last Name:</label>
				  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" required>
				</div>
				<div class="form-group">
				  <label for="username">Username:</label>
				  <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
				</div>
				<div class="form-group">
				  <label for="username">Email:</label>
				  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
				</div>
				<div class="form-group">
				  <label for="password">Password:</label>
				  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
				</div>
				<button type="submit" class="btn btn-primary">Sign-Up</button>
			  </form>
		</div>
	</div>
</body>
</html>

