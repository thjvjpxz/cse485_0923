<?php

    class Database
    {
        private $conn;
        public function __construct()
        {
            try {
                $this->conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
            } catch (PDOException $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        }
        public function get() {
            return $this->conn;
        }
    }