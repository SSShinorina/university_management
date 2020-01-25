<?php
$conn= new PDO('mysql:host=localhost; dbname=finalproject', 'root', '');
if(isset($_POST['r_id'])){

    $reg_no = "'". $_POST['r_id'] . "'";


    $sql = "SELECT * FROM `students` WHERE id=".$reg_no ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch();

    echo json_encode($data);
}


