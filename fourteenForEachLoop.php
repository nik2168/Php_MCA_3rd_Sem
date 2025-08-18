<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>For Each Loop</h1>

    <?php

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $color) {
        echo $color . "<br>";
    }

    ?>

</body>
</html>

// output

red
green
blue
yellow