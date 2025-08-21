<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>User Defined & Built In Functions : </h1>

<?php

function greetUser($name) {
    echo "Hello $name ! <br>";
}

$par = "Nik";
greetUser($par);
echo strlen("Hello");

?>

</body>
</html>

// output 

Hello Nik !
5
