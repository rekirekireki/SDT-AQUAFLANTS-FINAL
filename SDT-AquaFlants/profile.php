<?php
session_start();
if (!isset($_SESSION["userID"])) {
	header("location: index.php");
	die();
}

$user_id = $_SESSION['userID'];
include_once("connection.php");

$userID = $user_id; // replace with your actual userID

// retrieve user information based on userID
$viewQuery = $pdo->prepare("SELECT * FROM user WHERE ID LIKE '%$userID%'");
$viewQuery->execute();

?>

<!DOCTYPE html>
<html>

<head>
  <title>User Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>

<body>

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


  <h1 class="hi">User Profile</h1>

  <form>
    <?php
      while ($row = $viewQuery->fetch()) {
      $firstName = $row['firstName'];
      $lastName = $row['lastName'];
      $username = $row['userName'];
      $email = $row['email'];
    }
    ?>
    <div>
      <label for="first-name">First Name:</label>
      <input type="text" id="first-name" name="first-name" value="<?php echo $firstName; ?>" readonly>
    </div>
    <div>
      <label for="last-name">Last Name:</label>
      <input type="text" id="last-name" name="last-name" value="<?php echo $lastName; ?>" readonly>
    </div>
    <div>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" value="<?php echo $username; ?>" readonly>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>
    </div>
    <a href="editprofile.php"><button type="button" id="edit-btn">Edit Profile</button></a>
  </form>

</body>

</html>