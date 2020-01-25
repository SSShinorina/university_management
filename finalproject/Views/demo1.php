<?php
include_once "../Src/Admin/Teacher/Teacher.php";





    if (strlen($_POST['taken'] >= 1)) {
        $obj=new \App\Admin\Teacher\Teacher();
        $obj->setData($_POST)->store();
        $array =$obj->show();
        $array1=$obj->show1();
    }

//print_r($_POST);


?>