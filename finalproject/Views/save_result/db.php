<?php
$conn= new PDO('mysql:host=localhost; dbname=finalproject', 'root', '');
function getAllDepartments()
{
    global $conn;
    $sql = "SELECT * FROM students ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($data);
    return $data;
}
function getGrades(){


global $conn;
    $sql = "SELECT * FROM grades ";
    $stmt=$conn->prepare($sql);
    $stmt ->execute();
    $data1 =$stmt->fetchAll(PDO::FETCH_ASSOC);

    return $data1;


}




