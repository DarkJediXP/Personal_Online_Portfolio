<?php

namespace Portfolio;

/**
 * Database configuration
 */
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'sm880528');
define('DB_HOST', 'localhost');
define('DB_NAME', 'portfolio');

class Database {
	private $conn;
 
    function __construct() {
    	$this->connect();      
    }
 
    /**
     * Establishing database connection
     * @return database connection handler
     */
    function connect() {
        // Connecting to mysql database
        $this->conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("Error " . mysqli_error($this->conn));
 
        // returing connection resource
        return $this->conn;
    }

    /**
     * Get the database connection
     * @return database connection handler
     */
    public function getConn(){
        return $this->conn;
    }
}
?>