<?php

session_start();
if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html>
<head><title>registration</title>
<script>
    function myFunction() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        var ok = true;
        if (pass1 != pass2) {
            document.getElementById("pass1").style.borderColor = "black";
            document.getElementById("pass2").style.borderColor = "red";
            ok = false;
            document.getElementById("message").innerHTML="Passwords Not Match!!!";
        }

        return ok;
    }

</script>
</head>
<body>
<fieldset  style="margin: 50px 350px;">
    <legend><b>REGISTRATION</b></legend>
    <form method="post" onsubmit="return myFunction()" action="store.php">
        <table>
            <tr>
                <td align="right">E-mail: </td>
                <td align="left"><input type="email" name="email" placeholder="Enter Your E-mail " required></td>
            </tr>
            <tr>
                <td align="right">Password: </td>
                <td align="left"><input type="password" id="pass1" name="password" placeholder="Enter Password" required></td>
            </tr>
            <tr>
                <td align="right">Confirm password: </td>
                <td align="left"><input type="password" id="pass2" placeholder="Confirm Password" required></td>
                <td id="message"></td>
            </tr>
            <tr>
                <td></td>
                <td  align="center"><input type="submit" value="Submit"></td>
                <td></td>

            </tr>


        </table>
    </form>


</fieldset>
<tr>
    <td colspan="3"height="70" bgcolor="#adff2f">
        <marquee ><h2>Welcome To Our University!! </h2></marquee>


    </td>
</tr>
</body>
</html>
