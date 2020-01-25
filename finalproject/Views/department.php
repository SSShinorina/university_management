<?php
include_once"../Src/Admin/Department/Department.php";
use App\Admin\Department\Department;
if(isset($_POST['code'])) {
    if (strlen($_POST['code'] > 2) && (strlen($_POST['code'])) < 8) {
        $obj = new \App\Admin\Department\Department();
        $obj->setData($_POST)->store();
    }
}
//print_r($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Save Department</title>
</head>
<body>
<fieldset style="margin: 50px 450px;">
    <legend>Save Department</legend>
    <form method="post">
        <table>
            <tr>
                <td align="right">Code : </td>
                <td><input type="text" name="code"/></td>
            </tr>
            <tr>
                <td align="right"> Name : </td>
                <td><input type="text" name="dept_name"/></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Save"/></td>
                <td></td>
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