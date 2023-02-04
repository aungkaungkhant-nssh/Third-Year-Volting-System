<?php
$phone = $_POST['phone'];
$password = $_POST['password'];
if($phone === '09427206995' and $password==='12345')
{
    header('location:../../pages/user/vote.php');
}else{
    header('location:../index.php?incorrect=1');
}
