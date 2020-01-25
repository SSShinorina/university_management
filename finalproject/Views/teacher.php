<?php
include_once "../Src/Admin/Teacher/Teacher.php";

use App\Admin\Teacher\Teacher;
//
//if(isset($_POST['taken'])){
//
//
//    if (strlen($_POST['taken'] >= 1)) {
//        $obj = new Teacher();
//        $obj->setData($_POST)->store();
//        $array=$obj->show();
//        $array1=$obj->show1();
//    }
//}
////print_r($_POST);
//
//
//
?>
<html>
<head>
    <title>Save Teacher</title>
</head>
<body>
<fieldset style="margin: 50px 450px;">
    <legend><b>Save Teacher</b></legend>
    <form  action="demo1.php" method="post">
        <table>
            <tr>
                <td align="right">Name : </td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td align="right">Address : </td>
                <td><textarea name="text"></textarea></td>
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
                <td align="right">Designation : </td>
                <td>
                    <select name="des">
                        <option>--Designation--</option>
                        <?php  foreach ($array as $item) {?>
                            <option inlist="<?php print_r($item) ?>"><?php print_r($item) ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">Department : </td>
                <td>
                    <select name="dept">
                        <option>--Department--</option>
                        <?php  foreach ($array1 as $item) {?>
                            <option inlist="<?php echo $item['name']?>"><?php echo $item['name']?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">Credit to be taken</td>
                <td><input type="text" name="taken"/></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Save"/></td>
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