<?php
//include_once "../Src/Admin/courseAssign/courseAssign.php";
//use \App\Admin\courseAssign\courseAssign;
//$obj=new courseAssign();
//$obj->setData($_POST)->store();
//$obj=new courseAssign();
//$obj->setData($_POST)->storeTeacher();
//$array=$obj->show();
//$array1=$obj->showTeacher();

?>
<html>
<head>
    <title>Course Assign To Teacher</title>
</head>
<body>
<fieldset  style="margin:50px 450px;">
    <legend><b>Save Course</b></legend>
    <form method="post">
        <table>
            <tr>
                <td align="right">Department : </td>
                <td>
                    <select name="dept">
                        <option>--Select Department--</option>
                        <?php  foreach ($array as $item) {?>
                            <option inlist="<?php echo $item['dept_name']?>"><?php echo $item['dept_name']?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">Teacher : </td>
                <td>
                    <select name="teacher">
                        <option>--Select Teacher--</option>
                        <?php  foreach ($array1 as $item) {?>
                            <option inlist="<?php echo $item['ca_teacher']?>"><?php echo $item['ca_teacher']?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right" name="taken">Credit To Be Taken : </td>
                <td><input type="text" name="text"/></td>
            </tr>
            <tr>
                <td align="right" name="remaining">Remaining Credit</td>
                <td></td>
            </tr>
            <tr>
                <td align="right">Course Code : </td>
                <td>
                    <select name="code">
                        <?php  foreach ($array1 as $item) {?>
                            <option inlist="<?php echo $item['dept_name']?>"><?php echo $item['dept_name']?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right" name="name">Name : </td>
                 <td><?php echo $item['ID']?></td>
            </tr>
            <tr>
                <td align="right" name="credit">Credit : </td>
                <td><?php echo $item['ID']?></td>
            </tr>
            <tr>
                <td align="right"><input type="submit" value="Assign"/></td>

            </tr>
        </table>
        <input type="button" onclick="history.go(-1);" value="Back">
    </form>
</fieldset>
<tr>
    <td colspan="3"height="70" bgcolor="#adff2f">
        <marquee ><h2>Welcome To Our University!! </h2></marquee>


    </td>
</tr>
</body>
</html>