<?php
// Retrieve the values submitted via POST
$type = $_POST['type'];
$garden_size = $_POST['garden-size'];
$name = $_POST['name'];
$description = $_POST['description'];
$soil_pref = $_POST['soilpref'];
$sun_pref = $_POST['sunpref'];
$water_pref = $_POST['waterpref'];

// Connect to the database (replace 'database_name', 'username', and 'password' with the appropriate values)
include_once("connection.php");

// Prepare the SQL statement to update the plant information in the database
$stmt = $pdo->prepare('UPDATE planttbl SET plantType = :type, gardenSize = :garden_size, plantName = :name, plantDes = :description, plantSoil = :soil_pref, plantSun = :sun_pref, plantWater = :water_pref');

// Bind the values to the parameters in the SQL statement
$stmt->bindParam(':garden_size', $garden_size);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':soil_pref', $soil_pref);
$stmt->bindParam(':sun_pref', $sun_pref);
$stmt->bindParam(':water_pref', $water_pref);
$stmt->bindParam(':type', $type);

// Execute the SQL statement
$stmt->execute();

// Redirect back to the form page
header('Location: edittableplant.php');
exit();
?>