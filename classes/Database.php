<?php

class Database {
    private static $instance = null;
    private $connection;

    private $host = 'l576877-1.web1.fh-htwchur.ch';
    private $username = '576877_1_1';
    private $password = 'pOgWDFtl5uJy';
    private $database = '576877_1_1';

    // Privater Konstruktor, um Instanziierung von außen zu verhindern
    private function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die('Connection failed: ' . $this->connection->connect_error);
        }
    }

    // Statische Methode zur Rückgabe der einzigen Instanz der Klasse
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Methoden zur Ausführung von Abfragen
    public function query($sql) {
        return $this->connection->query($sql);
    }

    // Methoden zur Vorbereitung von Abfragen
    public function prepare($sql) {
        return $this->connection->prepare($sql);
    }

    // Methode zur Ausführung von vorbereiteten Anweisungen
    public function executePreparedStatement($sql, $params) {
            $stmt = $this->connection->prepare($sql);
            if ($stmt === false) {
                die('Error preparing statement: ' . $this->connection->error);
            }

            // Parameter binden, falls vorhanden
            if (!empty($params)) {
                $types = str_repeat('s', count($params)); // Annahme: alle Parameter sind Strings
                $stmt->bind_param($types, ...$params);
            }

            // Anweisung ausführen
            $stmt->execute();

            // Ergebnis zurückgeben (falls benötigt)
            return $stmt->get_result();
        }

    // Weitere Methoden können nach Bedarf hinzugefügt werden

    // Privater Klon, um das Singleton-Muster zu wahren
    private function __clone() {}

    //     unserialize, um das Singleton-Muster zu wahren
    public function __wakeup() {}
}

//while ($row = $result->fetch_assoc()) {
    // Do something with $row
//}
