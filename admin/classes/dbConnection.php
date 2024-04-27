<?php
class DbConnection
{
    private $dbHost = "localhost:3306";
    private $dbName = "hellofresh";
    private $dbUser = "root";
    private $dbPass = "Amnabibi2020@";
    public $conn;

    public function connection() {
        $this->conn = new PDO('mysql:host=' . $this->dbHost. '; dbname='. $this->dbName, $this->dbUser, $this->dbPass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->conn;
    } 
}