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

	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			max-width: 100%;
			background-size: cover;
			font-family: "Poppins", sans-serif;
		}

		html {
			scroll-behavior: smooth;
		}

		.pageOne {
			height: 100vh;
			overflow: hidden;
			top: 0;
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
			text-decoration: none;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.interact a:hover:not(.active) {
			background-color: #111;
			text-decoration: none;
		}

		.active {
			background-color: #C18381;
		}

		.title {
			font-weight: bold;
			color: white;
		}

		.search {
			width: 30vh;
			border: none;
			margin-right: 16px;
			font-size: 17px;
		}

		.textIntro {
			margin-top: 100px;
			text-align: center;
			color: black;
			font-size: 50px;
			font-weight: bold;
		}


	</style>
</head>

<body>
	<div class="pageOne">
		<!-- NAVIGATION BAR -->
		<div class="navBar">
			<ul>
				<li class="title"><a>AquaFlants</a></li>
				<li class="interact"><a href="form1.php">Home</a></li>
				<li class="interact"><a href="view.php">View Plants</a></li>
				<li class="interact"><a href="addProd.php">Add Plants</a></li>
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
			<div class="introduc">
 
			
			</div>
		</div>
	</div>

</body>

</html>