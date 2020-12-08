<?php
// recoger dos números por la url y hacer operaciones aritméticas

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if (isset($_GET['num1']) && $_GET['num2']) {
    echo "<h3> $num1 + $num2 = " . ($num1 + $num2) . '</h3>';
    echo "<h3> $num1 - $num2 = " . ($num1 - $num2) . '</h3>';
    echo "<h3> $num1 * $num2 = " . ($num1 * $num2) . '</h3>';
    echo "<h3> $num1 / $num2 = " . ($num1 / $num2) . '</h3>';
} else {
    echo 'Debe proporcionar dos parámetros llamado num1 y num2';
}