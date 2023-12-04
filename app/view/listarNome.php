<?php 
require "../../vendor/autoload.php";

use App\Controller\CreateController;

$list = new CreateController();
echo $list->template();


?>