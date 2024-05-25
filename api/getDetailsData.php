<?php

require_once('../classes/Database.php');

$db = Database::getInstance();

$parkhaus = $_GET['parkhaus'];
$time = $_GET['time'];
if(empty($_GET['time'])){
    $time = "24h";
}

//where bedingung je nach "time" wert
$where = "where created_at between date_sub(now(),INTERVAL 1 WEEK) and now()";
if($time === "24h"){    
    $where = "where created_at between date_sub(now(),INTERVAL 1 DAY) and now()";
}

//sql query für Detaildaten
$sql = "SELECT DISTINCT Location, frei, total, created_at FROM `Parkheauser Basel` ".$where." AND Location = ? ORDER BY created_at ASC";

$stmt = $db->prepare($sql);
$stmt->bindParam(1, $parkhaus);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Konvertiere die Daten in JSON
$jsonString = json_encode($data);

// Setze den Content-Type Header auf JSON
header('Content-Type: application/json');

// Gib den JSON-String zurück
echo $jsonString;
?>