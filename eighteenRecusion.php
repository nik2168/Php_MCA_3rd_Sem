<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recursion </h1>

    <?php

    function printNVal($n){
        if($n < 0){
            return;
        }
      
        printNVal($n-1);
        echo $n . "<br>";
    }

    printNVal(3);

    ?>

</body>
</html>

// output 

3
2
1