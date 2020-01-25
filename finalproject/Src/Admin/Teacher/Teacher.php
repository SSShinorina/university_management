<?php
namespace App\Admin\Teacher;
use PDO;

class Teacher
{
    public $name;
    public $text;
    public $email;
    public $contact;
    public $taken;
    public $des;
    public $dept;

    public function setData($data=' '){
        if(array_key_exists('name',$data)){
            $this->name=$data['name'];
        }
        if(array_key_exists('text',$data)){
            $this->text=$data['text'];
        }
        if(array_key_exists('email',$data)){
            $this->email=$data['email'];
        }
        if(array_key_exists('contact',$data)){
            $this->contact=$data['contact'];
        }
        if(array_key_exists('taken',$data)){
            $this->taken=$data['taken'];
        }
        if(array_key_exists('des', $data)){
            $this->des=$data['des'];
        }
        if(array_key_exists('dept',$data)){
            $this->dept=$data['dept'];
        }
        return $this;
    }

    public function store(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "INSERT INTO `teacher` (`t_id`, `name`, `address`, `email`, `contact`, `credit`, `designation`, `department`) VALUES (:id, :nm, :address, :email, :contact, :credit, :des, :dept)";
            $query = 'INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id' => null,
                ':nm' => $this->name,
                ':address' => $this->text,
                ':email' => $this->email,
                ':contact' => $this->contact,
                ':credit' => $this->taken,
                ':des'=> $this->des,
                ':dept' => $this->dept
            ));


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function show()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "SELECT * FROM `designation`";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $array = $stmt->fetchAll();
            return $array;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
        public function show1(){
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
                $sql = "SELECT * FROM `departments`";
                $query = 'INSERT INTO someTable VALUES(:name)';
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $array1=$stmt->fetchAll();
                return $array1;


            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
    }


}














