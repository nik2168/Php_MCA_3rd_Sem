<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Break & Continue</h1>

    <?php
     
     for ($i = 1; $i < 10; $i++){
        if ($i % 2 == 0){
            continue;
        }
        echo $i . "<br>";
     }

     ?>
</body>
</html>

// output 

1
3
5
7
9