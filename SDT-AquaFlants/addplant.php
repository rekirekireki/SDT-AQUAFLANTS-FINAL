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
  <title>Add a Plant</title>
  <link rel="stylesheet" type="text/css" href="addplant.css">
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


  <div class="container">
    <h1 class="he">Add a Plant</h1>
    <form action="insert.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="plant-type">Type of Plant</label>
        <select id="type" name="type" required>
          <option value="Flower">Flower</option>
          <option value="Fruit">Fruit</option>
          <option value="Herb">Herb</option>
          <option value="Tree">Tree</option>
          <option value="Vegetable">Vegetable</option>
        </select>
      </div>
      <div class="form-group">
        <label for="plant-name">Name of Plant</label>
        <input type="text" id="plant-name" name="nameplant" required>
      </div>
      <div class="form-group">
        <label for="garden-type">Garden Type</label>
        <input type="text" id="garden-type" name="plantdes" required>
      </div>
      <div class="form-group">
        <label for="plant-description">Plant Description</label>
        <textarea id="plant-description" name="gardenSize" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <label for="soil-preference">Soil Preference</label>
        <select id="soil-preference" name="soilpref">
          <option value="">Select an option</option>
          <option value="Clay">Clay</option>
          <option value="Sandy">Sandy</option>
          <option value="Loamy">Loamy</option>
          <option value="Chalky">Chalky</option>
          <option value="Peaty">Peaty</option>
        </select>
      </div>
      <div class="form-group">
        <label for="water-preference">Water Preference</label>
        <select id="water-preference" name="waterpref">
          <option value="">Select an option</option>
          <option value="dry">Dry</option>
          <option value="moderate">Moderate</option>
          <option value="wet">Wet</option>
          <option value="constant">Constant</option>
          <option value="intermittent">Intermittent</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sunlight-preference">Sunlight Preference</label>
        <select id="sunlight-preference" name="sunpref">
          <option value="">Select an option</option>
          <option value="full-sun">Full Sun</option>
          <option value="partial-sun">Partial Sun</option>
          <option value="partial-shade">Partial Shade</option>
          <option value="full-shade">Full Shade</option>
          <option value="low-light">Low Light</option>
        </select>
      </div>
      <div class="form-group">
        <label for="plant-image">Plant Image</label>
        <div class="image-upload">
          <label for="image">Insert an image: <span title="Maximum of 5Mb size, only jpeg and png format">&#9432</span></label>
          <input type="file" id="image" name="image">
        </div>
      </div>
  </div>
  <button type="submit">Add Plant</button>
  </form>
  </div>
</body>

</html>