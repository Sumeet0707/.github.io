<?php

require_once 'Database.php';
class Product
{
    public $id, $title, $picture1, $picture2, $price, $status;
    private $db, $pdo;
    private $table = "items";

    function __construct()
    {
        $this->db = new Database();
        $this->pdo = $this->db->connect();
    }

    public function showAll(){
        $stmt = $this->pdo->prepare("Select * from ". $this->table);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addProduct(){
        $stmt = $this->pdo->prepare("Insert into $this->table(title, picture1, picture2, price, status) values('$this->title', '$this->picture1', '$this->picture2', '$this->price', '$this->status')");
        if($stmt->execute()){
            return true;
        } else {
            return false;
        }
    }
}