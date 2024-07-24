<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "robot_control";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$direction = $data['direction'];

// Insert or update the direction in the database
$sql = "INSERT INTO directions (direction) VALUES ('$direction') ON DUPLICATE KEY UPDATE direction='$direction'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("status" => "success", "direction" => $direction));
} else {
    echo json_encode(array("status" => "error", "message" => $conn->error));
}

$conn->close();
?>