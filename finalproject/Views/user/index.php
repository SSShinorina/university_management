<?php
session_start();
if(isset($_SESSION['uname'])){
    ?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>



<html>
<head>
    <title>Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../style/bootstarp/css/bootstrap.min.css">
</head>

<body  bgcolor="silver">



<table border="10" width="500"align="center">


    <tr>
        <td colspan="3"height="600" bgcolor="#98fb98">

            <legend><b>Feature List & Score</b></legend>

            <ul class="nav navbar-nav">
                <li class="active"><a href="../../Views/department.php">1. Department<span class="sr-only">(current)</span></a></li><br>
                <li class="active"><a href="../../Views/course.php">2. Course<span class="sr-only">(current)</span></a></li><br>
                <li class="active"><a href="../../Views/co_assign/create.php">3. Course Assign<span class="sr-only">(current)</span></a></li><br><br>
                <li class="active"><a href="../../Views/view_course/course_statics.php">4. View Courses<span class="sr-only">(current)</span></a></li><br>
                <li class="active"><a href="../../Views/student.php">5. Student<span class="sr-only">(current)</span></a></li><br>
                <li class="active"><a href="../../Views/teacher.php">6. Teacher<span class="sr-only">(current)</span></a></li><br>
                <li class="active"><a href="../../Views/st_assign/create.php">7. Enroll In Course<span class="sr-only">(current)</span></a></li><br>
                <li class="active"><a href="../../Views/viewDept.php">8. View dept.<span class="sr-only">(current)</span></a></li><br>
                <!--                        <li class="active"><a href="../../Views/deptaction.php">Deptaction<span class="sr-only">(current)</span></a><br>-->
                <li class="active"><a href="../../Views/save_result/create.php">9. Save Student Result<span class="sr-only">(current)</span></a></li><br>
                <li class="active"><a href="../../Views/viewResult/create.php">10. View Result<span class="sr-only">(current)</span></a></li><br>

                  </ul>


                   <ul class="nav navbar-nav navbar-right">
                      <li><a href="#"><?php


                        ?></a></li>
                       <li><a href="../logout/logout.php"><h4>LOGOUT</h4></a></li>

                </ul>

        </td>

    </tr>



</table>
<tr>
    <td colspan="3"height="70" bgcolor="#adff2f">
        <marquee ><h2>Welcome To Our University!! </h2></marquee>


    </td>
</tr>

</body>
</html>
<?php }
else{ echo"<br><br><b>Failed!!!!!! <br><br> VUGIJUGI BAD DEN ....Bujcen..Thik Moto Login Koren</b><br><br><img src='../../image/smile.jpg' height='200'width='200'/> ";}
?>




