<?php 
namespace App\Controller;
require "../../vendor/autoload.php";

use App\Database\DAO;
use App\Classes\Twig;


class CreateController
{
    public $method;
    public function __construct()
    {
        if(isset($_POST['name'])){
            $this->verifyField($_POST['name']);
        }
    }
    
    private function verifyField($value)
    {
        $dao = new DAO();
        
        if(!empty($value)){
            $dao->create($value);
        }
    } 
    
    public function template()
    {
        $dao = new DAO();
        $result = $dao->selectAll();
        $template = new Twig();
        return $template->Render("listar", ['dados' => $result, 'tituloPagina' => 'listar']);
    }
}
?>