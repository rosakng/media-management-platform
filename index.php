<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <b> <center> Log In</center> </b> <br/>
    <form action="home.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username"></input><br/>
        <label for="password">Password</label>
        <input type="text" name="password"></input><br/>
        <!-- submit button submits POST request and executes action PHP file -->
        <input type="submit" name="change" value="Log in"></input>
    </form>
</body>
</html>