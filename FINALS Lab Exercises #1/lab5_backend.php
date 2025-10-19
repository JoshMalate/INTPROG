<?php
header("Content-Type: application/json");

// Read JSON input from AJAX
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Get username and prepare response
$username = isset($data["username"]) ? htmlspecialchars($data["username"]) : "Guest";

$response = array(
    "status" => "success",
    "message" => "Welcome, $username!"
);

echo json_encode($response);
?>
