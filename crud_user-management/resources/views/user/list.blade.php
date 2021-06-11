<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
    <center>
        <h2>
            <u>User List</u><br>
            <br>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>Type</td>
                    <td></td>
                </tr>
                
                @foreach($userlist as $key)
                    <tr>
                        <td>{{$key[0]}}</td>
                        <td>{{$key[1]}}</td>
                        <td>{{$key[2]}}</td>
                        <td>{{$key[3]}}</td>
                        <td>{{$key[4]}}</td>
                        <td>
                            <a href="/user/edit/{{$key['0']}}"> Edit</a> |
                            <a href="/user/delete/{{$key['0']}}"> Delete</a> 
                        </td>
                    </tr> 
                @endforeach
                
            </table>
            <br>
            <a href="/home">Home |</a>
            <a href="/logout">Logout</a>
        </h2>
    </center>
</body>
</html>