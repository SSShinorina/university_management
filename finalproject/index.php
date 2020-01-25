
<?php
include_once("vendor/autoload.php");



use App\Admin\Course\Course;
use App\Admin\Student\Student;
use App\Admin\Teacher\Teacher;
use App\Admin\reg\reg;
use App\Admin\login\login;


$obj1 = new Student();
$obj4tr = new Teacher();
$obj4crs = new Course();
$obj4reg = new reg();
$obj4login= new App\Admin\login\login();

$obj4dept = new \App\Admin\Department\Department();
$obj4deptaction = new \App\Admin\Department\Department();
$obj4viewDept = new \App\Admin\Department\Department();
$obj4courseassign=new \App\Admin\courseAssign\courseAssign();
$obj4reg=new \App\Admin\reg\reg();

?>


<!DOCTYPE html>
<html>
<head><title>Login</title></head>



<html>

<body  bgcolor="silver">

<table border="1" width="1200"align="center">
 <tr >
  <td colspan="3"height="80" bgcolor="green">
   <h1 align="center">APEX University Course & Result Management System</h1>
  </td>
 </tr>


 <tr>
  <td colspan="5"height="60" bgcolor="black">
   <a href="#"style="color:white">HOME</a>&nbsp &nbsp
   <a href="views/registration/create.php"style="color:white">REGINTRATION</a>&nbsp &nbsp
   <a href="views/login/login.php"style="color:white">LOG IN </a>
  </td>
 </tr>

 <tr>
  <td valign="top"width="200"height="400"bgcolor="blue">
   <img src="image/un.jpg"height="200"width="300"></img>
      <img src="image/apex.jpg"height="200"width="300"></img>



  </td>



  <td>
   <style>
    table,tr,td{border:1px solid yellow;}

   </style>


  </td>

  <td valign="top"width="200"height="400"bgcolor="blue">
   <img src="image/log.jpg"height="400"width="900"></img>

  </td>
 </tr>


 <tr>
  <td colspan="3"height="70" bgcolor="#adff2f">
   <marquee ><h2>Welcome To Our University!! </h2></marquee>


  </td>
 </tr>
</table>


