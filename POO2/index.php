<?php


require_once "Car.php";
require_once "Truck.php";
require_once 'Bicycle.php';
require_once "Highway.php";


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car ('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck ("green", 4, "fuel", 1100, 100);
echo $truck -> isFull();
var_dump($truck);



?> 