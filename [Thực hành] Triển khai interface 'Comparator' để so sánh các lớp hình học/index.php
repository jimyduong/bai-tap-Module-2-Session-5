<?php
include "Circle.php";
include "Comparator.php";
include "CircleComparator.php";

$circleOne = new Circle( 6);
$circleTwo = new Circle( 8);
$circleComparator = new CircleComparator();
echo $circleComparator->compare($circleOne, $circleTwo);