<?php


class Database
{
    private $servername = "localhost", $username = "300169740", $password = "Godisone@2000", $dbname = "db300169740";
    function connect()
    {
        try {
            $pdo = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
			