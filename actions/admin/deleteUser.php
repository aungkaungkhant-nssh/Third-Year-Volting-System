<?php
include("../../vendor/autoload.php");
//use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\StudentsTable;
use Helpers\HTTP;



$table = new StudentsTable(new MySQL());
if($table){
   $table->destroy($_POST["userId"]);
   HTTP::redirect("/pages/admin/allUsers.php");
}else{
    HTTP::redirect("/pages/admin/allUsers.php", "error=true");
}