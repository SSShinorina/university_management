<?php
$conn= new PDO('mysql:host=localhost; dbname=finalproject', 'root', '');
function getEntrollCourse(){
    global $conn;
    $sql = "SELECT * FROM students";
    $stmt=$conn->prepare($sql);
    $stmt ->execute();
    $data =$stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($data);
    return $data;


}




