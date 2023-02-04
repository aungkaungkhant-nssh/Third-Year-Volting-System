<?php
$phone = $_POST['phone'];
$password = $_POST['password'];
if($phone === '09261804445' and $password==='password')
{
    header('location:../../pages/admin/addVoter.php');
}else{
    header('location:../index.php?incorrect=1');
}