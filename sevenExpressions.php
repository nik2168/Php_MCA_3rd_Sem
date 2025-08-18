<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Expressions : </h1>

    <?php

    $x = 10;
    $y = 20;

    echo ($x + $y)."<br>";

    $name = "Nik";
    echo 'Hello, ' . $name . '<br>';

    echo strlen("Hello"). "<br>";

    $isEven = $x % 2 == 0;
    echo $isEven;


    $result = ($x > $y) ? true: false;
    echo $result;

    ?>
</body>
</html>


// output 

30
Hello, Nik
5
true