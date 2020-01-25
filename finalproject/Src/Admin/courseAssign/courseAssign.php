<?php

 namespace App\Admin\courseAssign;
 use PDO;
class courseAssign
{
    public $dept;
    public $teacher;
    public $taken;
    public $remaining;
    public $code;
    public $name;
    public $credit;
    public $test_id;
    public $teach;
    public $course_code;

    public function setData($data = ' ')
    {
        if (array_key_exists('dept', $data)) {
            $this->dept = $data['dept'];
        }
        if (array_key_exists('teacher', $data)) {
            $this->teacher = $data['teacher'];
        }
        if (array_key_exists('taken', $data)) {
            $this->taken = $data['taken'];
        }
        if (array_key_exists('remaining', $data)) {
            $this->remaining = $data['remaining'];
        }
        if (array_key_exists('code', $data)) {
            $this->code = $data['code'];
        }
        if (array_key_exists('name', $data)) {
            $this->name = $data['name'];
        }
        if (array_key_exists('credit', $data)) {
            $this->credit = $data['credit'];
        }
//        $this->test_id=$data['test_id'];
//        $this->teach=$data['teach'];
//        $this->course_code=$data['course_code'];

        return $this;
    }

//    public function store()
//    {
//        try {
//            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
//            $sql = "INSERT INTO `courseassign` (`ca_id`, `ca_dept`) VALUES (:id, :department)";
//            $query = 'INSERT INTO someTable VALUES(:name)';
//            $stmt = $pdo->prepare($sql);
//            $stmt->execute(array(
//                ':id' => null,
//                ':department' => $this->dept
//            ));
//
//
//        } catch (PDOException $e) {
//            echo 'Error: ' . $e->getMessage();
//        }
//    }

    public function show()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "SELECT * FROM `department`";
            $query = 'INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $array = $stmt->fetchAll();
            return $array;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function showTeacher()
    {

        $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
        $sql = "SELECT ca_teacher FROM `courseassign` JOIN `teacher` WHERE courseassign.ca_dept=teacher.department ";
        $query = 'INSERT INTO someTable VALUES(:name)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $array1 = $stmt->fetchAll();
        return $array1;
    }
    public function storeTeacher(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = "INSERT INTO `courseassign` (`ca_id`, ca_teacher`) VALUES (:id, :name)";
            $query = 'INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id'=> null,
                ':name'=>$this->teacher
            ));
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function store(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql = " INSERT INTO `course_assign` (`id`, `ca_department`, `ca_teacher`, `ca_cc`) VALUES (NULL, :dept, :tech, :cc)";
            $query = 'INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                 ':dept'=>$this->test_id,
                ':tech'=>$this->teach,
                ':cc'=>$this->course_code
            ));
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
}





