<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data types in PHP</h1>

    <?php
     
    $x = 1;
    var_dump($x);
    echo "<br>";

    $y = 1.3;
    var_dump($y);
    echo "<br>";

    $z = "Nik";
    var_dump($z);
    echo "<br>";

    $a = NULL;
    var_dump($a);
    echo "<br>";

    $cars = array("Volvo", "BMW", "Toyota");  
    echo "$cars[0] <br>";
    var_dump($cars);

    class animal {
        public $name = "Cat";
    }
    
    $b = new animal();
    var_dump($b);
    echo "$b";
    echo "<br>";



     ?>

</body>
</html>

// output 

int(1)
float(1.3)
string(3) "Nik"
NULL
string(3) "Cat"
object(animal)#1 (1) {
  ["name"]=>
  string(3) "Cat"
}