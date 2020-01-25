
<?php
include_once "../../Src/Admin/courseAssign/courseAssign.php";
include_once ("db.php");
$data=getAllDepartments();
//print_r ($data);
$obj=new \App\Admin\courseAssign\courseAssign();
$obj->setData($_POST);
$obj->store();
?>
<html>
<head>
  <title>Course Assain</title>
    <script src="jquery-3.1.1.min.js"></script>

</head>


<body>
<fieldset   style="margin:30px 450px;">
    <legend><b>Course Assign to teacher</b></legend>
<pre>
    <form>

        <label>department</label>
        <select name="test_id"id="dep_id">
            <option value="">select Department</option>
        <?php
        foreach($data as $item){?>
           <option value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
            <?php }  ?>
        </select>

        <label>Teacher</label>
        <select id="teac_id" name="teach">
            <option value=""> select Teacher.. </option>
        </select>

        <label> Credit to be taken </label>
        <input type="text"  id="ctbt"/>

        <label> Remaining credit </label>
        <input type="text"  id="rc"/>

        <label> Course Code </label>
        <select name="course_code" id="course_code">
            <option>SELECT Course Code</option>
        </select>

        <label> Course name </label>
        <input type="text"  id="cn"/>

        <label>course  Credit  </label>
        <input type="text"  id="cc"/>

        <input type="submit"  value="Assign"/>    <input type="reset"  value="reset"/>

    </form>
     <input type="button" onclick="history.go(-1);" value="Back">
    </pre>

    <script>
        $(document).ready(function(){

            $("#dep_id").change(function(){
                var dep_id = $(this).val();

                $.ajax({
                    url: 'action.php',
                    type: 'post',
                    data: {depart:dep_id},
                    dataType: 'json',
                    success:function(response) {
                        console.log(response['teachers'])
                        var len = response['teachers'].length;

                        $("#teac_id").empty();
                        $("#teac_id").append("<option value=''>" + 'select Teacher' + "</option>");

                        for (var i = 0; i < len; i++) {
                            var id = response['teachers'][i]['id'];
                            var name = response['teachers'][i]['name'];

                            $("#teac_id").append("<option value='" + id + "'>" + name + "</option>");

                        }

                        $("#course_code").empty();
                        var clen = response['courses'].length;
                        $("#course_code").append("<option value='0'>" + 'Select Code'+ "</option>");
                        for (var i = 0; i < clen; i++) {
                            var id = response['courses'][i]['id'];
                            var code = response['courses'][i]['code'];
//                            var name = response['courses'][i]['name'];
//                            var cc = response['courses'][i]['credit'];

                            $("#course_code").append("<option value='" + id + "'>" + code + "</option>");
//                            $("#cn").val(name)
//                            $("#cc").val(cc)
                        }
                    }
                });
            });

        });

        $("#course_code").change(function(){
            var c_id= $(this).val();
            console.log(course_code);

            $.ajax({
                url: 'action.php',
                type: 'post',
                data: {c_id:c_id},
                dataType: 'json',
                success:function(response){
                    //console.log(response);
                    var cname= response['name'];
                    var c_c =response['credit'];
                    $("#cn").val(cname)
                    $("#cc").val(c_c)


                }
            });
        });
//teacher change
        $("#teac_id").change(function(){
            var teach_id= $(this).val();

            $.ajax({
                url: 'action.php',
                type: 'post',
                data: {teach_id:teach_id},
                dataType: 'json',
                success:function(response){
                    var cc=response['teacher']['credit_capability'];
                    var ac=response['a_c']['assign_credit'];
                    console.log(ac)

                    $("#ctbt").val(cc)
                    $("#rc").val(cc-ac)

                }
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