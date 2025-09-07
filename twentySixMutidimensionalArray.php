<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multidimentional Array</h1>

  <?php

   $a = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
   );

   for($i = 0; $i < count($a); $i++){
    for($j = 0; $j < count($a[$i]); $j++){
        echo $a[$i][$j] . " ";
    }
    echo "<br>";
   }

  ?>

</body>
</html>