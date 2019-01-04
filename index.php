<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 1/4/2019
 * Time: 10:18 AM
 */

$numbers = [7, 9, 8, 9, 8, 8, 6];
function printArray($numbers) {
    echo implode($numbers, ", ");
}
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

    <?php printArray($numbers); ?>
</body>
</html>
