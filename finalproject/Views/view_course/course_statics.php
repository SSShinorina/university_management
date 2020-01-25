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
    <legend>View Course Statics</legend>
    <pre>
    <form method="post">
    <label>Department</label>
    <select name="department_id"id="department_id">
        <option value="">Select Department</option>
        <?php
        foreach($data as $item){?>
            <option value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
        <?php }  ?>
    </select>
    <table border="1" name="s_table" id="s_table">
        <thead>
        <tr>
            <th id="cc">Course Code</th>
            <th id="cn">Name</th>
            <th id="ss">Semester</th>
            <th id="tn">Assign</th>
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

        $("#department_id").change(function(){
            var dept_id = $(this).val();
            //console.log(dept_id);

            $.ajax({
                url: 'action.php',
                type: 'post',
                data: {dept_id:dept_id},
                dataType: 'json',
                success:function(response){
                    console.log(response);

                    var len = response.length;

                    //$("#s_table").empty();
                    var showCourse = '';
                    for( var i = 0; i < len; i++){
                        var tn = '';
                        if (response[i].tn == null){
                            tn = 'Not Assign Yet';
                        }else {
                            tn = response[i].tn;
                        }
                        showCourse = showCourse + '<tr><td>'+ response[i].cc +'</td><td>'+ response[i].cn +'</td><td>'+ response[i].ss +'</td><td>'+ tn +'</td></tr>';


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
