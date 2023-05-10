<?php
include_once("connection.php");

// Fetch events from database
$query = "SELECT * FROM userevents";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Prepare data for FullCalendar
$data = array();
foreach ($result as $row) {
    $event = array();
    $event['title'] = $row['eventName'];
    $event['start'] = $row['start_Date'];
    $event['end'] = $row['end_date'];
    $event['description'] = $row['description'];
    $event['plant_img'] = $row['plant_img'];
    $event['watered'] = $row['watered'];
    $event['sunlight'] = $row['sunlight'];
    $data[] = $event;
}

// Return data as JSON
echo json_encode($data);
?>