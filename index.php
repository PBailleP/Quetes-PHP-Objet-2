<?php

require_once 'Bicycle.php';
$bike = new Bicycle("Black", 1);
echo $bike->forward();
var_dump($bike);


require_once 'SimpsonsCars.php';
$car = new SimpsonsCars("blue", 4, "electric");
var_dump($car);

require_once 'Camion.php';
$cam1 = new Camion("Red", 2, "electric", 500);
var_dump($cam1);
echo $cam1->filling();
