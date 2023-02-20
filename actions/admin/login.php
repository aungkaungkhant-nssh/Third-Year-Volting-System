<?php
include("../../vendor/autoload.php");
session_start();
use Libs\Database\MySQL;
use Libs\Database\StudentsTable;
use Helpers\HTTP;
$phone = $_POST['phone'];
$password = md5( $_POST['password'] );
$student = new StudentsTable(new MySQL());

$result =$student->findByPhoneAndPassword($phone,$password,2);

if($result){
    $_SESSION["adminInfo"] = $result;
    HTTP::redirect("/pages/admin/dashboard.php");
}else{
    
    HTTP::redirect("/pages/admin/login.php","incorrect=true");
}