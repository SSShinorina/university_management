<?php
include_once "../../Src/Admin/Enroll/enroll.php";
include_once "db.php";
$data=getEntrollCourse();
//print_r ($data);
$obj=new App\Admin\Enroll\enroll();
$obj->setDatat($_POST);
$obj->store();
$array=$obj->show();
?>
<html>
<head>
    <title>Enroll In a Course</title>
    <script src="jquery-3.1.1.min.js"></script>

</head>
<body>
<fieldset  style="margin: 50px 350px;">
    <legend>Enroll In a Course</legend>
    <pre>
    <form>

        <label>Student Registration No</label>
        <select name="reg_no" id="reg_no">
            <option value="">select registration no</option>
            <?php
            foreach($data as $item){?>
                <option value="<?php echo $item['id']?>"><?php echo $item['student_reg_no']?></option>
            <?php }  ?>
        </select>

        <label>Name</label>
        <input type="text" id="sn"/>

        <label>Email</label>
        <input type="text" id="se"/>

        <label>Department</label>
        <input type="text" id="sd"/>


        <label> Select Course </label>
        <select name="course_code" id="course_code">
            <option>--SELECT Course--</option>
            <?php  foreach ($array as $item){?>
                <option value="<?php echo $item['id'] ?>"><?php echo $item['code'] ?></option>
            <?php } ?>
        </select>

        <label> Date </label>
        <input type="date"  id="date"/>

                                   <input type="submit"  value="Enroll"/>



    </form>
        <input type="button" onclick="history.go(-1);" value="Back">
    </pre>

    <script>
        $(document).ready(function() {

            $("#reg_no").change(function () {
                var r_id = $(this).val();
                console.log(r_id);

                $.ajax({
                    url: 'action.php',
                    type: 'post',
                    data: {r_id: r_id},
                    dataType: 'json',
                    success: function (response) {
                        console.log(response)
//                        console.log(response['students'])
//                        var len = response['students'].length;
//
                        var sname = response['name'];
                        var semail = response['email'];
                        var sdept = response['department_id'];


                        $("#sn").val(sname)
                        $("#se").val(semail)
                        $("#sd").val(sdept)

                    }
                });
            });
        });
    </script>

</fieldset>
<tr>
    <td colspan="3"height="70" bgcolor="#adff2f">
        <marquee ><h2>Welcome To Our University!! </h2></marquee>


    </td>
</tr>
</body>
</html>