<?php
include("../../../vendor/autoload.php");
//use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\CategoriesTable;
use Helpers\HTTP;



$table = new CategoriesTable(new MySQL());
if($table){
   $table->destroy($_POST["categoryId"]);
   HTTP::redirect("/pages/admin/allCategories.php");
}else{
    HTTP::redirect("/pages/admin/allCategories.php", "error=true");
}