<?php
    
class Dao {
    public $dsn = 'mysql:dbname=heroku_1bc1ee89f9c7816;host=us-cdbr-east-03.cleardb.com;port=3306';
    public $user = "bcdd944f9d361a";
    public $password = "5f9a5f96";

    public function getConnection() {
        try {
            $connection = new PDO($this->dsn, $this->user, $this->password);
            echo 'it worked';
        }
        catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $connection;
    }

    public function getUsers() {
        $connection = $this->getConnection();
        try {
            $rows = $connection->query("select * from users", PDO::FETCH_ASSOC);
        }
        catch (Exception $e){
            echo print_r($e, 1);
            exit;
        }
        return $rows;
    }

    public function createUsersTable() {
        $connection = $this->getConnection();
        try {
            $rows = $connection->query("CREATE TABLE users (user_id INT AUTO_INCREMENT 
            PRIMARY KEY, username VARCHAR(16) NOT NULL, password VARCHAR(32) NOT NULL);", PDO::FETCH_ASSOC);
        }
        catch (Exception $e){
            echo print_r($e,1);
            exit;
        }
        return $rows;
    }

    public function addUser($username, $password) {
        $connection = $this->getConnection();
        try {
            $rows = $connection->query("INSERT INTO users (username, password) values ($username, $password);", PDO::FETCH_ASSOC);
        }
        catch (Exception $e){
            echo print_r($e,1);
            exit;
        }
        return $rows;
    }
}
    
?>