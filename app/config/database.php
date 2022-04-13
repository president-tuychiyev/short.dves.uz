<?php

class Database {

    // provide your database credentials
    private $host = "localhost";
    private $dbName = "put db name";
    private $username = "put username";
    private $password = "put password";
    public $conn;

    // get a connection to the database
    public function getConnection(){

        $this->conn = null;

        try {
            $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(\PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>