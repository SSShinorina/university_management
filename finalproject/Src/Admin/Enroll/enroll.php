<?php
namespace App\Admin\Enroll;
use PDO;
class enroll
{
    public $reg_no;
    public $course_code;

    public function setDatat($data=''){
        if(array_key_exists('reg_no',$data)){
            $this->reg_no=$data['reg_no'];
        }
        if(array_key_exists('course_code',$data)){
            $this->course_code=$data['course_code'];
        }

    }


    public function show(){
        {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
                $sql = "SELECT * FROM `courses`";
                $query = 'INSERT INTO someTable VALUES(:name)';
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $array = $stmt->fetchAll();
                return $array;


            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }

    public function store(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "INSERT INTO `course_student_mapping` (`id`, `student_reg_no`, `course_code`) VALUES (NULL, :sr, :ci)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':sr' => $this->reg_no,
                ':ci' => $this->course_code

            ));


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}