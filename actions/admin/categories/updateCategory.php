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
    $table->update($_POST["categoryId"],$_POST["name"]);
    HTTP::redirect("/pages/admin/allCategories.php","success=true");
}else{
    HTTP::redirect("/pages/admin/allCategories.php", "error=true");
}