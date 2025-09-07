<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays In Php</h1>

    <?php

    $arr1 = [1,2,3,4];
    $arr2 = array('i', 'am', 'nik');

    for($i = 0; $i < count($arr1); $i++){
        echo $arr1[$i] . "<br>";
    }

    for($i = 0; $i < count($arr2); $i++){
            echo $arr2[$i] . "<br>";
    }
    ?>
    
</body>
</html>