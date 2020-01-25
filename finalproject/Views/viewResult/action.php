<?php
$conn= new PDO('mysql:host=localhost; dbname=finalproject', 'root', '');
if(isset($_POST['reg_no'])){

    $reg_no = "'" . $_POST['reg_no'] . "'";
    $d_id = $students['department_id'];
    $sql2 = "SELECT  name FROM departments WHERE id=" . $d_id;
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $dept = $stmt2->fetch(PDO::FETCH_ASSOC);


    $query = "SELECT courses.code as cc, courses.name as cn, result.grade_id as gr,grades.grade_name as gr from courses
 LEFT JOIN course_student_mapping as cs ON courses.id = cs.course_id LEFT JOIN result ON courses.id=result.course_id AND cs.student_reg_no=result.student_reg_no LEFT JOIN grades ON
  result.grade_id=grades.id WHERE courses.department_id=".$d_id." And cs.student_reg_no=".$reg_no; ;
    $stmt3 = $conn->prepare($query);
    $stmt3->execute();
    $courses = $stmt3->fetchAll(PDO::FETCH_ASSOC);

$data=[
    ':dept'=>$dept,
    ':courses'=>$courses
];
    echo json_encode($data);
}