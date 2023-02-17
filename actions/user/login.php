<?php
include("../../vendor/autoload.php");
session_start();
use Libs\Database\MySQL;
use Libs\Database\StudentsTable;
use Helpers\HTTP;
$phone = $_POST['phone'];
$password = md5( $_POST['password'] );
$student = new StudentsTable(new MySQL());

$result =$student->findByPhoneAndPassword($phone,$password);

if($result){
    $_SESSION["studentInfo"] = $result;
    HTTP::redirect("/pages/user/vote.php");
}else{
    
    HTTP::redirect("","incorrect=true");
}
