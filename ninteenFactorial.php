<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial Using Recursion: </h1>

    <?php

    function factorial($n){
        if($n == 0){
            return 1;
        }
        return $n * factorial($n-1);
    }

    echo factorial(5);
    ?>
</body>
</html>

// output 

120