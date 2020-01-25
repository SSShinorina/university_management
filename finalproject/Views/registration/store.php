<?php
include_once "../../Src/Admin/reg/reg.php";
use App\Admin\reg\reg;

//include_once ("../src/Admin/reg/reg.php");

$regObj= new reg();
$regObj->setRegdata($_POST);
$regObj->store();

?>