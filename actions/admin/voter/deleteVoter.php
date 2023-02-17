<?php
include("../../../vendor/autoload.php");
//use Faker\Factory as Faker;
use Libs\Database\MySQL;
use Libs\Database\VotersTable;
use Helpers\HTTP;



$table = new VotersTable(new MySQL());
if($table){
   $table->destroy($_POST["voterId"]);
   HTTP::redirect("/pages/admin/allVoter.php");
}else{
    HTTP::redirect("/pages/admin/allVoter.php", "error=true");
}