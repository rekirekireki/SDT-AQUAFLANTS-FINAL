<?php
session_start();
if (!isset($_SESSION["userID"])) {
	header("location: landingpage.php");
	die();
}
include_once("connection.php");
?>


<!DOCTYPE html>
<html>

<head>
	<title>AquaFlants - Log in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="loginpage.css">
</head>

<body>
	<video autoplay muted loop id="video-bg">
		<source src="bgvid.mp4" type="video/mp4">
	</video>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6">
				<div class="card mt-5">
					<div class="card-header">
						<h3 class="text-center">Welcome to AquaFlants</h3>
					</div>
					<div class="card-body">
						<form class="form-login" action="checklogin.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" class="form-control" id="username" name="username" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<div class="input-group">
									<input type="password" class="form-control" id="password" name="password" required>
									<div class="input-group-append">
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Log in</button>
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-secondary btn-block">Create an account</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://kit.fontawesome.com/1f5a5c5c5b.js" crossorigin="anonymous"></script>
	<script src="loginpage.js"></script>
</body>

</html>