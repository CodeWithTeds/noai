<?php
class Database{
    private $host = "localhost";
    private $database = "testing";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if($this->conn->connect_error){
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
        }catch(Exception $e){
            error_log("database connection error: " . $e->getMessage());
        }
        return $this->conn;
    }
}
?>