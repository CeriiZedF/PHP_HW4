<?php require 'functions.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Модуль 2 частина 3</title>
</head>
    <body>
        <?php
            $array = random_array_value(8, 90, 100);
            foreach ($array as $value) {
                echo $value;
                echo "<br>";
            }
            echo "<br>Число с учетом степени: ";

            echo pow(5, 3);

            $num1 = 61;
            $num2 = 21;

            echo "<br>Num1: $num1  -  Num2: $num2";
            swap_variable($num1, $num2);
             echo "<br>Num1: $num1  -  Num2: $num2";
        ?>
    </body>
</html>
