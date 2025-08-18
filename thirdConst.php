<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constants in PHP</h1>

    <?php 

    define("GREETING", "Welcome to the team ! <br> ");
    echo GREETING;
    
    const WISH = "Happy Birthday Sam !";
    echo WISH;

    ?>

</body>
</html>

// output 

Welcome to the team ! 
Happy Birthday Sam !