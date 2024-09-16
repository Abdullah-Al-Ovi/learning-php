<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio.php" method="post">
        <div>
            <input type="radio" name="gender" value="male">
            <label>Male</label>
        </div>
        <div>
            <input type="radio" name="gender" value="female">
            <label>Female</label>
        </div>
        <input type="submit" name="submit" value="Submit">
        <br>
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    if(isset($_POST["gender"])){
        echo "You are a {$_POST["gender"]}";
    }
    else{
        echo "There is no option to be LGBTQ+.So choose a gender and submit.";
    }
}
?>