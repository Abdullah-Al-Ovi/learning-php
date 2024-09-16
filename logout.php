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
    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php
    echo "User: {$_SESSION["username"]}";
    echo "PAss: {$_SESSION["password"]}";

    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header(("Location: login.php"));
    }
?>