<?php

namespace App\Admin\Student;
use PDO;
class Student
{
    public $text;
    public $email;
    public $contact;
    public $date;
    public $address;


    public function setData($data=' '){
        if(array_key_exists('text',$data)){
            $this->text=$data['text'];
        }
        if(array_key_exists('email',$data)){
            $this->email=$data['email'];
        }
        if(array_key_exists('contact',$data)){
            $this->contact=$data['contact'];
        }
        if(array_key_exists('date',$data)){
            $this->date=$data['date'];
        }
        if(array_key_exists('address',$data)){
            $this->address=$data['address'];
        }
        return $this;

    }

    public  function store(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "INSERT INTO `student` (`st_id`, `st_name`, `st_email`, `st-cnt`, `st_date`, `st_add`) VALUES (:id, :st_name, :email, :contact, :st_date, :address)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id' => null,
                ':st_name' => $this->text,
                ':email' => $this->email,
                ':contact' => $this->contact,
                ':st_date' => $this->date,
                ':address' => $this->address
            ));


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