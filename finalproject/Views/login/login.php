<?php
include_once"../../Src/Admin/login/login.php";
use App\Admin\login\LogIn;
session_start();
if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>


<!DOCTYPE html>
<html>
<head><title>Login</title>
<body>
<fieldset  style="margin: 50px 450px;">
                <legend><b>LOG IN</b></legend>

            <form action="../login/store.php" method="post">
                <table>

                    <tr>
                        <td>E-mail: </td>
                        <td><input type="email" name="email" placeholder="Enter your E-mail"></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" placeholder="Enter your Password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" align="center"><input type="submit" value="Login"><a href="../../views/registration/create.php">Registration</a>
                        </td>
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
