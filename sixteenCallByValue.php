<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Call by value</h1>


<?php
    function callByValue($num) {
        $num *= 2;
        echo "Fuction value is : ". $num . "<br>";
    }

    $num = 10;
    callByValue($num);
    echo "Main value is : ". $num . "<br>";
    ?>

</body>
</html>

// output 

Fuction value is : 20
Main value is : 10