<?php
include_once("connection.php");

// Check if any of the form fields are empty
if (empty($_POST['typeplant']) || empty($_POST['nameplant']) ||
    empty($_POST['plantdes']) || empty($_POST['gardenSize']) || empty($_POST['soilpref']) ||
    empty($_POST['sunpref']) || empty($_POST['waterpref'])) {
    echo "<script>alert('Sorry! All fields are required')</script>";
    echo "<script>window.open('addplant.php','_self')</script>";
    exit;
}

$plantType = $_POST['typeplant'];
$plantName = $_POST['nameplant'];
$plantDes = $_POST['plantdes'];
$gardenSize = $_POST['gardenSize'];
$soilPref = $_POST['soilpref'];
$sunlightPref = $_POST['sunpref'];
$waterPref = $_POST['waterpref'];
$plantPhoto = $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];

$size = $_FILES['image']['size'];

//UPLOAD PATH
$path = 'Plants/';
//TO GET THE IMAGE EXTENTION
$imgExt = strtolower(pathinfo($plantPhoto, PATHINFO_EXTENSION));
//acceptable file ext
$validExt = array('jpg','jpeg','png','gif');
//new name once uploaded
$newname = rand(1000, 99999).".".$imgExt;
if(in_array($imgExt,$validExt)){
    if($size < 5000000){ // 5 MB
        if(move_uploaded_file($tempName,$path.$newname)){
            $insertQuery = $pdo->prepare("INSERT INTO planttbl (plantType, plantName, plantDes, gardenSize, plantSoil, plantSun, plantWater, Photo)
            VALUES (:plantType, :plantName, :plantDes,:gardenSize, :soilPref, :sunlightPref, :waterPref, :plantPhoto)");
            
            $insertQuery->bindParam(':plantType', $plantType);
            $insertQuery->bindParam(':plantName', $plantName);
            $insertQuery->bindParam(':plantDes', $plantDes);
            $insertQuery->bindParam(':soilPref', $soilPref);
            $insertQuery->bindParam(':gardenSize', $gardenSize);
            $insertQuery->bindParam(':sunlightPref', $sunlightPref);
            $insertQuery->bindParam(':waterPref', $waterPref);
            $insertQuery->bindParam(':plantPhoto', $newname);
            
            $insertQuery->execute();
            echo "<script>alert('Successfully Register')</script>";
            echo "<script>window.open('addplant.php','_self')</script>";
        } else {
            echo "<script>alert('Sorry! Error uploading image')</script>";
            echo "<script>window.open('addplant.php','_self')</script>";
        }
    } else {
        echo "<script>alert('Sorry! Your file is too large')</script>";
        echo "<script>window.open('addplant.php','_self')</script>";
    }
} else {
    echo "<script>alert('Sorry! Invalid Extension')</script>";
    echo "<script>window.open('addplant.php','_self')</script>";
}
?>