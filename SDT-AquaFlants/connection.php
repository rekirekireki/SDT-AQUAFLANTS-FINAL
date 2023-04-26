<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "aquaflants";
$variable=mysqli_connect($host,$username,$password,$dbname) or die ("can't connect to database");
try{
	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo "Connection failed: " .$e->getMessage();
}

?>
