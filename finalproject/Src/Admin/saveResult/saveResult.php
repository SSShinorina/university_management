<?php
namespace App\Admin\saveResult;
use PDO;
class saveResult
{
    public function show(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=finalproject', 'root', '');
            $sql="SELECT * FROM `grades`";
            $query='INSERT INTO someTable VALUES(:name)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $data =$stmt->fetchAll();
            return $data;


        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }
    }
}