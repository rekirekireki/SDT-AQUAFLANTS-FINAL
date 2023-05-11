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
	<title>LIST OF PLANTS</title>
	<style>
		body {
			background-color: #f7f7f7;
		}

		table {
			border-collapse: collapse;
			margin: 0 auto;
			background-color: #ffffff;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}

		th,
		td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
			font-weight: bold;
		}

		h1 {
			text-align: center;
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
	<h1>LIST OF PLANTS</h1>
	<table>
		<thead>
			<tr>
				<th>PICTURE</th>
				<th>TYPE OF PLANT</th>
				<th>GARDEN SIZE</th>
				<th>NAME</th>
				<th>DESCRIPTION</th>
				<th>SOIL PREFERENCE</th>
				<th>SUNLIGHT PREFERENCE</th>
				<th>WATER PREFERENCE</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$viewQuery = $pdo->prepare("SELECT * FROM planttbl WHERE plantStatus LIKE '1'");
			$viewQuery->execute();
			$totalRecords = $viewQuery->rowCount();

			while ($rows = $viewQuery->fetch()) {
				$plantID = $rows['plantID'];
				$plantPhoto = $rows['Photo'];
				$plantType = $rows['plantType'];
				$gardenSize = $rows['gardenSize'];
				$plantName = $rows['plantName'];
				$plantDes = $rows['plantDes'];
				$soilPref = $rows['plantSoil'];
				$sunlightPref = $rows['plantSun'];
				$waterPref = $rows['plantWater'];

			?>
				<tr>
					<td class="ctd"><img src="Plants/<?php echo $plantPhoto; ?>" alt="Plant Picture" width="100" /></td>
					<td><?php echo $plantType; ?></td>
					<td><?php echo $plantName; ?></td>
					<td><?php echo $plantDes; ?></td>
					<td><?php echo $gardenSize; ?></td>
					<td><?php echo $soilPref; ?></td>
					<td><?php echo $sunlightPref; ?></td>
					<td><?php echo $waterPref; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>

</html>