<?php 
require "../../vendor/autoload.php";

use App\Controller\CadastroController;

$renderTemplate = new CadastroController();
echo $renderTemplate->getTemplate();


?>