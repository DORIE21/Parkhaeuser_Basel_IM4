<?php

require_once('../config.php');

class Database {
    private static $instance = null;

    // Privater Konstruktor, um Instanziierung von außen zu verhindern
    private function __construct() {
        self::$instance = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DATABASE, DB_USER, DB_PASS); 
        self::$instance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false); 
    }

    // Statische Methode zur Rückgabe der einzigen Instanz der Klasse
    public static function getInstance() {
        if (!self::$instance) {
            new Database();
        }
        return self::$instance;
    }
   
}
