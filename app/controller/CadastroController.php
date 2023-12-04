<?php 
namespace App\Controller;

use App\Classes\Twig;

class CadastroController
{

    public function getTemplate()
    {     
        $template = new Twig();
        return $template->Render("cadastrar");
    }
}

?>