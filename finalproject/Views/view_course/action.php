<?php
$conn= new PDO('mysql:host=localhost; dbname=finalproject', 'root', '');
if(isset($_POST['dept_id'])){

    $department_id = "'" . $_POST['dept_id'] . "'";


    $query = "SELECT courses.code as cc, courses.name cn, semesters.semester_no as ss, teachers.name as tn FROM `courses`

LEFT JOIN course_teacher_mapping as ct
ON courses.code = ct.course_code

LEFT JOIN teachers
ON ct.teacher_id = teachers.id

LEFT JOIN semesters
ON courses.semester_id = semesters.id


WHERE courses.department_id=".$department_id ;
    $stmt3 = $conn->prepare($query);
    $stmt3->execute();
    $courses = $stmt3->fetchAll(PDO::FETCH_ASSOC);


    echo json_encode($courses);
}