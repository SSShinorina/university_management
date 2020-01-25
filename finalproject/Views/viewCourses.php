<!DOCTYPE html>
<html>
<style>
    table,th,td {
        border : 1px solid #000000;
        border-collapse: collapse;
    }
    th,td {
        padding: 5px;
    }
</style>
<body>

<h1>View Course Statics</h1>

<form action="">
    <select name="customers" onchange="showCustomer(this.value)">
        <option value="">Select a Course:</option>
        <option value="ALFKI">CSE</option>
        <option value="NORTS ">EEE</option>
        <option value="WOLZA">SE</option>
    </select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>

<script>
    function showCustomer(str) {
        var xhttp;
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "getcustomer.asp?q="+str, true);
        xhttp.send();
    }
</script>
<tr>
    <td colspan="3"height="70" bgcolor="#adff2f">
        <marquee ><h2>Welcome To Our University!! </h2></marquee>


    </td>
</tr>
</body>

</html>
