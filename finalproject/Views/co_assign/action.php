<?php
$conn= new PDO('mysql:host=localhost; dbname=finalproject', 'root', '');
if(isset($_POST['depart'])){

   $department_id=$_POST['depart'];
    $sql = "SELECT * FROM `teachers` WHERE department_id=".$department_id ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $query = "SELECT * FROM `courses` WHERE department_id=".$department_id ;
    $stmt3 = $conn->prepare($query);
    $stmt3->execute();
    $courses = $stmt3->fetchAll();

    $data= [
        'teachers' => $teachers,
        'courses' =>  $courses,
    ];
    echo json_encode($data);
}

if(isset($_POST['teach_id'])){

    $teacher_id=$_POST['teach_id'];
    $sql = "SELECT * FROM `teachers` WHERE id=".$teacher_id ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $teachers = $stmt->fetch(PDO::FETCH_ASSOC);


    $sql2 = "SELECT SUM(course_credit) as assign_credit FROM course_teacher_mapping WHERE teacher_id=".$teacher_id ;
    $stmt2= $conn->prepare($sql2);
    $stmt2->execute();
    $assign_credit = $stmt2->fetch(PDO::FETCH_ASSOC);
    $data= [
        'teacher' => $teachers,
        'a_c' =>  $assign_credit,
    ];
    echo json_encode($data);
}
//for select course
if(isset($_POST['c_id'])){
    $course_id=$_POST['c_id'];
    $sql = "SELECT * FROM `courses` WHERE id=".$course_id ;
    $stm = $conn->prepare($sql);
    $stm->execute();
    $data = $stm->fetch();
    echo json_encode($data);

}
