<?php
$json = '{"name":"Maria","age":21,"email":"maria@example.com"}';

// Convert JSON into PHP object
$object = json_decode($json);

// Convert JSON into associative array
$array = json_decode($json, true);

// Display object values
echo "Object Name: " . $object->name . "<br>";
echo "Object Email: " . $object->email . "<br>";

// Display array values
echo "Array Name: " . $array["name"] . "<br>";
echo "Array Email: " . $array["email"];
?>