<?php

header('Content-Type: application/json');

// Receive JSON data
$input = file_get_contents('php://input');
$data = json_decode($input);

// Get the name
$name = $data->name;

// Create response
$response = array(
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
);

// Return JSON response
echo json_encode($response);

?>