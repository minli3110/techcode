<?php

class user {

    private $db;

    function __construct($conn) {
        $this->db = $conn;
    }

    public function insertUser($username, $password) {
        try {
            $result = $this->getUserbyUsername($username);
            if ($result['num']>0) {
                return false;
            } else {
                $new_password = md5($password.$username);
                $sql = "INSERT INTO Users (username, password) VALUES (:uname, :pword)";
                $stmt = $this->db->prepare($sql);
    
                // Bind parameters to the prepared statement
                $stmt->bindParam(':uname', $username);
                $stmt->bindParam(':pword', $new_password);
                $stmt->execute();
                return true;
            }


        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUser($username, $password) {

        try {
            $sql ="SELECT * FROM Users where username = :uname AND password = :pword";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':uname', $username);
            $stmt->bindParam(':pword', $password);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getUserbyUsername($username) {

        try {
            $sql ="SELECT count(*) as num FROM Users where username = :uname";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':uname', $username);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }
}
?>