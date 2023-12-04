<?php 
namespace App\Classes;

class Redirect
{
    private static $path;
    
    public static function redirect($file)
    {
        header("Location:" . $file);
    }
}
?>