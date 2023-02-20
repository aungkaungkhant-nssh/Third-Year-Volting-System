<?php
namespace Helpers;
class Auth
{
    static $loginUrl = '/index.php';
    static $adminUrl = "/pages/admin/login.php";
    static function check()
    {
        session_start();
        if(isset($_SESSION['studentInfo'])){
            return $_SESSION['studentInfo'];
        }else{
            HTTP::redirect(static::$loginUrl);
        }
    }
    static function isAdmin(){
        session_start();
        if(isset($_SESSION["adminInfo"])){
            return $_SESSION["adminInfo"];
        }else{
            HTTP::redirect(static::$adminUrl);
        }
    }
    
}
