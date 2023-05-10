<?php
session_start();
include_once("connection.php");
$title = $_POST['title'];
$description = $_POST['description'];
$start = $_POST['start_datetime'];
$end = $_POST['end_datetime'];
$water = $_POST['event-watered'];
$sunlight = $_POST['event-sunlight'];
$author_id = $_SESSION['userID'];

// Check if file is uploaded
if (isset($_FILES['event-image']) && $_FILES['event-image']['error'] == 0) {
    $target_dir = "Plants/";
    $target_file = $target_dir . basename($_FILES["event-image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $new_file_name = uniqid() . '.' . $imageFileType;
    $target_path = $target_dir . $new_file_name;
    
    // Check if file is an image
    $check = getimagesize($_FILES["event-image"]["tmp_name"]);
    if($check === false) {
        echo "<script>alert('File is not an image.')</script>";
        exit;
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>alert('Sorry, file already exists.')</script>";
        exit;
    }
    
    // Check file size
    if ($_FILES["event-image"]["size"] > 500000) {
        echo "<script>alert('Sorry, your file is too large.')</script>";
        exit;
    }
    
    // Allow only certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        exit;
    }
    
    // Upload the file to the server
    if (move_uploaded_file($_FILES["event-image"]["tmp_name"], $target_path)) {
        // Save the file path to the database
        $insertQuery = $pdo->prepare("INSERT INTO userevents (userID, eventName, description, watered, sunlight, start_Date, end_date, plantImg)
        VALUES (:userID, :eventName, :desc, :watered, :sunlight, :startDate, :endDate, :img)");
        $insertQuery->bindParam(':userID', $author_id);
        $insertQuery->bindParam(':eventName', $title);
        $insertQuery->bindParam(':desc', $description);
        $insertQuery->bindParam(':watered', $water);
        $insertQuery->bindParam(':sunlight', $sunlight);
        $insertQuery->bindParam(':startDate', $start);
        $insertQuery->bindParam(':endDate', $end);
        $insertQuery->bindParam(':img', $target_path);
        $insertQuery->execute();
        if ($insertQuery) {
            echo "<script>alert('Successfully Adding Event')</script>";
            echo "<script>window.open('mainpage.php','_self')</script>";
        } else {
            echo "<script>alert('Error')</script>";
        }
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
    }
} else {
    echo "<script>alert('Please select an image to upload.')</script>";
}
?>