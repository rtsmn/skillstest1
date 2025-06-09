<?php 
require_once 'classes/Database.php';

class Books {

    private $connection;

    public function __construct() {
        $db = new Database();
        $this->connection = $db->connect();
    }
    
    public function getAll() {
        return $this->connection->query("SELECT * FROM bookstable");
    }
     public function getById($id) {
        return $this->connection->query("SELECT * FROM bookstable WHERE isbn = $isbn");
    }

    public function add($title, $copyright, $edition, $price, $quantity) {
        $stmt = $this->connection->prepare("INSERT INTO bookstable (title, copyright, edition, price, quantity) VALUES (?, ? , ?, ?, ?)");
        $stmt->bind_param("sssss", $title, $copyright, $edition, $price, $quantity);
        return $stmt->execute();
    }
       public function delete($id) {
        return $this->connection->query("DELETE FROM bookstable WHERE isbn = $isbn");
    }

}

?>