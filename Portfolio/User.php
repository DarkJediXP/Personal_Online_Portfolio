<?php

namespace Portfolio;

class User {
	private $conn;

    public $id;
	public $email;
	public $name;

	public function __construct($id){
		$app = \Slim\Slim::getInstance();

		$this->conn = $app->Database->getConn();
        $this->loadUser($id);
	}

	private function loadUser($id){
        $this->id = $id;

		$stmt = $this->conn->prepare("SELECT name, email FROM users WHERE id = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->bind_result($name, $email);
        $stmt->store_result();
 
        if ($stmt->num_rows > 0) {
            // Found user with the email
            // Now verify the password
            $stmt->fetch();
            $stmt->close();
            
            $this->email = $email;
            $this->name = $name;
        } else {
            $stmt->close();

        }
	}

    public function getUserName(){
        return $this->name;
    }

	public function sayHello(){
		$app = \Slim\Slim::getInstance();
	 	$name = $app->name;
	  	echo "Hello " . $name;
	}


    /**
     * Checking user login
     * @param String $email User login email id
     * @param String $password User login password
     * @return boolean User login status success/fail
     */
    public static function checkLogin($email, $password) {
    	$app = \Slim\Slim::getInstance();
    	$conn = $app->Database->getConn();
        // fetching user by email
        $stmt = $conn->prepare("SELECT id, password_hash FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($id, $password_hash);
        $stmt->store_result();
 
        if ($stmt->num_rows > 0) {
            // Found user with the email
            // Now verify the password
            $stmt->fetch();
            $stmt->close();
            if ($password_hash == $password) {
                // User password is correct, return the ID
                return $id;
            } else {
                // user password is incorrect
                return FALSE;
            }
        } else {
            $stmt->close();
            // user not existed with the email
            return FALSE;
        }
    }
}
?>