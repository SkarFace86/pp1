<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 1/4/2019
 * Time: 10:18 AM
 */
include 'functions.php';
$numbers = [7, 9, 8, 9, 8, 8, 6];
$largest = largest($numbers);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>

    <?php echo "Array: "; ?>
    <?php echo printArray($numbers); ?> <br>
    <?php echo "Largest number: $largest"; ?> <br>
</body>
</html>
