<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
    <h3>Select your hobbies:</h3>
    <div>
        <input type="checkbox" name="hobbies[]" value="Reading">
        <label for="">Reading</label>
    </div>
    <div>
        <input type="checkbox" name="hobbies[]" value="Traveling">
        <label for="">Traveling</label>
    </div>
    <div>
        <input type="checkbox" name="hobbies[]" value="Cooking">
        <label for="">Cooking</label>
    </div>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        if(isset($_POST["hobbies"]) && !empty($_POST["hobbies"])){
            echo "Your hobbies are: " . implode(", ",$_POST["hobbies"]);
        }
        else{
            echo "No hobbies selected";
        }
    }
?>