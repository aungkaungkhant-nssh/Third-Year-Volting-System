<?php
include("../../../vendor/autoload.php");
//use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\CategoriesTable;
use Helpers\HTTP;

$data =[
    "name" =>$_POST['name'] ?? 'Unknown',
  
];

$table = new CategoriesTable(new MySQL());
if($table){
    $table->insert($data);
    HTTP::redirect("/pages/admin/addCategory.php","success=true");
}else{
    HTTP::redirect("/pages/admin/addCategory.php", "error=true");
}