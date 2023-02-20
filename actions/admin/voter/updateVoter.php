<?php

include("../../../vendor/autoload.php");
//use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\VotersTable;
use Helpers\HTTP;

$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];
move_uploaded_file($temp, "../../../image/$image");


$table = new VotersTable(new MySQL());
if($table){
    $table->update($_POST["voterId"],$_POST["name"],$_POST["year"],$_POST["role_no"],$image ?? false,$_POST["categoryId"]);
    HTTP::redirect("/pages/admin/allVoter.php","success=true");
}else{
    HTTP::redirect("/pages/admin/allVoter.php", "error=true");
}