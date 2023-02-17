<?php

include("../../vendor/autoload.php");
//use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\StudentsTable;
use Helpers\HTTP;

$data =[
    "name" =>$_POST['name'] ?? 'Unknown',
    "phone" =>$_POST['phone'] ?? 'Unknown',
  
];

$table = new StudentsTable(new MySQL());
if($table){
    $table->update($_POST["userId"],$_POST["name"],$_POST["phone"]);
    HTTP::redirect("/pages/admin/allUsers.php","success=true");
}else{
    HTTP::redirect("/pages/admin/allUsers.php", "error=true");
}