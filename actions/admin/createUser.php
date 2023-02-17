<?php
include("../../vendor/autoload.php");
//use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\StudentsTable;
use Helpers\HTTP;

$data =[
    "name" =>$_POST['name'] ?? 'Unknown',
    "phone" =>$_POST['phone'] ?? 'Unknown',
    "password" =>md5($_POST['password']) ?? 'Unknown',
    "role_id" =>1,
];

$table = new StudentsTable(new MySQL());
if($table){
    $table->insert($data);
    HTTP::redirect("/pages/admin/addUser.php","registered=true");
}else{
    HTTP::redirect("/pages/admin/addUser.php", "error=true");
}