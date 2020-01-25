<?php
namespace App\Admin\Course;
use PDO;

class Course{
    public $code;
    public $ntext;
    public $credit;
    public $description;
    public $dept;
    public $sem;

    public function setData($data= ' ' ){
              if(array_key_exists('code',$data)){
                  $this->code = $data['code'];
              }
              if(array_key_exists('ntext',$data)){
                  $this->ntext = $data['ntext'];
              }
              if(array_key_exists('credit',$data)){
                  $this->credit = $data['credit'];
              }
              if(array_key_exists('description',$data)) {
                  $this->description = $data['description'];
              }
              if(array_key_exists('dept',$data)){
                  $this->dept=$data['dept'];
              }
              if(array_key_exists('sem',$data)){
                  $this->sem=$data['sem'];
              }

    }

    public function store(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "INSERT INTO `course` (`course_id`, `code`, `name`, `creadit`, `description`,`department`,`semester`) VALUES (:id, :code, :nm, :credit, :description, :dept, :sem)";
            $query = 'INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id' => null,
                ':code' => $this->code,
                ':nm' => $this->ntext,
                ':credit' => $this->credit,
                ':description' => $this->description,
                ':dept' => $this->dept,
                ':sem' => $this->sem
            ));


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function show(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "SELECT * FROM `departments`";
            $query = 'INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $array=$stmt->fetchAll();
            return $array;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function show1(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "SELECT * FROM `semesters`";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $array1=$stmt->fetchAll();
            return $array1;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }

}

