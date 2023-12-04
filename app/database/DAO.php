<?php 
namespace App\Database;

use PDO;


class DAO extends DataBase
{
    public function create($value)
    {
        $this->conn->exec("INSERT INTO Pessoa(nome) VALUES('" . $value ."')");
    }

    public function selectAll()
    {
        return $this->conn->query("SELECT * FROM Pessoa")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>