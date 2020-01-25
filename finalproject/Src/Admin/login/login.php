<?php
namespace App\Admin\login;
use PDO;

class login
{
    public $id;
    public $email;
    public $password;

    //profile variable
    public $fName;
    public $mName;
    public $lName;
    public $gender;
    public $dob;
    public $hobby;
    public $interest;
    public $photo;





    public function setUdata($data=''){

        $this->email=$data['email'];
        $this->password=$data['password'];


    }




    public function login_user(){

        try{
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql_Insert = "SELECT * FROM tbl_resignation_user WHERE email=:mail and Password=:pword";
            $stmt = $pdo->prepare($sql_Insert);
            $stmt->execute(
                array(
                    ':mail'=>$this->email,
                    ':pword'=>$this->password,
                )

            ); session_start();
            $_SESSION['uname']=$this->email;


           $userData = $stmt->fetch();
            if ($stmt->rowCount()>0)
            {

               header('location:../../Views/user/index.php');

            }
            else{
                session_start();
                $_SESSION['message']="Invalide Inpute...";
                header('location:../../Views/login/login.php');
            }
            $this->id=$userData['id'];

        }
        catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }


    }

    public function setProfile($data1=''){

        $this->fName=$data1['fname'];
        $this->mName=$data1['Mname'];
        $this->lName=$data1['lname'];
        $this->gender=$data1['gender'];
        $this->dob=$data1['date'];
        $this->hobby=$data1['hobby'];
        $this->interest=$data1['interest'];
        $this->photo=$data1['image'];




    }
    public function test($test=''){
        print_r($test);
    }





    public function profile(){
        $pdo = new PDO('mysql:host=localhost;dbname=bitmProject1', 'root', '');
        $sql="INSERT INTO `user_info` (`id`, `email`, `fname`, `mname`, `lname`, `gender`, `dob`, `hoby`, `inter`, `phpto`) VALUES (:id, :eml, :fnm, :mnm, :lnm, :gn, :db, :hob, :inter, :pht);";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(
            ':id'=>null,
            ':eml'=>$_SESSION['uname'],
            ':fnm'=>$this->fName,
            ':mnm'=>$this->mName,
            ':lnm'=>$this->lName,

            ':gn'=>$this->gender,
            ':db'=>$this->dob,
            ':hob'=>$this->hobby,
            ':inter'=>$this->interest,
            ':pht'=>null,


        ));

        if ($stmt){

            header('location:../../views/user/index.php');
        }

    }




    public function logout(){

        if(isset($_SESSION)){
            unset($_SESSION);
            session_destroy();
            header('location:../../index.php');
        }

    }
}