<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operations on Arrays</h1>

    <?php 

  $a = [1, 2, 3];

  echo "Sum : " . array_sum($a) . "<br>";
  echo "Max : " . max($a) . "<br>";
  echo "Min : " . min($a) . "<br>";
  array_push($a, 4);
  array_shift($a);
  array_pop($a);

  foreach($a as $value){
    echo $value . "<br>";
  }

    ?>
</body>
</html>