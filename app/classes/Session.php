<?php 
namespace App\Classes;

use App\Classes\DD;

class Session
{
    public static function createSession(string $nameSession)
    {
        return $_SESSION[$nameSession] = "";
    }
    
    public static function deleteSession(string $nameSession)
    {
        unset($_SESSION[$nameSession]);
    }
    
    public static function deleteSessionAll()
    {
        session_destroy();
    }
}


?>