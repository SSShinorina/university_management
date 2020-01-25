<?php
include_once "../../Src/Admin/login/login.php";

use App\Admin\login\login;
//include_once ("../../src/login/login.php");
//session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!empty($_POST)){
        $logIn = new login();
        $logIn->setUdata($_POST);
        $logIn->login_user();



        }
        else{
            $_SESSION['message']="Invalide Inpute...";

            header("location:../login/login.php");
        }

    }
    else{
        $_SESSION['message']="Inpute can't be Empty...";

        header("location:../login/login.php");
    }






