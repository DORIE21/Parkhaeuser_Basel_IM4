<?php

require_once('../classes/Database.php');
require_once('../classes/Request.php');

$db = Database::getInstance();

$res = httpRequest("https://data.bs.ch/api/explore/v2.1/catalog/datasets/100088/records?order_by=total%20DESC&limit=5");

foreach($res->results as $value){
    $sql = "INSERT INTO `Parkheauser Basel` (Location, frei, total) VALUES (?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $value->title);
    $stmt->bindParam(2, $value->free);
    $stmt->bindParam(3, $value->total);
    $stmt->execute();
}

echo "success!";

