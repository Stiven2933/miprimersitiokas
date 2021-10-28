<?php

    class Connection {
        protected $db;
        private $driver = 'mysql';
        private $host = "localhost";
        private $bd = "kas";
        private $usser = "root";
        private $password = "";
        private $attributes = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE=>PDO::CASE_LOWER, PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_NAMED];

        public function __construct() {
            try {
                $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->bd}", $this->usser, $this->password, $this->attributes);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            } catch (PDOException $e) {
                return "Fallo al conectar a la BD: " . $e->getMessage();
            }
        }
    }