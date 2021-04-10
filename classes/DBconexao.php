<?php

require_once __DIR__ . '/../conf/database.php';

class DBConexao
{
    private $host = HOST;
    private $db = DB;
    private $user = USER;
    private $password = PASSWORD;
    private $conn;

    public function __construct()
    {

        try {
            $this->conn = new PDO("mysql: dbname=  $this->db; :host= $this->host", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function retornarConexao()
    {
        return $this->conn;
    }
}
