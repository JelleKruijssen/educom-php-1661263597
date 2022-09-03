<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPadvanced</title>
</head>
<body>
    <?php

    echo date("l");

    echo "<br>";

    echo date ("Y.m.d");

    echo "<br>";

    echo date ("H:i:s");

    echo "<br>";

    include 'footer.php';
    echo readfile('webdict.txt');

    $myfile= fopen("");

    setcookie("username", "John", time() + (86400 * 30), "/");

    echo "<br>";

    

    ?>
    <?php
    session_start();
    $_SESSION["favcolor"] = "green";
    echo $_SESSION["favcolor"];
    ?>
</body>
</html>