
<!-- isset() returns true if variable is declared & assigned and not null -->
<!-- empty() returns true if variable is not declared & assigned,null,false,empty string -->

<!-- <?php
 $user ="user1";

 // isset

 if(isset($user)){
    echo "User ase";
 }
 else{
    echo "User nai";
 }

 //empty

 if(empty($user)){
    echo "User nai";
 }
 else{
    echo "User ase";
 }

 ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="isset_empty.php" method="post">
        <label >Username:</label> <br>
        <input type="text" name="username"> <br>
        <label >Pass:</label> <br>
        <input type="password" name="password"> <br>
        <input style="margin-bottom: 10px;" name="login" type="submit" value="Login">
    </form>
</body>
</html>

<?php
if(isset($_POST["login"])){
    if(empty($_POST["username"]) || empty($_POST["password"])){
        echo"Username or password is missing";
    }
    else{
        echo "Successfully logged in";
    }
}
?>