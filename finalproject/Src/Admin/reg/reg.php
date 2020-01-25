<?php
namespace App\Admin\reg;
use PDO;

class reg
{
    private $email;
    private $pasword;

    public function setRegdata($data=''){

       $this->email=$data['email'];
        $this->pasword=$data['password'];


    }

//

    public function store(){

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql_Insert = "INSERT INTO tbl_resignation_user (id, email, Password) VALUES (:id, :mail, :pword)";
            $stmt = $pdo->prepare($sql_Insert);
            $stmt->execute(
                array(
                    ':id' => null,
                    ':mail'=>$this->email,
                    ':pword'=>$this->pasword,
                )

            );

            if ($stmt){
                session_start();
                $_SESSION['message']="successfully Registation";

                header("location:../login/login.php");
            }



        }

        catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }

    }


//class....
}