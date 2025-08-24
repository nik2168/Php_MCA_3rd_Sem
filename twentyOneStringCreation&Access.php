<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>String creation & accessing !</h1>

<?php

$str = "Hello thEre !";

echo strlen($str). "<br>";
echo strpos($str, "e"). "<br>";
echo stripos($str, "e"). "<br>";
echo strstr($str, "e"). "<br>";
echo strstr($str, "e", true). "<br>";
echo str_replace("E", "a", $str). "<br>";
echo str_ireplace("e", "a", $str). "<br>";

?>

</body>
</html>

// output 

13
1
1
e
Hello thEre !
Hello thAre !