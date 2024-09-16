<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <div>
            <label for="">Username</label>
            <input type="text" name="username" id="">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>

<?php
if(isset($_POST["login"])){
    if(!empty($_POST["username"]) || !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = password_hash($_POST["password"],PASSWORD_DEFAULT);
        header("Location: logout.php");
    }
    else{
        echo"Username/password is missing";
    }
}

?>