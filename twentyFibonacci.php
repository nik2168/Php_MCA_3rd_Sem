<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fibonacci Series Using Recursion: </h1>

    <?php

    function fibonacci($n){
        if($n == 0){
            return 0;
        }
        if($n == 1){
            return 1;
        }
        
        return fibonacci($n-1) + fibonacci($n-2);
    }

    for($i = 0; $i < 10; $i++){
        echo fibonacci($i) . "<br>";
    }
    ?>
</body>
</html>

// output 

0
1
1
2
3
5
8
13
21