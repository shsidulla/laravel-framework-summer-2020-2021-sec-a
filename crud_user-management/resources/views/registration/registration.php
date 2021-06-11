<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <form method="post">
        <center>
            <fieldset style="width : 350px;">
                <legend><b>Registration</b></legend>
                    <table border="0">
                        <tr>
                            <td>User Name</td>
                            <td>: <input type="text" name="uname"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: <input type="email" name="mail"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>: <input type="password" name="pass"></td>
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            <td>: <input type="password" name="cpass"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input type="submit" name="submit" value="Register">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left">
                                <a href="/login">Log In</a>
                            </td>
                        </tr>
                    </table>
            </fieldset>
        </center>
    </form>
</body>
</html>