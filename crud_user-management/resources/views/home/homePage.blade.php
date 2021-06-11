<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Home</title>
</head>
<body>
    <Center>
        <h1>Welcome {{$name}}</h1>
        <h1>this is home page</h1>
        
        <h2>
            <a href="/user/create">Create User | </a>
            <a href="/user/all">View All User |</a>
            <a href="/logout">Logout</a>
        </h2>

        <button><a href="/logout">Logout</a></button>
    </Center>
</body>
</html>