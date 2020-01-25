<?php
include_once ("db.php");
$data=getAllDepartments();

?>




<html>

<head>
    <meta charset="utf-8">

    <script src="jquery-3.1.1.min.js"></script>
</head>
<body>
<fieldset  style="margin: 50px 350px;">
    <legend>View Result</legend>
    <pre>
    <form method="post">
    <label>Student Reg. No</label>
    <select name="reg_no"id="reg_no">
        <option value="">Select registration no</option>
        <?php
        foreach($data as $item){?>
            <option value="<?php echo $item['id']?>"><?php echo $item['student_reg_no']?></option>
        <?php }  ?>
    </select>
    <table border="1" name="s_table" id="s_table">
        <thead>
        <tr>
            <th id="cc">Course Code</th>
            <th id="cn">Name</th>
            <th id="gr">Grade</th>
        </tr>
        </thead>
        <tbody id="list">

        </tbody>
    </table>




    </form>
         <input type="button" onclick="history.go(-1);" value="Back">
    </pre>


    <script>
        $(document).ready(function(){

            $("#reg_no").change(function(){
                var reg_no = $(this).val();
                //console.log(dept_id);

                $.ajax({
                    url: 'action.php',
                    type: 'post',
                    data: {dept_id:reg_no},
                    dataType: 'json',
                    success:function(response){
                        console.log(response);

                        var len = response.length;

                        //$("#s_table").empty();
                        var showCourse = '';
                        for( var i = 0; i < len; i++){

                            showCourse = showCourse + '<tr><td>'+ response[i].cc +'</td><td>'+ response[i].cn +'</td><td>'+ response[i].gr +'</td><tr>';


                        }
                        $('#list').html(showCourse);
                    }
                });
            });
        });
    </script>
</fieldset>
</body>
</html>
