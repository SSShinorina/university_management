<?php
$conn= new PDO('mysql:host=localhost; dbname=finalproject', 'root', '');
if(isset($_POST['r_id'])){

    $reg_no = "'". $_POST['r_id'] . "'";


    $sql = "SELECT * FROM `students` WHERE id=".$reg_no ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch();


    $sql1 = "SELECT * FROM `course_student_mapping` WHERE id=".$reg_no ;
    $stmt1 = $conn->prepare($sql);
    $stmt1->execute();
    $data1 = $stmt1->fetch();
    $all=[
        ':data'=> $data,
        ':data1'=>$data1
    ];

    echo json_encode($data);
}


