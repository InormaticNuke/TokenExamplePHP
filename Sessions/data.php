<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Session Data</h2>
    <?php

    echo "Favorite colour: ".$_SESSION["favcolor"]."<br>";
    echo "Favorite colour: ".$_SESSION["favanimal"]."<br>";

    ?>

    <br><br>

    <a href="logout.php">logout</a>

</body>
</html>