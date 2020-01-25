<?php
 use App\Admin\Department\Department;
include_once"../Src/Admin/Department/Department.php";
$obj=new Department();
$data=$obj->index();
?>
<!DOCTYPE html>
<html>
<title>Views all dept </title>
<body>
<fieldset>
    <legend>View All Department</legend>
    <table border="1">
        <tr>
            <td>Code</td>
            <td>Name</td>
        </tr>

        <?php
        $sl=1;
        foreach ($data as $key=> $item){
            //echo "<pre>";
            //print_r($item);
            ?>

            <tr>

                <td><?php echo $item['code'] ?></td>
                <td><?php echo $item['name']?></td>
            </tr>
        <?php } ?>
    </table>

</fieldset>
<tr>
    <td colspan="3"height="70" bgcolor="#adff2f">
        <marquee ><h2>Welcome To Our University!! </h2></marquee>


    </td>
</tr>
</body>
</html>