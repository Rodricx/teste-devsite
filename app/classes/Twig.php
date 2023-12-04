<?php 
namespace App\Classes;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class Twig
{

    public $loader, $twig, $view = '../view/templates/', $cache = '../app/view/cache';

    public function __construct()
    {
        $this->loader = new FilesystemLoader($this->view);

        $this->twig = new Environment($this->loader, [
            'cache' => $this->cache,
            'debug' => true, // Habilitando o debug
            'cache' => false // Eliminando a criação da pasta cache na view
        ]);
        
        $this->twig->addExtension(new DebugExtension());
    }
    
    public function Render($arquivo, $valores = [])
    {
        $template = $this->twig->load($arquivo . ".twig");
        return $template->render($valores);
    }
}

?>