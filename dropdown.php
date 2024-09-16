<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="dropdown.php" method="post">
        <h3>Select your favorite color:</h3>
        <select name="color[]" >
            <option disabled selected value="">Select a color</option>
            <option value="Green">Green</option>
            <option value="Red">Red</option>
            <option value="Blue">Blue</option>
        </select>
        <input type="submit" name="submit" value="Submit">

    </form>
</body>

</html>

<?php
    if(isset($_POST["submit"])){
        if(isset(($_POST["color"])) && !empty($_POST["color"])){
            echo "Your fav color is: " . implode(", ",$_POST["color"]) ;
        }
        else{
            echo "Choose any color";
        }
    }
?>