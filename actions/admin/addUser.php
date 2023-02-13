<?php
include("../../vendor/autoload.php");
use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\StudentsTable;
$student = new StudentsTable(new MySQL());
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];


if($name && $phone && $password){
    $student->insert(
        [
            "name"=>$name,
            "phone"=>$phone,
            "password"=> md5('password')
        ]
     );
}else{
    echo "Please fill your info";
}