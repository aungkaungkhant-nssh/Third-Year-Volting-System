<?php

include("../../../vendor/autoload.php");
//use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\VotersTable;
use Helpers\HTTP;


$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];
move_uploaded_file($temp, "../../../image/$image");
$data =[
    "name" =>$_POST['name'] ?? 'Unknown',
    "year" =>$_POST['year'] ?? 'Unknown',
    "role_no"=>$_POST["role_no"] ?? "Unknown",
    "categoryId"=>$_POST["categoryId"] ?? "Unknown",
    "image"=> $image ?? "Unknown"

];

$table = new VotersTable(new MySQL());
if($table){
    $table->insert($data);
    HTTP::redirect("/pages/admin/addVoter.php","registered=true");
}else{
    HTTP::redirect("/pages/admin/addVoter.php", "error=true");
}