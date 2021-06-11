<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create User</title>
</head>
<body>
    <form method="post">
        <center>
            <fieldset style="width : 350px;">
                <legend><b>Registration</b></legend>
                    <table border="0">
                        <tr>
                            <td>ID</td>
                            <td>: <input type="text" name="id"></td>
                        </tr>
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
                            <td>Type</td>
                            <td>: <input type="text" name="type"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input type="submit" name="submit" value="Edit user">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left">
                                <a href="/home">Home |</a>
                                <a href="/logout">Logout</a>
                            </td>
                        </tr>
                    </table>
            </fieldset>
        </center>
    </form>
</body>
</html>