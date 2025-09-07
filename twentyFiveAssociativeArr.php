<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Associative Arrays / Map</h1>

 <?php

$a = ['fruit' => 'Mango', 'vegetable' => 'Tomato', 'animal' => 'Lion'];

echo $a['fruit'] . "<br>";

var_dump($a);

array_splice($a, 1, 1);

$a['Laptop'] = 'Macbook Air M4';

echo "<br>";

foreach($a as $key => $value){
    echo $key . " : " . $value . "<br>";
}   

?>

</body>
</html>