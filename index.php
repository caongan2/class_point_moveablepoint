<?php

include_once "Point.php";
include_once "MoveablePoint.php";

$point = new Point(3, 5);
$moveablepoint = new MoveablePoint(2,5,5,5);

echo $point. "<br>";
echo $moveablepoint;
