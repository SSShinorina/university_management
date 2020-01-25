<?php
namespace App\Admin\viewCourses;
use PDO;

class viewCourses
{
    public $code;
    public $dept_name;


    public function setData($data=''){
        if(array_key_exists('code',$data)){
            $this->code=$data['code'];
        }
        if(array_key_exists('dept_name',$data)){
            $this->dept_name=$data['dept_name'];
        }
        return $this;

    }


    public function index()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql="SELECT * FROM `departments`";
            $query='INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $data =$stmt->fetchAll();
            return $data;


        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }
    }
}