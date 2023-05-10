<?php
include_once("connection.php");
// Get event ID from URL
if (isset($_GET['id'])) {
    $eventId = $_GET['id'];
    $query = "DELETE FROM userevents WHERE eventID = $eventId";
    mysqli_query($variable, $query);
    header("Location: mainpage.php");
    exit();
}