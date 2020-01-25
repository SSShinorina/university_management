<?php
namespace App\Admin\viewResult;
use PDO ;

class saveClass
{
    private $reg_no;
    private $course_id;
    private $grade_id;

    public function setData($data)
    {
        $this->reg_no = $_POST['s_reg'];
        $this->course_id = $_POST['course'];
        $this->grade_id=$_POST['grade'];
        return $this;
    }

    public function check()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=ums1', 'root', '');
        $query = "SELECT id FROM `course_student_mapping` where student_reg_no=" . $this->reg_no . " AND course_id=" . $this->course_id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function store()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=ums1', 'root', '');
            $query = "INSERT INTO `result` (`id`,`student_reg_no`,`course_id`,`grade_id`,`created_at`)
VALUES (:id,:reg,:c_id,:g_id,:date)";
            $stmt = $pdo->prepare($query);
            $s = $stmt->execute(array(
                ':id' => null,
                ':reg' => $this->reg_no,
                ':c_id' => $this->course_id,
                ':g_id' => $this->grade_id,
                ':date' => date("y-m-d h:m:s")
            ));
            if ($s == 1) {
                session_start();
                $_SESSION['message'] = "<h2>Student result updated for this Course Successfully</h2>";
                header('location:create.php');
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

}