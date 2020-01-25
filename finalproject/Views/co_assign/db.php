<?php
$conn= new PDO('mysql:host=localhost; dbname=finalproject', 'root', '');
function getAllDepartments(){
    global $conn;
    $sql = "SELECT * FROM departments ";
    $stmt=$conn->prepare($sql);
   $stmt ->execute();
    $data =$stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($data);
    return $data;


}




