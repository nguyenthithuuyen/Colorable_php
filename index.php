<?php
include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Square.php';
include_once 'Colorable.php';
$circle = new Circle('Circle ', 3);
echo $circle->howToColor();
echo "<br>";
$array = [];
array_push($array, 2);
print_r($array);

