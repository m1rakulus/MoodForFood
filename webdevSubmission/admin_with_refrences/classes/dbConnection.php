

<?php
class DbConnection
{
    // Define private properties for database connection parameters
    private $dbHost = "localhost:3306"; // Hostname and port
    private $dbName = "hellofresh"; // Database name
    private $dbUser = "root"; // Database username
    private $dbPass = "Amnabibi2020@"; // Database password

    // Public property to hold the database connection
    public $conn;

    // Method to establish a database connection
    public function connection() {
        // Create a new PDO (PHP Data Objects) instance to connect to the database
        $this->conn = new PDO('mysql:host=' . $this->dbHost. '; dbname='. $this->dbName, $this->dbUser, $this->dbPass);
        
        // Set PDO error mode to exception for better error handling
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Return the database connection object
        return $this->conn;
    } 
}
?>
