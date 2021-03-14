<?php
    
class Dao {
    public $dsn = 'mysql:dbname=phoenixgoserver;host=127.0.0.1;port=3333';
    public $user = "root";
    public $password = "Shinobi,2";

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
}
    
?>