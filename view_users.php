<?php

// Lese die JSON-Daten aus der users.json-Datei
$usersData = file_get_contents(__DIR__ . '/users.json');

// Wandele die JSON-Daten in ein PHP-Array um
$usersArray = json_decode($usersData, true);

// Gib die JSON-Daten formatiert aus
header('Content-Type: application/json');
echo json_encode($usersArray, JSON_PRETTY_PRINT);

?>
