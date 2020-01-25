<?php
include_once "../Src/Admin/Course/Course.php";
include_once "../Src/Admin/Department/Department.php";
use App\Admin\Course\Course;
use App\Admin\Department\Department;

if (isset($_POST['code'])) {


    if (strlen($_POST['code'] >= 5)) {
        if (strlen($_POST['credit'] > 0.5) && strlen($_POST['credit'] < 6)) {

            $obj = new Course();
            $obj->setData($_POST)->store();


        }
    }
    else{

    }
}
else{

}