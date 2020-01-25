<?php
include_once "../Src/Admin/Student/Student.php";
use App\Admin\Student\Student;
 $obj=new Student();
 $obj->setData($_POST)->store();
 $array1=$obj->show1();
?>
<html>
<head>
    <title>Register Student</title>
</head>
<body>
<fieldset  style="margin: 50px 450px;">
    <legend><b>Register Student</b></legend>
    <form method="post">
        <table>
            <tr>
                <td align="right">Name : </td>
                <td><input type="text" name="text"/></td>
            </tr>
            <tr>
                <td align="right">Email : </td>
                <td><input type="email" name="email"/></td>
            </tr>
           <tr>
               <td align="right">Contact No : </td>
               <td><input type="text" name="contact"/></td>
           </tr>
            <tr>
                <td align="right">Date : </td>
                <td><input type="date" name="date"/></td>
            </tr>
            <tr>
                <td align="right">Address : </td>
                <td><textarea name="address"></textarea></td>
            </tr>
            <tr>
                <td align="right">Department : </td>
                <td>
                    <select>
                        <?php  foreach ($array1 as $item) {?>
                            <option inlist="<?php echo $item['name']?>"><?php echo $item['name']?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Register"/></td>

            </tr>
        </table>
    </form>
    <input type="button" onclick="history.go(-1);" value="Back">
</fieldset>
<tr>
    <td colspan="3"height="70" bgcolor="#adff2f">
        <marquee ><h2>Welcome To Our University!! </h2></marquee>


    </td>
</tr>
</body>
</html>