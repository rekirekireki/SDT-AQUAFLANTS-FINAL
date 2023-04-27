<?php
include_once("connection.php");
// Get the current user ID (you will need to replace this with your own code to get the user ID)
$user_id = 1;

// Loop through each event and insert it into the database
for ($i = 0; $i < count($_POST["event_title"]); $i++) {
    $event_title = $_POST["event_title"][$i];
    $event_start_date = // Replace this with your code to get the start date of the event
    $event_end_date = // Replace this with your code to get the end date of the event

    $stmt = $db->prepare("INSERT INTO user_events (user_id, event_title, event_start_date, event_end_date) VALUES (?, ?, ?, ?)");
    $stmt->execute([$user_id, $event_title, $event_start_date, $event_end_date]);
}

// Redirect back to the page with the calendar
header("Location: mainpage.php");
exit;
?>