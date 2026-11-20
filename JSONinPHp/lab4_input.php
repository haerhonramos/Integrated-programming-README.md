<?php

// Read incoming JSON data
$json = file_get_contents('php://input');

// Convert JSON into a PHP object
$data = json_decode($json);

// Check if data was received correctly
if (
    $data !== null &&
    isset($data->username) &&
    isset($data->password)
) {

    // Display the received values
    echo "Username: " . htmlspecialchars($data->username) . "<br>";
    echo "Password: " . htmlspecialchars($data->password);

} else {
    echo "Invalid JSON data.";
}

?>