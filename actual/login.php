<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf=8">
        <title>"Login Page "</title>
        <link rel = "stylesheet" href = "cssFiles/loginStyles.css">
    </head>

    <body>
        <form class = "box" method = "post" netlify>
        <h1>Login</h1>
        <input type = "text" name = "" placeholder = "Username">
        <input type = "password" name = "" placeholder = "Password">
        <input type = "submit" name = "" value = "Login">


        </form>
    </body>
</html>



<?php
    if(isset($_POST['submit'])){
        $un = $_POST['username'];
        $pw = $_POST['password'];

        if ($un == 'username'&& $pw == 'password') {
            header("location:index.html");
            exit();
        }
        else {
            echo "Invalid Username/Password";
        }

    }


?>

