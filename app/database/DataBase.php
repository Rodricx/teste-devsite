<?php 

namespace App\Database;

use PDO;

class DataBase
{
    public $conn;


    public function __construct()
    {
       $this->conn = new PDO("sqlite:../../devsite.sqlite", "", "");
       /* $this->conn = new PDO("sqlite:../../devsite.sqlite", "", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]); */

        return $this->conn;

    }

    public function createTable()
    {
        $this->conn->exec('CREATE TABLE IF NOT EXISTS  Pessoa(nome VARCHAR(15))');
    }
}
?>