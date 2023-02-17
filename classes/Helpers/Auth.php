<?php
namespace Helpers;
class Auth
{
    static $loginUrl = '/index.php';
    static function check()
    {
        session_start();
        if(isset($_SESSION['studentInfo'])){
            return $_SESSION['studentInfo'];
        }else{
            HTTP::redirect(static::$loginUrl);
        }
    }
}
