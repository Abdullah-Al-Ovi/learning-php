<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="get_post.php" method="get">
        <label >Username:</label> <br>
        <input type="text" name="username"> <br>
        <label >Pass:</label> <br>
        <input type="password" name="password"> <br>
        <input style="margin-bottom: 10px;" type="submit" value="Login">
    </form> -->
    <form action="get_post.php" method="post">
        <label >Username:</label> <br>
        <input type="text" name="username"> <br>
        <label >Pass:</label> <br>
        <input type="password" name="password"> <br>
        <input style="margin-bottom: 10px;" type="submit" value="Login">
    </form>
</body>
</html>

<!-- <?php
echo $_GET["username"] . "<br>";
echo $_GET["password"] . "<br>";
?> -->

<?php
echo "{$_POST["username"]} <br>";
$password = $_POST["password"];
echo $password;
?>