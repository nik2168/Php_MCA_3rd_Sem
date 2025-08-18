<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>If Else statements in PHP</h1>

    <?php

    $x = 10;
    $y = 20;

    if ($x == $y) {
        echo "x and y are equal";
    } else if ($x > $y) {
        echo "x is greater than y";
    } 
    else if ($x < $y) {
        echo "x is less than y";
    }
    else {
        echo "x and y are not equal";
    }

    ?>
</body>
</html>

// output 

x is greater than y