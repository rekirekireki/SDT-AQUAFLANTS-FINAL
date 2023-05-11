<?php
session_start();
if (!isset($_SESSION["userID"])) {
  header("location: index.html");
  die();
}

include_once("connection.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Update Plant Information</title>
	<style>
		body {
			background-image: url("your-background-image-url");
			background-size: cover;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
			max-width: 600px;
			margin: 0 auto;
		}

		h1 {
			font-family: 'Poppins', sans-serif;
			font-size: 36px;
			text-align: center;
			margin-top: 50px;
			margin-bottom: 20px;
		}

		input[type="text"],
		select {
			display: block;
			box-sizing: border-box;
			width: 100%;
			padding: 10px;
			font-size: 16px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}

		label {
			font-family: 'Lora', serif;
			font-size: 18px;
			margin-bottom: 10px;
			display: block;
		}

		button[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}

		button[type="submit"]:hover {
			background-color: #45a049;
		}

		#video-bg {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
			z-index: -1;
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
	<video autoplay muted loop id="video-bg">
		<source src="bgvid.mp4" type="video/mp4">
	</video>
	<div class="navBar">
    <ul>
      <li class="title"><a>AquaFlants</a></li>
      <li class="interact"><a href="landingadmin.php">Home</a></li>
      <li class="interact" style="float:right"><a class="active" href="logout.php">Log-out</a></li>
    </ul>
  </div>
	<h1>Update Plant Information</h1>
	<form action="updatePlant.php" method="post">
		<label for="type">Type of Plant:</label>
		<select id="type" name="type" required>
			<option value="Flower">Flower</option>
			<option value="Fruit">Fruit</option>
			<option value="Herb">Herb</option>
			<option value="Tree">Tree</option>
			<option value="Vegetable">Vegetable</option>
		</select>

		<label for="garden-size">Garden Size:</label>
		<input type="text" id="garden-size" name="garden-size" required>

		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="description">Description:</label>
		<textarea id="description" name="description" rows="5" required></textarea>

		
		<select id="soil-preference" name="soilpref">
			<option value="">Select an option</option>
			<option value="Clay">Clay</option>
			<option value="Sandy">Sandy</option>
			<option value="Loamy">Loamy</option>
			<option value="Chalky">Chalky</option>
			<option value="Peaty">Peaty</option>
		</select>

		<label for="sunlight-preference">Sunlight Preference</label>
		<select id="sunlight-preference" name="sunpref">
			<option value="">Select an option</option>
			<option value="full-sun">Full Sun</option>
			<option value="partial-sun">Partial Sun</option>
			<option value="partial-shade">Partial Shade</option>
			<option value="full-shade">Full Shade</option>
			<option value="low-light">Low Light</option>
		</select>

		<label for="water-preference">Water Preference</label>
		<select id="water-preference" name="waterpref">
			<option value="">Select an option</option>
			<option value="dry">Dry</option>
			<option value="moderate">Moderate</option>
			<option value="wet">Wet</option>
			<option value="constant">Constant</option>
			<option value="intermittent">Intermittent</option>
		</select>

		<button type="submit">Update</button>
	</form>
</body>

</html>