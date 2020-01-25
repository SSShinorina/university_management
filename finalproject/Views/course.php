<?php
//include_once "../Src/Admin/Course/Course.php";
//include_once "../Src/Admin/Department/Department.php";
//use App\Admin\Course\Course;
//use App\Admin\Department\Department;
//
//if (isset($_POST['code'])) {
//
//
//    if (strlen($_POST['code'] >= 5)) {
//        if (strlen($_POST['credit'] > 0.5) && strlen($_POST['credit'] < 6)) {
//            $obj = new Course();
//            $obj->setData($_POST);
//            $obj->store();
//            $array = $obj->show1();
//            $obj2 = new Department();
//            $data = $obj2->show();
//
//
//        }
//    }
//}
//print_r($_POST);
//print_r($_POST);

?>
<?php
include_once"../Src/Admin/Department/Department.php";
include_once"../Src/Admin/Course/Course.php";
$obj=new \App\Admin\Department\Department();
$data=$obj->index();
$obj=new \App\Admin\Course\Course();
$array1=$obj->show1();
//print_r($data);
?>




<html>
<head>
    <title>Save Course</title>
</head>
<body>
<fieldset  style="margin:50px 450px;">
    <legend><b>Save Course</b></legend>

    <form action="demo.php" method="post">
        <table>
            <tr>
                <td align="right"> Code :</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td align="right"> Name :</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td align="right"> Credit :</td>
                <td><input type="text" name="credit"></td>
            </tr>
            <tr>
                <td align="right"> Description :</td>
                <td><textarea name="description"></textarea></td>
            </tr>
            <tr>
                <td align="right"> Department :</td>

                <td>

                    <select name="dept">
                        <option>--Select Department--</option>
                        <?php foreach ($data as $item) { ?>
                            <option inlist="<?php echo $item['name'] ?>"><?php echo $item['name'] ?></option>
                        <?php } ?>
                    </select>
                </td>

            </tr>

            <tr>
                <td align="right"> Semester :</td>
                <td>
                    <select name="sem">
                        <option>--Select Semester--</option>
                        <?php foreach ($array1 as $item) { ?>
                            <option
                                inlist="<?php echo $item['id'] ?>"><?php echo $item['semester_no'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>


            <tr>

                <td colspan="2" align="right"><input type="submit" value="Save"name="submit"></td>
            </tr>
        </table>
            <input type="button" onclick="history.go(-1);" value="Back">

</fieldset>

<tr>
    <td colspan="3"height="70" bgcolor="#adff2f">
        <marquee ><h2>Welcome To Our University!! </h2></marquee>


    </td>
</tr>

</body>
</html>