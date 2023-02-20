<?php
include("../../vendor/autoload.php");
use Helpers\HTTP;
session_start();
unset($_SESSION["adminInfo"]);
HTTP::redirect("/pages/admin/login.php");