<?php

require_once('../classes/Database.php');

$db = Database::getInstance();


//sql query für die 5 aktuellsten Parkhausdaten
$sql = "SELECT *  FROM `Parkheauser Basel` WHERE id IN(SELECT MAX(id) FROM `Parkheauser Basel` GROUP BY Location) LIMIT 5";
$stmt = $db->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Konvertiere die Daten in JSON
$jsonString = json_encode($data);

// Setze den Content-Type Header auf JSON
header('Content-Type: application/json');

// Gib den JSON-String zurück
echo $jsonString;
?>