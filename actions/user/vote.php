<?php

include("../../vendor/autoload.php");
use Libs\Database\MySQL;

use Libs\Database\VotersTable;
use Helpers\HTTP;
use Libs\Database\VotesTable;


$voters = new VotersTable(new MySQL());
$votes = new VotesTable(new MySQL());

$voter =  $voters->getAll($_POST["voterId"]);

if($voter[0]){
    $result =  $voters->addVote($_POST["voterId"],$voter[0]->vote_count+1);
   
    if($result){
        $votes->insert([
           "categoryId" => $_POST["categoryId"],
           "studentId" => $_POST["studentId"]
        ]);
    }
    HTTP::redirect("/pages/user/vote.php");
}


