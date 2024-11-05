<?php

class Connection 
{
    
    private $connection;

    public function __construct() 
    {
    
        $server_name = "localhost";
        $db_name     = "dbiicis";
        $db_username = "root";
        $db_password = "";
        
        try {

            $this->connection = new PDO("mysql:host=$server_name;dbname=$db_name", $db_username, $db_password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connection successful!";
        
        } catch (PDOException $e) {
        
            // If there is an error, it will be caught here
            die("Connection failed: " . $e->getMessage());
        
        }
    
    }
    
    public function getConnection() 
    {
        return $this->connection;
    }
}

?>
