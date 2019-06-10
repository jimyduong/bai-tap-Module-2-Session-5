<?php
include_once "Colorable.php";
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$shape[1] = new Square('Square 01', 4, 4, 4);
$shape[0] = new Circle('Circle 01', 3);
$shape[2] = new Cylinder('Cylinder 01', 3, 4);
$shape[3] = new Rectangle('Rectangle 01', 3, 4);


//foreach ($shape as $value) {
for($i=0;$i<=3;$i++){
    echo $shape[$i]->show() . " is area: " . $shape[$i]->calculateArea();
    echo "<br/>";
    if ($shape[$i] instanceof Colorable) {
       echo $shape[$i]->Colorable() . "<br/>";
    }
}