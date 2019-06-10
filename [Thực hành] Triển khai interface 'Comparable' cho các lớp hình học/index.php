<?php
include "Circle.php";
include "Comparable.php";
include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);

echo $circleOne->compareTo($circleTwo);