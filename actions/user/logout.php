<?php
include("../../vendor/autoload.php");
use Helpers\HTTP;
session_start();
unset($_SESSION["studentInfo"]);
HTTP::redirect("/");
