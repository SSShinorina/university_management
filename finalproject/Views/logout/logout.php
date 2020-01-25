<?php


include_once ("../../src/Admin/login/login.php");
session_start();

$logout=new \App\Admin\login\login();
$logout->logout();