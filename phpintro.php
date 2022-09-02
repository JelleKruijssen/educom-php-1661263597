<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    //this is a single line comment

    /* This is comment 
    that can span 
    over multiple lines */
    echo "Hello World";

    echo "<br>";

    $txt = "Hello";
    echo $txt;

    echo "<br>";

    $x = 5;
    $y = 7;
    echo $x + $y;

    echo "<br>";
    // checking the length of the string
    echo strlen("Hello World!");

    echo "<br>";
    // reverse
    echo strrev("Hello World!");

    echo "<br>";
    // changing a word within the string
    $oldtxt = "Hello World!";
    $newtxt = str_replace ("World", "Dolly", $oldtxt);
    echo $newtxt;

    echo "<br>";

    echo 10*5;

    echo "<br>";

    echo 10/2;

    echo "<br>";

    $a = 3;
    $b = 5;
    var_dump($a == $b);

    echo "<br>";

    var_dump($a!=$b);

    echo "<br>";

    $a= 50;
    $b= 10;

    if ($a > $b ){
        echo "Hello World!";
    }
    
    echo "<br>";

    $a = 50;
    $b = 10;
    if ($a != $b ){
        echo "Hello World!";
    }

    echo "<br>";

    $a = 50;
    $b = 10;
    if ($a == $b) {
        echo "Yes";
    } else {
        echo "No";
    }

    echo "<br>";

    $a = 50;
    $b = 10;
    if ($a == $b) {
        echo "1";
    } elseif ($a > $b) {
        echo "2";
    } else {
        echo "3";	
    }

    echo "<br>";

    $color = "red";
    switch ($color) {
        case "red":
            echo "Hello";
            break;
        case "green":
            echo "Welcome";
            break;
    }

    echo "<br>";

    switch ($color) {
        case "red":
            echo "Hello";
            break;
        case "green";
            echo "Welcome";
            break;
        default:
         echo "Neither";
    }

    echo "<br>";

    $i = 1;

    while ( $i < 6) {
        echo $i;
        $i++;
    }

    echo "<br>";

    $i = 1;

    do {
        echo $i;
        $i++;
    } while ($i < 6);

    echo "<br>";

    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }

    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        echo $x;
    }

    echo "<br>";

    function myFunction() {
        echo "Hello";
    }

    echo "<br>";

    function myFunctio() {
        echo "Hello World!";
    }
    myFunctio();

    echo "<br>";

    $fname = ("Jelle");
    $lname = ("Kruijssen");
    function myFuncti($fname, $lname) {
        echo $fname;
    }

    echo "<br>";

    function myFunct($fname, $lname) {
        return $lname;
    }

    
    echo "<br>";

    $fruits = array("Apple", "Banana", "Orange");
    echo $fruits[1];

    echo "<br>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Ben is ". $age['Ben']. "Years old.";

    foreach($age as $x => $x_value) {
        echo "Key=" .$x. ", Value=" .$x_value;
        echo "<br>";
    }

    $colors = array("red", "green", "blue", "yellow");
    sort($colors);

    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");
    rsort($colors);

    echo "<br>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);

    ?>



    
</body>
</html>